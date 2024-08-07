<template>
  <div>
      <div class="row">
        <div class="col-md-8 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="form-group">
                <label>Tên album</label>
                <vs-input
                  type="text"
                  size="default"
                  placeholder="Tên album"
                  class="w-100"
                   v-model="objData.name"
                />
              </div> 
              <div class="form-group">
                <label>Nội dung</label>
                <TinyMce
                  v-model="objData.content[0].content"
                />
                <el-button size="small" @click="showSettingLangExist('content')">Đa ngôn ngữ</el-button>
                 <div class="dropLanguage" v-if="showLang.content == true">
                    <div class="form-group" v-for="item,index in lang" :key="index">
                        <label v-if="index != 0">{{item.name}}</label>
                        <TinyMce v-if="index != 0" v-model="objData.content[index].content" />
                        
                    </div>
                </div>
              </div>
              <div class="form-group">
                <label>Mô tả ngắn</label>
                <vs-textarea v-model="objData.description[0].content" />
                <el-button size="small" @click="showSettingLangExist('description')">Đa ngôn ngữ</el-button>
                 <div class="dropLanguage" v-if="showLang.description == true">
                    <div class="form-group" v-for="item,index in lang" :key="index">
                        <label v-if="index != 0">{{item.name}}</label>
                        <vs-textarea v-if="index != 0" v-model="objData.description[index].content" />
                    </div>
                </div>
              </div>
              <div class="form-group">
                <label>Ảnh album</label>
                <ImageMulti v-model="objData.images" :title="'san-pham'"/>
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
                  <vs-select-item  value="1" text="Còn hàng" />
                  <vs-select-item  value="0" text="Hết hàng" />
                </vs-select>
              </div>
              <div class="form-group">
                <label>Danh mục album</label>
                <vs-select
                  class="selectExample"
                  v-model="objData.category"
                  placeholder="Danh mục"
                  @change="findCategoryType()"
                >
                <vs-select-item
                    value="0"
                    text="Không danh mục"
                  />
                  <vs-select-item
                    :value="item.id"
                    :text="JSON.parse(item.name)[0].content"
                    v-for="(item, index) in cate"
                    :key="'f' + index"
                  />
                </vs-select>
              </div>
              <div class="form-group">
                <label>Danh mục cấp 1</label>
                <vs-select
                  class="selectExample"
                  v-model="objData.type_cate"
                  placeholder="Loại"
                  :disabled=" type_cate.length == 0"
                  @change="findCategoryTypeTwo()"
                >
                  <vs-select-item
                    :value="item.id"
                    :text="JSON.parse(item.name)[0].content"
                    v-for="(item, index) in type_cate"
                    :key="'v' + index"
                  />
                </vs-select>
              </div>
 
            </div>
          </div>
        </div>
      </div>
      <div class="row fixxed">
        <div class="col-12">
          <div class="saveButton">
            <vs-button color="primary" @click="saveProducts">Cập nhật</vs-button>
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
// import InputTag from 'vue-input-tag'
export default {
  name: "product",
  data() {
    return {
      showLang:{
        title:false,
        content:false,
        description:false
      },
      tags: [],
      joke: {
        avatar: "delete-sign--v2.png",
      },
      errors:[],
      cate: [],
      VariantSku:[],
      variant_value:[],
      variant:[],
      variant_item:{},
      objData: {
        id:0,
        lang: "",
        variant:[],
        name: "",
        size: [
          {
            title: "",
            detail: ""
          },
        ],
        tags:[],
        price: 0,
        discount: 0,
        preserve:[
          {
            detail: ""
        }
        ],
        ingredient:'',
        images: [],
        qty: "",
        description: [
          {
            lang_code: "vi",
            content: "",
          },
        ],
        content: [
          {
            lang_code: "vi",
            content: "",
          },
        ],
        category: 0,
        status: 1,
        discountStatus:0,
        type_cate: 0,
        type_two:0,
        origin: "",
        thickness: "",
        hang_muc: "",
        service_id:0,
        lungtung:[],
        status_variant: 0
      },
      lang:[],
      type_cate: [],
      type_two:[],
      
      
    };
  },
  components: {
    TinyMce,
    ImageMulti
  },
  computed: {},
  watch: {
  },
  methods: {
    ...mapActions(["editId", "saveProduct", "listCate","listLanguage", "loadings","findTypeCate","findTypeCateTwo","findTags","listVariant","listVariantValue","listVariantSku"]),
    showSettingLang(value){
      if(value == "title"){
        this.showLang.title = !this.showLang.title
      }
      
    },
    showSettingLangExist(value,name = "content"){
      if(value == "content"){
        this.showLang.content = !this.showLang.content
          this.lang.forEach((value, index) => {
              if(!this.objData.content[index]){
                  var oj = {};
                  oj.lang_code = value.code;
                  oj.content = ''
                  this.objData.content.push(oj)
              }
          });
      }
      if(value == "description"){
        this.showLang.description = !this.showLang.description
          this.lang.forEach((value, index) => {
              if(!this.objData.description[index]){
                  var oj = {};
                  oj.lang_code = value.code;
                  oj.content = ''
                  this.objData.description.push(oj)
              }
          });
      }
      
    },
    listVariants(){
      this.listVariant().then(response => {
        this.variant = response.data
      }).catch(error => {

      })
    },
    choiseVariant(event){
      
      this.objData.status_variant = 1;
      this.listVariantValue({id:event.id}).then(response => {
        if (this.variant_value.length == 0) {
          var obj = {};
          obj.name = event.name;
          obj.value = response.data;
          this.variant_value.push(obj);
        }else if(!this.variant_value.some(data => data.name === event.name)){
          var obj = {};
          obj.name = event.name;
          obj.value = response.data;
          this.variant_value.push(obj);
        }
      }).catch(error => {

      })
    },
    saveProducts() {
      this.errors = [];
      if(this.objData.name == '') this.errors.push('Tên không được để trống');
      if(this.objData.content[0].content == '') this.errors.push('Nội dung không được để trống');
      if(this.objData.description[0].content == '') this.errors.push('Mô tả không được để trống');
      if(this.objData.images.length == 0) this.errors.push('Vui lòng chọn ảnh');
      if(this.objData.category == 0) this.errors.push('Chọn danh mục album');
      if (this.errors.length > 0) {
        this.errors.forEach((value, key) => {
          this.$error(value)
        })
        return;
      }else {
        this.loadings(true);
        this.objData.lungtung = this.VariantSku;
        this.saveProduct(this.objData)
          .then(response => {
            this.loadings(false);
            this.$router.push({name:'listProduct'});
            this.$success('Sửa album thành công');
            // this.$route.push({name:'listProduct'});
          })
          .catch(error => {
            this.loadings(false);
            this.$error('Sửa album thất bại');
          });
      }
    },
    listVariantSkuValue(){
      this.listVariantSku({id:this.$route.params.id}).then(response => {
        this.VariantSku = response.data;
      }).catch(error => {
        console.log(12);
      });
    },
    editById() {
      this.loadings(true);
      this.editId({id:this.$route.params.id}).then(response => {
        this.loadings(false);
          this.objData = response.data;
          this.objData.images = JSON.parse(response.data.images);
          this.objData.content = JSON.parse(response.data.content);
          this.objData.description = JSON.parse(response.data.description);
          this.objData.tags = JSON.parse(response.data.tags);
          if(response.data.size == ""){
            this.objData.size = [{title: "",detail: ""}]
          }else{
            this.objData.size = JSON.parse(response.data.size);
          }
          if(response.data.preserve == null){
            this.objData.preserve = [{detail: ""}]
          }else{
            this.objData.preserve = JSON.parse(response.data.preserve);
          }
      }).catch(error => {
        console.log(12);
      });
    },
    listLang(){
      this.listLanguage().then(response => {
        this.loadings(false);
        this.lang  = response.data
      }).catch(error => {
      })
    },
    changeLanguage(data){
      this.editById();
    },
    findCategoryType(){
      this.findTypeCate(this.objData.category).then(response => {
          this.type_cate = response.data;
        });
        this.findTags(this.objData.category).then((response) => {
        this.tags = response.data;
      });
    },
    removeVariant(key){
      this.VariantSku.splice(key,1);
    },
    remoteAr(index,key) {
      if(key == 'size'){
        this.objData.size.splice(index, 1);
      }
      if(key == 'preserve'){
        this.objData.preserve.splice(index, 1);
      }
        
    },
    addInput(key) {
        var oj = {};
        if(key =='size'){
          oj.title = "";
          oj.detail = "";
          this.objData.size.push(oj);
        }
        if(key =='preserve'){
          oj.detail = "";
          this.objData.preserve.push(oj);
        }
        
    },
    findCategoryTypeTwo() {
      this.findTypeCateTwo(this.objData.type_cate).then((response) => {
        this.type_two = response.data;
        if(this.type_two.length == 0){
          this.objData.type_two == 0;
        }
      });
    }
  },
  mounted() {
    this.editById();
    this.listCate().then(response => {
      this.cate = response.data;
    });
    this.listVariants();
    this.listLang();
    this.listVariantSkuValue();
  }
};
</script>
<style>
  .dropLanguage{
        padding: 11px;
        border: solid 1px #f2edf3;
        border-radius: 11px;
        background: #f2edf3;
        margin-top: 5px
  }
</style>