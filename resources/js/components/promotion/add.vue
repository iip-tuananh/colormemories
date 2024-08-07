<template>
  <div>
      <div class="row">
        <div class="col-md-8 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="form-group">
                <label>Tiêu đề khuyến mãi</label>
                <vs-input
                  type="text"
                  size="default"
                  placeholder="Tên bài viết"
                  class="w-100"
                  v-model="objData.name"
                />
              </div>
              <div class="form-group">
                <label>Mô tả ngắn</label>
                <vs-input
                  type="text"
                  size="default"
                  placeholder="Tên bài viết"
                  class="w-100"
                  v-model="objData.description"
                />
              </div>
              <div class="form-group">
                <label>Nội dung</label>
                <TinyMce
                  v-model="objData.content"
                />
              </div>
              <div class="row">
                <div class="col-12">
                    <label>Bảng giá</label>
                    <div v-for="(item, index) in objData.banggia" :key="index">
                      <div class="row" style="padding: 10px; border: 2px dashed #c0ccda; margin-bottom: 10px;">
                        <div class="col-11">
                          <div class="row">
                            <div class="col-12" style="margin-bottom: 20px;">
                              <vs-input
                                type="text"
                                size="default"
                                :placeholder="'Tiêu đề ' + index"
                                class="w-100"
                                v-model="objData.banggia[index].title"
                              />
                            </div> <br>
                            <div class="col-12">
                              <ImageMulti v-model="objData.banggia[index].image" :title="'bang-gia'"/> 
                            </div>
                          </div>
                          <br />
                        </div>
                        <div class="col-1">
                          <a
                            href="javascript:;"
                            v-if="index != 0"
                            @click="remoteAr(index,'banggia')"
                          >
                            <img v-bind:src="'/media/' + joke.avatar" width="25" />
                          </a>
                        </div>
                      </div>
                    </div>

                    <el-button size="small" @click="addInput('banggia')"
                      >Thêm giá trị</el-button
                    >
                  </div>
              </div>
              <div class="form-group">
                <label>Ảnh đại diện</label>
                <ImageMulti v-model="objData.image" :title="'bang-gia'"/> 
              </div>
            </div>
            
          </div>
          
        </div>
        <div class="col-md-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="form-group">
                <label>Trạng thái</label>
                <vs-select v-model="objData.status"
                  >
                      <vs-select-item  value="1" text="Hiện" />
                      <vs-select-item  value="0" text="Ẩn" />
                    </vs-select>
              </div>
            </div>
          </div>
          
        </div>
        
      </div>
      <div class="row fixxed">
        <div class="col-12">
          <div class="saveButton">
            <vs-button color="primary" @click="addPromotions">Thêm mới</vs-button>
          </div>
        </div>
      </div>
    <!-- content-wrapper ends -->
  </div>
</template>


<script>
import { mapActions } from "vuex";
import TinyMce from "../_common/tinymce";
import ImageMulti from "../_common/upload_image_multi";
export default {
  name: "product",
  data() {
    return {
      joke: {
        avatar: "delete-sign--v2.png",
      },
      errors:[],
      cate:[],
      lang:[],
      showLang:{
        title:false,
        content:false,
        description:false
      },
      objData: {
        name: '',
        description: '',
        status: 1,
        image: [],
        content:"",
        banggia:[
          {
            title: "",
            image: [],
          },
        ],
        link: ""
      }
    };
  },
  components: {
    TinyMce,ImageMulti
  },
  computed: {},
  watch: {},
  methods: {
    ...mapActions(["addPromotion", "loadings"]),
    addInput(key) {
        var oj = {};
        if(key =='banggia'){
          oj.title = "";
          oj.image = [];
          this.objData.banggia.push(oj);
        }
        
    },
    remoteAr(index,key) {
      if(key == 'banggia'){
        this.objData.banggia.splice(index, 1);
      }
        
    },
    addPromotions(){
      this.errors = [];
      if(this.objData.name == '') this.errors.push('Tên không được để trống');
      if(this.objData.description == '') this.errors.push('Mô tả không được để trống');
      if(this.objData.content == '') this.errors.push('Nội dung không được để trống');
      if(this.objData.images == '') this.errors.push('Vui lòng chọn ảnh');
      if (this.errors.length > 0) {
        this.errors.forEach((value, key) => {
          this.$error(value)
        })
        return;
      }else{
        this.loadings(true);
        this.addPromotion(this.objData).then(response => {
          this.loadings(false);
          this.$router.push({name:'listPromotion'});
          this.$success('Thêm khuyến mãi thành công');
        }).catch(error => {
          this.loadings(false);
          this.$error('Thêm khuyến mãi thất bại');
        })
      }
    },
  },
  mounted() {
  }
};
</script>