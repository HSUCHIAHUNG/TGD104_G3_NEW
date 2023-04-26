<template>
  <div>
    <!-- main_content -->
    <div class="consultant_content">
      <form action="">
        <div class="input_row">
          <div class="form_group">
            <label for="" class="input_label">興趣</label>
            <input v-model="consultantInfoT[0].tr_interest" type="text" class="input_text" placeholder="興趣" />
          </div>
          <div class="form_group">
            <label for="" class="input_label">經歷</label>
            <input v-model="consultantInfoT[0].tr_experience" type="text" class="input_text" placeholder="經歷" />
          </div>
        </div>
        <div class="input_row">
          <div class="form_group">
            <label for="" class="input_label">職業</label>
            <input v-model="consultantInfoT[0].tr_job" type="text" class="input_text" placeholder="職業" />
          </div>
          <div class="form_group">
            <label for="" class="input_label">證照</label>
            <input v-model="consultantInfoT[0].tr_license" type="text" class="input_text" placeholder="證照" />
          </div>
        </div>
        <div class="input_row">
          <div class="form_group">
            <label class="input_label" for="travelCategory"
              >選擇您可提供的旅行類別：</label
            >
            <select v-model="consultantInfoT[0].about_class" name="category" id="travelCategory" class="input_select">
              <option value="">--請選擇--</option>
              <option value="登山">登山</option>
              <option value="單車">單車</option>
              <option value="潛水">潛水</option>
            </select>
          </div>
          <div class="form_group">
            <label for="" class="input_label">費用</label>
            <input v-model="consultantInfoT[0].about_cost" type="text" class="input_text" placeholder="費用" />
          </div>
        </div>
        <div class="input_row">
          <div class="form_group">
            <label for="" class="input_label"
              >請提供網頁上詳細資料標題(20字以內)</label
            >
            <input
              type="text"
              class="input_text"
              placeholder="詳細資料標題"
              maxlength="20"
              v-model="consultantInfoT[0].about_title"
            />
          </div>
        </div>
        <h1 class="self_intro">
          簡短的介紹一下自己吧(例如：服務課程相關經歷簡述)(100字以內)
        </h1>
        <!-- <ckeditor
          :editor="editor"
          v-model="editorData"
          :config="editorConfig"
          class="ckeditor"
        ></ckeditor> -->

        <textarea name="" id="" cols="30" rows="10" placeholder="最高字數200字" v-model="consultantInfoT[0].about_introduction"></textarea>
      </form>
      <div class="btns">
        <button type="button" class="outline_btn_blue">取消</button>
        <button type="button" class="btn_blue" @click="save">確定儲存</button>
      </div>
    </div>
    <!-- main_content end-->
  </div>
</template>

<script>
// import ClassicEditor from "@ckeditor/ckeditor5-build-classic";
import $ from "jquery";

export default {
  name: "consultantInfoT",
  // components: {
  //   $,
  // },
  data() {
    return {
      // editor: ClassicEditor,
      // editorData: "",
      // editorConfig: {
      //   placeholder: "請輸入內容...",
      //   removePlugins: ["Bold", "Italic", "Link", "CKFinder", "Image", "Media"],
      // },
      consultantInfoT:[
        {
          tr_interest: "",
          about_title: "",
          tr_experience: "",
          tr_job: "",
          tr_license: "",
          about_class: "",
          about_cost: "",
          about_cid: "",
          about_introduction: "",
        }
        ],
    };
  },
  methods: {
    save() {
      console.log(this.consultantInfoT)
      console.log(this.consultantInfoT[0])
      if(this.consultantInfoT && this.consultantInfoT[0]){
        $.ajax({
        url: `${process.env.VUE_APP_AJAX_URL}consultantinfoT_update.php`,
        dataType: "text",
        type: "POST",
        data: {
          tr_interest: this.consultantInfoT[0].tr_interest,
          tr_experience: this.consultantInfoT[0].tr_experience,
          tr_job: this.consultantInfoT[0].tr_job,
          tr_license: this.consultantInfoT[0].tr_license,
          about_class: this.consultantInfoT[0].about_class,
          about_cost: this.consultantInfoT[0].about_cost,
          about_title: this.consultantInfoT[0].about_title,
          about_cid: this.consultantInfoT[0].about_cid,
        },
        success: (response) => {
          alert(response);
          // this.editorData = <p>'123'</p>
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
        },
      });}

    },
  },




  mounted() {
    // let Member_id = $cookies.get("Member_id");
    let Consultant_id = $cookies.get("Consultant_id");
    console.log(Consultant_id);
    if (!Consultant_id) {
      this.$router.back();
      alert("請登入顧問");
    } else {
      $.ajax({
        url: `${process.env.VUE_APP_AJAX_URL}consultantinfoT_select.php`,
        dataType: "json",
        type: "POST",
        data: {
          about_cid: Consultant_id,
        },
        success: (response) => {
          // this.editorData = 'this.ConsultantInfoL[0].about_introduction'
          // this.editorData = about_introduction;
          console.log(response,'sss');
          this.consultantInfoT = response;
          // console.log(this.memberInfo);
          // console.log(this.memberInfo[0].id);
          // console.log(this.memberInfo[0].m_id);
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
        },
      });
    }
  },
};
</script>

<style lang="scss">
// consultant_account
@import "../assets/tgd104-sass/new_style.scss";

.consultant_content textarea{
  width: 90%;
  border: 1px solid $dark_blue;
  margin: 0 auto;
  border-radius: 5px;
  padding: 20px;
  font-size: 16px;
  display: block;
}
</style>
