<template>
    <VHeader></VHeader>
    <div class="process3">
    <div>
        <div class="order_success">
        <!-- <img src="../assets/image/check.png" alt="" /> -->
        <div class="order_content">
            <i class="fa-regular fa-circle-check"></i>
            <div>
                <h3>訂單成立!</h3>
                <p>訂單編號:{{Or_number}}</p>
            </div>
        </div>
        </div>

        <h2 class="check_order">
            <!-- <button class="btn_orange">查看訂單</button> -->
            <router-link to="/memberbooking"><button class="btn_orange">查看訂單</button></router-link>
        </h2>

    </div>
    </div>

    <VFooter></VFooter>
</template>
  
<script>
import OrderSuccess from "../components/OrderSuccess.vue";
import VHeader from "@/components/VHeader.vue";
import VFooter from "../components/VFooter.vue";

export default {
    name: "LearningOrderSuccess",
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
      this.Consultant_id = $cookies.get("L_consultant_id")
      this.Or_number = 'ordernum' + this.Consultant_id
        
    },
};
</script>
  
  
<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
.process3{
    background-color: #f8f4eb;
    padding-top: 100px;
}
</style>