<template>
  <div>
    <div>
      <form id="upload-form" enctype="multipart/form-data">
        <label for="file-input"><i class="fa fa-camera"></i></label>
        <input
          type="file"
          name="profile"
          id="file-input"
          style="display: none"
          @change="uploadFile($event)"
        />
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
        url: "http://localhost/TGD104_G3_NEW/vue-lessons/src/api/SingleFile.php",
        type: "POST",
        data: formData,
        dataType: "text",
        processData: false,
        contentType: false,
        success: (response) => {
          console.log(response);
          this.filename = `http://localhost/img/${response}`;
          console.log(this.filename);
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.log(jqXHR, textStatus, errorThrown);
        },
      });
    },
  },
};
</script>

<style></style>
