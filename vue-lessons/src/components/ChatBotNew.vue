<template>
  <div>
    <div class="chatbot_container collapse">
      <!-- header: logo + title -->
      <div class="chat-header" @click="collapse">
        <div class="logo">
          <img src="../assets/image/member/logo_header.png" alt="logo" />
        </div>
        <div class="title">陪你 陪你！</div>
      </div>
      <!-- 訊息主體 -->
      <div class="chat-body"></div>
      <!-- 按鈕們 -->
      <div class="chat-btns">
        <ul>
          <li @click="btnClicked('陪你')">陪你？</li>
          <li @click="btnClicked('關於我們')">關於我們</li>
          <li @click="btnClicked('陪你學習')">陪你學習</li>
          <li @click="btnClicked('陪你旅行')">陪你旅行</li>
          <li @click="btnClicked('加入陪你')">加入陪你</li>
          <li @click="btnClicked('會員中心')">會員中心</li>
          <li @click="btnClicked('顧問中心')">顧問中心</li>
        </ul>
      </div>
      <!-- input box + send icon  -->
      <div class="chat-input">
        <div class="input-sec">
          <input
            type="text"
            id="txtinput"
            placeholder="想問我什麼呢？"
            autofocus
          />
        </div>
        <div class="send">
          <i class="fa-solid fa-heart heart" @click="heartClicked"></i>
          <img
            src="../assets/image/member/send.svg"
            alt=""
            class="sendBtn"
            @click="sendBtnClicked"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
// export -------------------------------------------
export default {
  name: "ChatBotNew",
  data() {
    return {
      responseObj: {
        你好: "你好",
        哈囉: "哈囉！",
        陪你: "請至<a href='/main'>陪你首頁</a>看更多",
        關於我們: "請至<a href='/Respect'>關於我們</a>分頁看更多",
        陪你學習: "請至<a href='/learning'>陪你學習</a>分頁看更多",
        陪你旅行: "請至<a href='/travel'>陪你旅行</a>分頁看更多",
        加入陪你: "請至<a href='/join'>加入陪你</a>分頁看更多",
        會員中心: '請至<a href="/member">會員中心</a>看更多',
        顧問中心: '請至<a href="/consultant">顧問中心</a>看更多',
        愛心愛心: "愛心愛心",
      },
    };
  },
  methods: {
    // 點擊送出按鈕
    sendBtnClicked() {
      this.renderUserMessage();
    },
    // 點擊愛心
    heartClicked() {
      this.renderMessageEle("愛心愛心", "user");
      this.setScrollPosition();
      setTimeout(() => {
        this.renderChatbotMessage("愛心愛心");
        this.setScrollPosition();
      }, 500);
    },
    btnClicked(userInput) {
      this.renderMessageEle(userInput, "user");
      this.setScrollPosition();
      setTimeout(() => {
        this.renderChatbotMessage(userInput);
        this.setScrollPosition();
      }, 500);
    },
    // 折疊
    collapse() {
      const chatbot_container = document.querySelector(".chatbot_container");
      chatbot_container.classList.toggle("collapse");
    },
    // 渲染使用者訊息
    renderUserMessage() {
      const txtInput = document.querySelector("#txtinput");
      const userInput = txtInput.value;
      this.renderMessageEle(userInput, "user");
      txtInput.value = ""; // 清空
      this.setScrollPosition();
      setTimeout(() => {
        this.renderChatbotMessage(userInput);
        this.setScrollPosition();
      }, 500);
    },
    // 渲染機器人訊息
    renderChatbotMessage(txt) {
      const chatBody = document.querySelector(".chat-body");
      const res = this.getChatbotResponse(txt);
      // renderMessageEle(res, "chatbot");
      const messageEle = document.createElement("div");
      messageEle.classList.add("chatbot-message");
      messageEle.innerHTML = res; // 使用innerHTML設置HTML內容
      chatBody.append(messageEle);
    },
    // 渲染對話訊息
    renderMessageEle(txt, type) {
      let className = "user-message";
      const chatBody = document.querySelector(".chat-body");
      if (type !== "user") {
        className = "chatbot-message";
      }
      const messageEle = document.createElement("div");
      // 製作一個對話框
      const txtNode = document.createTextNode(txt);
      messageEle.classList.add(className);
      messageEle.append(txtNode);
      // 最後再放回chatBody的最下方
      chatBody.append(messageEle);
    },
    // 取得機器人回應
    getChatbotResponse(userInput) {
      return this.responseObj[userInput] == undefined
        ? "請輸入其他關鍵字！"
        : this.responseObj[userInput];
    },
    // 視窗自動滾動到最下方
    setScrollPosition() {
      const chatBody = document.querySelector(".chat-body");
      if (chatBody.scrollHeight > 0) {
        chatBody.scrollTop = chatBody.scrollHeight;
      }
    },
  },
  mounted() {
    // 監聽enter keyup 事件
    const txtInput = document.querySelector("#txtinput");
    txtInput.addEventListener("keyup", (e) => {
      if (e.which == 13) {
        this.renderUserMessage();
      }
    });
  },
};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>
