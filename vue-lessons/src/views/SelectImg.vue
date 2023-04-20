<template>
  <div>
    <div id="result">
      <img :src="imgUrl" alt="" class="src" />
    </div>

    <!------------avatar----------->
    <div>
      <section class="top_box"></section>
    </div>
  </div>
</template>

<script>
import $ from "jquery";
import UpLoadImg from "@/components/UpLoadImg.vue";

export default {
  name: "selectImg",
  data() {
    return {
      imgUrl: "",
    };
  },
  components: {
    UpLoadImg,
  },

  methods: {
    selectImg() {
      $.ajax({
        url: "http://localhost/NEW_G3/vue-lessons/src/api/selectImg.php",
        dataType: "json",
        type: "POST",
        data: {},
        success: function (response) {
          if (window.confirm(response)) {
            location.reload();
          }
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
        },
      });
    },
  },
  mounted() {
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
  },
};
</script>

<style></style>
