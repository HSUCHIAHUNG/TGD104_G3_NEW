<template>
  <div>
    <div>
      <form
        id="upload-form"
        enctype="multipart/form-data"
        @submit.prevent="uploadFile($event)"
      >
        <i class="fa fa-camera"></i>
        <input type="file" name="profile" id="file-input" />
        &nbsp;
        <!-- <input type="button" value="上傳檔案" @click.prevent="uploadFile" /> -->
        <button type="submit" value="">上傳檔案</button>
      </form>
    </div>

    <!------------avatar----------->
    <div>
      <section class="top_box">
        <img class="avatar" :src="filename" style="border: 3px solid red" />
        <br />
      </section>
    </div>
  </div>
</template>

<script>
import $ from "jquery";

export default {
  name: "PeiTest2",
  data() {
    return {
      filename: "",
      imgUrl: "",
    };
  },
  methods: {
    uploadFile($event) {
      //$event.preventDefault();
      let formData = new FormData($("#upload-form")[0]);
      // 上傳圖片
      console.log(formData);

      $.ajax({
        url: "http://localhost/NEW_G3/vue-lessons/src/api/SingleFile.php",
        type: "POST",
        data: formData,
        dataType: "text",
        processData: false,
        contentType: false,
        success: (response) => {
          console.log(response);
          this.filename = `http://localhost/img/${response}`;
          console.log(this.filename);

          // $.ajax({
          //   url: "http://localhost/NEW_G3/vue-lessons/src/api/selectImg.php",
          //   dataType: "json",
          //   type: "POST",
          //   data: {},
          //   success: (response) => {
          //     console.log(response[0].m_photo);
          //     this.imgUrl = `http://localhost/NEW_G3/vue-lessons/public/upload/${response[0].m_photo}`;
          //     console.log(this.imgUrl);
          //   },
          //   error: function (jqXHR, textStatus, errorThrown) {
          //     console.log(textStatus, errorThrown);
          //   },
          // });
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.log(jqXHR, textStatus, errorThrown);
        },
      });

      // select 圖片
      /*
      $.ajax({
        url: "http://localhost/NEW_G3/vue-lessons/src/api/selectImg.php",
        dataType: "json",
        type: "POST",
        data: {},
        success: (response) => {
          console.log(response[0].m_photo);
          this.imgUrl = `http://localhost/NEW_G3/vue-lessons/public/upload/${response[0].m_photo}`;
          console.log(this.imgUrl);
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
        },
      });
      */
    },
  },
};
</script>

<style></style>
