<template>
    <VHeader></VHeader>

    <div>
        <div class="order_success">
        <img src="../assets/image/check.png" alt="" />
        <div class="order_content">
            <h3>訂單成立!</h3>
            <p>訂單編號:{{Or_number}}</p>
        </div>
        </div>

        <h2 class="check_order">
            <!-- <button class="btn_orange">查看訂單</button> -->
            <router-link to="/memberbooking"><button class="btn_orange">查看訂單</button></router-link>
        </h2>

    </div>

    <VFooter></VFooter>
</template>
  
<script>
import OrderSuccess from "../components/OrderSuccess.vue";
import VHeader from "@/components/VHeader.vue";
import VFooter from "../components/VFooter.vue";

export default {
    name: "TravelOrderSuccess",
    data() {
        return {
            Consultant_id: '',
            Or_number: '',
        };
    },
    components: {
        OrderSuccess,
        VHeader,
        VFooter,
    },
    mounted() {
      this.Consultant_id = $cookies.get("selectedConsultant")
      this.Or_number = 'ordernum' + this.Consultant_id
        
    },
};
</script>
  
  
<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>