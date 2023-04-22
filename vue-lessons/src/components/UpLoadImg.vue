<template>
  <div>
    <form id="upload-form" method="post" enctype="multipart/form-data">
      <input type="file" name="profile" />
      &nbsp;
      <input type="button" value="上傳檔案" @click="uploadFile" />
    </form>
    <div id="result"></div>
  </div>
</template>

<script>
import $ from "jquery";

export default {
  name: "UpLoadImg",
  methods: {
    uploadFile() {
      let formData = new FormData($("#upload-form")[0]);
      $.ajax({
        url: "http://localhost/TGD104_G3_NEW/vue-lessons/src/api/SingleFile.php",
        type: "POST",
        data: formData,
        dataType: "text",
        processData: false,
        contentType: false,
        success: function (response) {
          console.log(response);
          $("#result").html(response);
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
        },
      });
    },
  },
};
</script>

<style></style>
