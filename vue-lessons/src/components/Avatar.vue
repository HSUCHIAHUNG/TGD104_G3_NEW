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
        <img class="avatar" :src="`${imglocation}`" />
      </form>
      <p>{{ memberName }}</p>
    </section>
  </div>
</template>

<script>
import $ from "jquery";
import { API_URL } from "@/config";
import { API_ARC } from "@/config";
export default {
  name: "Avatar",
  data() {
    return {
      filename: "",
      imgUrl: "",
      memberName: "",
      img_src: "",
      imglocation: "",
    };
  },
  methods: {
    uploadFile($event) {
      //$event.preventDefault();
      let formData = new FormData($("#upload-form")[0]);
      // 上傳圖片
      console.log(formData);
      let member_id = this.$cookies.get("Member_id");

      $.ajax({
        url: `${process.env.VUE_APP_AJAX_URL}SingleFile.php`,
        type: "POST",
        data: formData,
        dataType: "text",
        processData: false,
        contentType: false,
        success: (response) => {
          console.log(response);
          this.filename = response;
          console.log(this.filename);
          this.imglocation = `${this.img_src}${this.filename}`;
          console.log(this.imglocation);
          document.querySelector(".avatar").style.backgroundImage = "";

          console.log(member_id);

          $.ajax({
            url: `${process.env.VUE_APP_AJAX_URL}FlieUpload.php`,
            dataType: "text",
            type: "POST",
            data: {
              member_id: member_id,
              m_photo: this.filename,
            },
            success: function (response) {
              console.log(response);
              alert("上傳成功");
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
    this.img_src = `${API_ARC}`;
    let member_id = this.$cookies.get("Member_id");

    if (member_id) {
      // 名字
      $.ajax({
        url: `${process.env.VUE_APP_AJAX_URL}avatar.php`,
        dataType: "json",
        type: "POST",
        data: {
          member_id: member_id,
        },
        success: (response) => {
          if (
            (response[0].m_firstname == undefined) |
            (response[0].m_lastname == undefined) |
            !response[0].m_firstname |
            !response[0].m_lastname
          ) {
            // this.$router.back();
            // alert("請登入會員");
            this.memberName = "";
          } else {
            this.memberName = response[0].m_firstname + response[0].m_lastname;
          }
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
        },
      });
      // 照片
      $.ajax({
        url: `${process.env.VUE_APP_AJAX_URL}selectImg.php`,
        dataType: "json",
        type: "POST",
        data: {
          member_id: member_id,
        },
        success: (response) => {
          if (!response[0].m_photo) {
            // this.$router.back();
            // alert("請登入會員");
          } else {
            console.log(response[0].m_photo);
            this.filename = response[0].m_photo;
            this.imglocation = `${this.img_src}${this.filename}`;
          }
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
        },
      });
    } else {
      // this.$router.back();
      // alert("請登入會員");
    }
  },
};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>
