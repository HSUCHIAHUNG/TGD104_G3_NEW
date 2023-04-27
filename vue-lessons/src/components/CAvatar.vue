<template>
  <div>
    <section class="top_box">
      <form id="upload-form" enctype="multipart/form-data">
        <label for="file-input"><i class="fa fa-camera"></i></label>
        <input
          type="file"
          name="profile"
          id="file-input"
          style="display: none"
          @change="uploadFile($event)"
        />
        <img class="avatar" :src="filename" />
      </form>
      <p>{{ ConsultantName }}</p>
    </section>
  </div>
</template>

<script>
import $ from "jquery";
import {API_ARC} from "@/config";
export default {
  name: "Avatar",
  data() {
    return {
      filename: "",
      imgUrl: "",
      ConsultantName: "",
      Consultant_id: '',
    };
  },
  methods: {
    uploadFile($event) {
      //$event.preventDefault();
      let formData = new FormData($("#upload-form")[0]);
      // 上傳圖片
      
      let Consultant_id = this.$cookies.get("Consultant_id");
      $.ajax({
        url: `${process.env.VUE_APP_AJAX_URL}SingleFile_C.php`,
        type: "POST",
        data: formData,
        dataType: "text",
        processData: false,
        contentType: false,
        success: (response) => {
          console.log(response);
          this.filename = response;
          // alert(this.filename);
          document.querySelector(".avatar").style.backgroundImage = "";

            $.ajax({
            url: `${process.env.VUE_APP_AJAX_URL}FlieUpload_C.php`,
            dataType: "text",
            type: "POST",
            data: {
              Consultant_id: Consultant_id,
              C_photo1: this.filename,
              
            },
            success: function (response) {
              console.log(response);
              // alert(this.filename);
            },
            error: function (jqXHR, textStatus, errorThrown) {
              console.log(textStatus, errorThrown);
            },
          });
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.log(jqXHR, textStatus, errorThrown);
        },
      });
    },
  },
  mounted() {
    let Consultant_id = this.$cookies.get("Consultant_id");
    // 名字
    $.ajax({
      url: `${process.env.VUE_APP_AJAX_URL}avatarC.php`,
      dataType: "json",
      type: "POST",
      data: {
        Consultant_id: Consultant_id,
      },
      success: (response) => {
        if (
            (response[0].c_firstname == undefined) |
            (response[0].c_lastname == undefined) |
            !response[0].c_firstname |
            !response[0].c_lastname
          ) {
            // this.$router.back();
            // alert("請登入會員");
            this.ConsultantName = "";
          } else {
            this.ConsultantName = response[0].c_firstname + response[0].c_lastname;
          }
        
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log(textStatus, errorThrown);
      },
    });
    //
   
    $.ajax({
      url: `${process.env.VUE_APP_AJAX_URL}selectImgC.php`,
      dataType: "json",
      type: "POST",
      data: {
        Consultant_id: Consultant_id,
      },
      success: (response) => {
        if (response[0]?.c_photo1) {
          this.filename = `${API_ARC}${response[0].c_photo1}` 
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log(textStatus, errorThrown);
      },
    });
  },
};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>
