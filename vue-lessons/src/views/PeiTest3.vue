<template>
  <div>
    <div>
      <form
        id="upload-form"
        enctype="multipart/form-data"
        @submit.prevent="uploadFile($event)"
      >
        <input type="file" name="profile" id="file" @change="fileChange" />
        &nbsp;
        <!-- <input type="button" value="上傳檔案" @click.prevent="uploadFile" /> -->
        <button type="submit" value="">上傳檔案</button>
      </form>
    </div>

    <!------------avatar----------->
    <div>
      <section class="top_box">
        <img class="avatar" :src="filename" style="border: 3px solid red" />
      </section>
      <div id="result"></div>
    </div>
  </div>
</template>

<script>
import $ from "jquery";
import UpLoadImg from "@/components/UpLoadImg.vue";

export default {
  name: "PeiTest2",
  data() {
    return {
      filename: "",
    };
  },
  components: {
    UpLoadImg,
  },

  methods: {
    fileChange() {
      let file_data = $("#file").prop("files")[0]; // 取得所選擇的檔案
      let form_data = new FormData(); // 建立一個FormData物件
      console.log(form_data);
    },
    uploadFile($event) {
      $event.preventDefault();
      form_data.append("profile", file_data); // 將檔案加入FormData物件中
      // 上傳圖片

      $.ajax({
        url: "http://localhost/NEW_G3/vue-lessons/src/api/SingleFile.php",
        type: "POST",
        data: form_data,
        dataType: "text",
        processData: false,
        contentType: false,
        success: (response) => {
          $event.preventDefault();
          console.log(response);

          // const fileInput = document.getElementById("file-input");
          // const filename = fileInput.files[0].name;
          // console.log(filename);
          // this.filename = `http://localhost/NEW_G3/vue-lessons/public/upload/${filename}`;
          // console.log(this.filename);
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
