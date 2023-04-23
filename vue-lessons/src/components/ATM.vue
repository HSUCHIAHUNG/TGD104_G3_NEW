<template>
    <div class="atm_container container">
        <div class="atm">
            <h1>款項</h1>
            <div class="ttl_payment">
                <h2>Total Payment</h2>
                <p>${{About_cost}}</p>
            </div>
            <div class="payment_deadline">
                <h2>付款期限</h2>
                <div class="time" id="app">
                    <h3>{{ remainingTime }}</h3>
                    <p>在{{ formattedExpirationDate }}到期</p>
                </div>
            </div>
            <div class="bank">
                <img src="../assets/image/CTBC-logo.png" alt="">
                <div class="bank_account">
                    <h4>帳戶號碼:</h4>
                    <p>9225 2004 1110 8309</p>
                </div>
                <div class="bank_no">
                    <h4>銀行代碼</h4>
                    <p>822</p>
                </div>
            </div>
            <div class="directions">
                <h5>請遵照這些指示</h5>
                <div class="direction_1">
                    <i class="fa-solid fa-1"></i>
                    <p>請使用網路銀行或實體ATM將金額轉入以上陪你帳戶。</p>
                </div>
                <div class="direction_2">
                    <i class="fa-solid fa-2"></i>
                    <p>轉帳完成後30分鐘可置訂單頁面查詢付款狀態，並請保留轉帳收據直至帳款入帳。若轉帳後48小時仍未入帳，請再與我們聯繫查詢。</p>
                </div>
                <div class="direction_3">
                    <i class="fa-solid fa-3"></i>
                    <p>安全提醒：若第三方對您提出以下要求，請勿直接遵照他方指示。如：第三方要求您轉帳至私人帳號、在ATM解除分期付款、掃描QR code進入非陪你官方網站或提早要求您按下[完成訂單]等。</p>
                </div>
            </div>
        </div>
    </div>

  </template>
    
    <script>
      import VHeader from "../components/VHeader.vue";
      import VFooter from "../components/VFooter.vue";
    //   import Checkout from "../components/Checkout.vue";
      
      export default {
          name: "ATM",
          data() {
            
          return {
            deadline: new Date(new Date().getTime() + 3 * 24 * 60 * 60 * 1000), // 3天後的日期
            remainingTime: '', // 剩餘時間

            About_cost:'',
          }
          },
          components: {
          VHeader,
          VFooter,
          

          },
          computed: {
                formattedExpirationDate() {
                const year = this.deadline.getFullYear() // 年份
                const month = this.pad(this.deadline.getMonth() + 1) // 月份，要補0
                const date = this.pad(this.deadline.getDate()) // 日，要補0
                const hours = this.pad(this.deadline.getHours()) // 小時，要補0
                const minutes = this.pad(this.deadline.getMinutes()) // 分鐘，要補0

                return `${year}年${month}月${date}日 ${hours}:${minutes}`
                },
            },
          methods: {
        pad(value) {
        return String(value).padStart(2, '0') // 將數字補成兩位數
        },
        updateRemainingTime() {
        const diff = this.deadline - new Date() // 剩餘時間
        const days = Math.floor(diff / (24 * 60 * 60 * 1000)) // 剩餘天數
        const hours = Math.floor((diff / (60 * 60 * 1000)) % 24) // 剩餘小時數
        const minutes = Math.floor((diff / (60 * 1000)) % 60) // 剩餘分鐘數
        const seconds = Math.floor((diff / 1000) % 60) // 剩餘秒數

        this.remainingTime = `${days}天${hours}小時${minutes}分鐘${seconds}秒`
        },
    },
    mounted() {
        // 每秒更新剩餘時間
        setInterval(() => {
        this.updateRemainingTime()
        }, 1000)

        this.About_cost = $cookies.get('About_cost')
    },
      };



</script>
    
    
    <style lang="scss">
  @import "../assets/tgd104-sass/new_style.scss";
    </style>