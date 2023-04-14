<template>
  <div>
    <VHeaderTest></VHeaderTest>
    姓
    <input type="text" v-model="m_firstname" />
    名
    <input type="text" v-model="m_lastname" />
    信箱
    <input type="text" v-model="m_mail" />
    生日
    <input
      type="date"
      v-model="m_birth"
      min="1900-01-01"
      max="2023-12-31"
      class="input_text"
    />
    性別
    <select name="gender" id="gender" class="input_select" v-model="m_gender">
      <option value="">--請選擇--</option>
      <option value="male">男性</option>
      <option value="female">女性</option>
    </select>
    密碼
    <input type="text" v-model="m_password" />
    <button type="button" @click="doQuery">送出</button>
    <p>
      結果: <br />
      <span id="result"></span>
    </p>
  </div>
</template>

<script>
import $ from "jquery";
import VHeaderTest from "@/components/VHeaderTest.vue";

export default {
  name: "TestSignUp",
  data() {
    return {
      m_firstname: "",
      m_lastname: "",
      m_mail: "",
      m_password: "",
      m_birth: "",
      m_gender: "",
    };
  },
  components: {
    $,
    VHeaderTest,
  },
  methods: {
    doQuery() {
      console.log(this.m_birth);
      console.log(this.m_gender);
      $.ajax({
        url: "http://localhost/NEW_G3/vue-lessons/src/api/MSignUp.php",
        dataType: "text",
        type: "POST",
        data: {
          m_firstname: this.m_firstname,
          m_lastname: this.m_lastname,
          m_mail: this.m_mail,
          m_password: this.m_password,
          m_birth: this.m_birth,
          m_gender: this.m_gender,
        },
        success: function (response) {
          $("#result").html(response);
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
        },
      });
    },
  },
  mounted() {
    console.log("ok");
  },
};
</script>

<style></style>
