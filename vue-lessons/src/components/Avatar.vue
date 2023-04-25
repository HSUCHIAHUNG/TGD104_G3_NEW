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
        <img class="avatar" :src="`${img_src}${filename}`" />
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
    };
  },
  methods: {
    uploadFile($event) {
      //$event.preventDefault();
      let formData = new FormData($("#upload-form")[0]);
      // 上傳圖片
      console.log(formData);

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
          document.querySelector(".avatar").style.backgroundImage = "";
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
            this.$router.back();
            alert("請登入會員");
            this.memberName = "";
          } else {
            this.memberName = response[0].m_firstname + response[0].m_lastname;
          }
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
        },
      });
      //
      $.ajax({
        url: `${process.env.VUE_APP_AJAX_URL}selectImg.php`,
        dataType: "json",
        type: "POST",
        data: {},
        success: (response) => {
          if (!response[0].m_photo) {
            this.$router.back();
            alert("請登入會員");
          } else {
            console.log(response[0].m_photo);
            this.filename = response[0].m_photo;
            console.log(this.filename);
          }
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
        },
      });
    } else {
      this.$router.back();
      alert("請登入會員");
    }
  },
};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>