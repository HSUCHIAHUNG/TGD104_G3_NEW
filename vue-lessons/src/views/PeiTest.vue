<template>
  <div>
    <VHeaderTest></VHeaderTest>
    <UpLoadImg></UpLoadImg>
    <div v-for="(item, index) in c_list">
      <p>{{ item.c_firstname + item.c_lastname }}</p>
      <img src="" :alt="item.c_photo1" />
      <p v-if="item.s_title">{{ item.s_title }}</p>
      <p v-else>{{ item.tr_title }}</p>
    </div>
  </div>
</template>

<script>
import $ from "jquery";
import VHeaderTest from "@/components/VHeaderTest.vue";
import UpLoadImg from "@/components/UpLoadImg.vue";

export default {
  name: "PeiTest",
  data() {
    return {
      account: "",
      favList: [],
      c_list: [],
    };
  },
  components: {
    VHeaderTest,
    UpLoadImg,
  },
  methods: {},
  mounted() {
    let vm = this; // 將 Vue instance 存到變數 vm 中
    let Member_id = $cookies.get("Member_id");
    if (Member_id) {
      $.ajax({
        url: "http://localhost/NEW_G3/vue-lessons/src/api/memberfav.php",
        dataType: "json",
        type: "POST",
        data: {
          id: Member_id,
        },
        success: (response) => {
          if (
            response &&
            response[0] &&
            response[0].m_fav &&
            JSON.parse(response[0].m_fav).consultant
          ) {
            console.log(response);
            console.log(response[0]);
            console.log(response[0].m_fav);
            console.log(JSON.parse(response[0].m_fav));
            vm.favList = JSON.parse(response[0].m_fav).consultant; // 將 vm.favList 設置為取得的陣列
            // 取得顧問資料
            $.ajax({
              url: "http://localhost/NEW_G3/vue-lessons/src/api/memberfavS.php",
              dataType: "json",
              type: "POST",
              data: {
                id: Member_id,
              },
              success: (response) => {
                let arr = response;
                console.log(arr);
                arr.filter((item) => {
                  if (vm.favList.includes(item.id)) {
                    vm.c_list.push(item);
                    console.log(vm.c_list);
                  }
                });
              },
              error: function (jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
              },
            });
          }
        },

        error: function (jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
        },
      });
    }
  },
};
</script>

<style></style>
