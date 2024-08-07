<template>
  <div>
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-3">
                  <h4 class="card-title">Thêm mới video</h4>
                </div>
              </div>
              <!-- <p class="card-description">Basic form elements</p> -->
              <form class="forms-sample">
                <div class="form-group">
                  <label>Tên video</label>
                  <vs-input
                    class="w-100"
                    v-model="objData.name"
                    :class="{ 'is-invalid': submitted && $v.objData.name.$error }"
                    font-size="40px"
                  />
                </div>
                <div class="form-group">
                   <label for="exampleInputName1">Danh mục video</label>
                  <vs-select class="selectExample" v-model="objData.cate_tag_id" placeholder="Danh mục">
                  <vs-select-item
                    :value="0"
                    text="Danh mục video"
                  />
                  
                  <vs-select-item 
                    :value="item.id"
                    :text="item.name"
                    v-for="(item,index) in categoryList"
                    :key="'f'+index"
                  />
                </vs-select>
                </div>
                <div class="form-group">
                  <label>Link Video</label>
                  <vs-input
                    class="w-100"
                    v-model="objData.iframe_video"
                    font-size="40px"
                  />
                </div>
                <div class="form-group">
                  <label>Link bảng giá</label>
                  <vs-input
                    class="w-100"
                    v-model="objData.link_bang_gia"
                    font-size="40px"
                  />
                </div>
                <div class="form-group">
                  <label>Nội dung</label>
                  <TinyMce
                    v-model="objData.content"
                  />
                </div>
                <div class="form-group">
                  <label>Ảnh đại diện</label>
                  <image-upload
                    v-model="objData.image"
                    type="avatar"
                    :title="'video-'"
                  ></image-upload>
                </div>
                <div class="form-group">
                  <label for="exampleInputName1">Trạng thái</label>
                  <vs-select v-model="objData.status"
                  >
                    <vs-select-item  value="1" text="Hiện" />
                    <vs-select-item  value="0" text="Ẩn" />
                  </vs-select>
                </div>
                <vs-button
                  color="success"
                  type="gradient"
                  class="mr-left-45"
                  @click="saveEdit()"
                >Lưu lại</vs-button>
              </form>
            </div>
          </div>
        </div>
      </div>
    <!-- content-wrapper ends -->
  </div>
</template>

<script>
import { mapActions } from "vuex";
import TinyMce from "../_common/tinymce";
export default {
  data() {
    return {
      objData: {
        name: "",
        status: 1,
        iframe_video:"",
        content:"",
        cate_tag_id:"",
        image:"",
        link_bang_gia:"",
        cate_product_id:""
      },
      categoryList:[],
      categoryPro:[],
      lang: [],
      img: "",
      submitted: false
    };
  },
  components: {
    TinyMce,
  },
  methods: {
    ...mapActions([
      "saveTag",
      "listLanguage",
      "loadings","listTagCate","listCate"
    ]),
    nameImage(event) {
      this.objData.avatar = event;
    },
    listCatePro() {
      this.loadings(true);
      this.listCate()
      .then(response => {
          this.loadings(false);
          this.categoryPro = response.data;
        });
    },
    listCategory() {
      this.loadings(true);
      this.listTagCate()
      .then(response => {
          this.loadings(false);
          this.categoryList = response.data;
        });
    },
    saveEdit() {
      this.errors = [];
      if(this.objData.name == '') this.errors.push('Tên không được để trống');
      if(this.objData.iframe_video == '') this.errors.push('Link Video không được để trống');
      if(this.objData.image == '') this.errors.push('Ảnh đại diện không được để trống');
      if(this.objData.cate_tag_id == '') this.errors.push('Danh mục không được để trống');
      if (this.errors.length > 0) {
        this.errors.forEach((value, key) => {
          this.$error(value)
        })
        return;
      } else {
        this.loadings(true);
        this.saveTag(this.objData)
          .then(response => {
            this.loadings(false);
            this.$router.push({ name: "list_tag" });
            this.$success("Thêm thành công");
            this.$router.push({ name: "list_tag" });
          })
          .catch(error => {
            this.loadings(false);
            this.$error("Thêm tags thất bại");
          });
      }
    },
    listLang() {
      this.listLanguage()
        .then(response => {
          this.loadings(false);
          this.lang = response.data;
        })
        .catch(error => {});
    },
  },
  mounted() {
    this.loadings(true);
    this.listLang();
    this.listCategory();
    this.listCatePro();
  }
};
</script>

<style>
</style>