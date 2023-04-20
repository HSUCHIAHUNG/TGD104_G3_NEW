<template>
  <div>
    <div>
      <form
        id="upload-form"
        enctype="multipart/form-data"
        @submit.prevent="uploadFile"
      >
        <input type="file" name="profile" id="file-input" />
        &nbsp;
        <button type="submit">上傳檔案</button>
      </form>
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
      fileImage: "",
    };
  },
  components: {
    UpLoadImg,
  },
  methods: {
    uploadFile() {
      let fileInput = document.getElementById("file-input").files[0].name;
      console.log(fileInput); // 檔名

      let formData = new FormData($("#upload-form")[0]);
      console.log(formData);

      // $.ajax({
      //   url: "https://yesno.wtf/",
      //   type: "post",
      //   dataType: "json",
      //   data: {
      //     formData: this.fileImage,
      //   },
      //   success: function (d) {
      //     console.log(d);
      //   },
      // });
    },
  },
};
</script>
<style></style>
