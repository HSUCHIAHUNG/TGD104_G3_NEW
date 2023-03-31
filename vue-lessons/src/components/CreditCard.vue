<template>
    <div class="method_credit">
        <div class="about_credit">
            <span>卡片詳情</span>
            <span>
                <i class="fa-brands fa-cc-visa"></i>
                <i class="fa-brands fa-cc-mastercard"></i>
                <i class="fa-brands fa-cc-jcb"></i>
            </span>

        </div>
        <hr>
        <label>信用卡號碼：</label>
        <input type="text" class="credit_card" maxlength="16">
        <br>
        <label>到期日：</label>
        <input type="text" class="credit_date" placeholder="MM/YY">
        <br>
        <label>安全驗證碼：</label>
        <input type="text" class="credit_date">
        <hr>
        <div class="notice_credit">
            <i class="fa-solid fa-triangle-exclamation"></i>
            <span> 您的信用卡資訊會被嚴格保護!</span>
            <h5>陪你並不會留存您的信用卡完整資訊，且符合PCI-DSS國際安全認證，致力提供安全且便捷的交易環境。</h5>
        </div>
    </div>
</template>
  
  <script>
  export default {
    name: "CreditCard",
    data() {
      return {};
    },
  };
  </script>
  
  <style lang="scss">
    @import "../assets/tgd104-sass/new_style.scss";
  </style>
  