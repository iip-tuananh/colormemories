<template>
  <div>
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-3">
                  <h4 class="card-title">Thêm mới danh mục video</h4>
                </div>
              </div>
              <!-- <p class="card-description">Basic form elements</p> -->
              <form class="forms-sample">
                <div class="form-group">
                  <vs-input
                    class="w-100"
                    v-model="objData.name"
                    :class="{ 'is-invalid': submitted && $v.objData.name.$error }"
                    font-size="40px"
                    label-placeholder="Tên danh mục"
                  />
                </div>
                <div class="form-group">
                  <label>Nội dung</label>
                  <TinyMce
                    v-model="objData.content"
                  />
                </div>
                <div class="form-group">
                  <label for="exampleInputName1">Trạng thái hiển thị</label>
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
        content:"",
        cate_product_id:"",
        status_filter:1
      },
      categoryList:[],
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
      "saveTagCate",
      "listLanguage",
      "loadings"
    ]),
    nameImage(event) {
      this.objData.avatar = event;
    },

    saveEdit() {
      this.errors = [];
      if(this.objData.name == '') this.errors.push('Tên danh mục không được để trống');
      if (this.errors.length > 0) {
        this.errors.forEach((value, key) => {
          this.$error(value)
        })
        return;
      } else {
        this.loadings(true);
        this.saveTagCate(this.objData)
          .then(response => {
            this.loadings(false);
            this.$router.push({ name: "list_tag_cate" });
            this.$success("Thêm danh mục video thành công");
            this.$router.push({ name: "list_tag_cate" });
          })
          .catch(error => {
            this.loadings(false);
            this.$error("Thêm danh mục video thất bại");
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
  }
};
</script>

<style>
</style>