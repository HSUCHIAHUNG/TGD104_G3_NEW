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
      <p>{{ memberName }}</p>
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
      memberName: "",
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
          this.filename = `${API_ARC}${response}`;
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
    let member_id = this.$cookies.get("Member_id");
    // 名字
    $.ajax({
      url: `${process.env.VUE_APP_AJAX_URL}avatar.php`,
      dataType: "json",
      type: "POST",
      data: {
        member_id: member_id,
      },
      success: (response) => {
        console.log(response[0].m_firstname);
        this.memberName = response[0].m_firstname + response[0].m_lastname;
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
        console.log(response[0].m_photo);
        this.filename = `${API_ARC}${response[0].m_photo}`;
        console.log(this.filename);
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
