<template>


    <div>
        <OrderSuccess></OrderSuccess>

        <h2 class="check_order">
            <!-- <button class="btn_orange">查看訂單</button> -->
            <router-link to="/memberbooking"><button class="btn_orange">查看訂單</button></router-link>
        </h2>

    </div>

</template>
  
<script>
import OrderSuccess from "../components/OrderSuccess.vue";

export default {
    name: "TravelOrderSuccess",
    data() {
    return {};
    },
    components: {
    OrderSuccess,
    },
};
</script>
  
  
<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>