<template>
    <div class="consultant_card">
        <ul>
            <li v-for="(consultant, index) in consultantInfo" :key="consultant.id">
                <input type="checkbox" name="" id="button_id">
                <!-- <label for="button_id"></label> -->
                <a href=""><img :src="consultant.url" alt="consultant.url"></a>
                <!-- <a href=""><img src="../assets/consultant_card.png" alt=""></a> -->
                <h1>{{consultant.name}}</h1>
                <h2>{{consultant.experience}}</h2>
                <!-- <i class="fa-regular fa-heart"></i> -->
                <i class="fa-regular fa-heart" :class="{ 'fa-solid': isFavorite(index) }" @click="toggleFavorite(index)"></i>
            </li>
        </ul>
    </div>          
</template>

<script>


export default {
  name: "TravelConsultantAll",
  data(){
        return {
             consultantInfo: [
                {id: 'C01',url:require('../../../image/consultant_card.png'),name: '裴大尼 ',experience: '5年經驗登山嚮導', gender:'男',},
                {id: 'C02',url:require('../../../image/consultant_card.png'),name: '裴中尼 ',experience: '台灣百岳征服者', gender:'男',},
                {id: 'C03',url:require('../../../image/consultant_card.png'),name: '裴小尼 ',experience: '3年經驗登山嚮導 ', gender:'男',},
                {id: 'C04',url:require('../../../image/consultant_card.png'),name: '裴上尼',experience: '4年經驗登山嚮導', gender:'男',},
                {id: 'C05',url:require('../../../image/consultant_card.png'),name: '裴大尼',experience: '5年經驗登山嚮導', gender:'男',},
                {id: 'C06',url:require('../../../image/consultant_card.png'),name: '裴大尼',experience: '5年經驗登山嚮導', gender:'男',},
                {id: 'C07',url:require('../../../image/consultant_card.png'),name: '裴大尼',experience: '5年經驗登山嚮導', gender:'男',},
                {id: 'C08',url:require('../../../image/consultant_card.png'),name: '裴大尼',experience: '5年經驗登山嚮導', gender:'男',},
                {id: 'C09',url:require('../../../image/consultant_card_girl.png'),name: '裴大尼',experience: '5年經驗登山嚮導', gender:'女',},
                {id: 'C10',url:require('../../../image/consultant_card_girl.png'),name: '裴大尼',experience: '5年經驗登山嚮導', gender:'女',},
                {id: 'C11',url:require('../../../image/consultant_card_girl.png'),name: '裴大尼',experience: '5年經驗登山嚮導', gender:'女',},
                {id: 'C12',url:require('../../../image/consultant_card_girl.png'),name: '裴大尼',experience: '5年經驗登山嚮導', gender:'女',},
                {id: 'C13',url:require('../../../image/consultant_card_girl.png'),name: '裴大尼',experience: '5年經驗登山嚮導', gender:'女',},
                {id: 'C14',url:require('../../../image/consultant_card_girl.png'),name: '裴大尼',experience: '5年經驗登山嚮導', gender:'女',},
                {id: 'C15',url:require('../../../image/consultant_card_girl.png'),name: '裴大尼',experience: '5年經驗登山嚮導', gender:'女',},
                {id: 'C16',url:require('../../../image/consultant_card_girl.png'),name: '裴大尼',experience: '5年經驗登山嚮導', gender:'女',},
            ],
            favorites: [],
 
        }
    },   
  methods: {
    isFavorite(index) {
        return this.favorites.includes(index)
    },
    toggleFavorite(index) {
        if (this.isFavorite(index)) {
        const favoriteIndex = this.favorites.indexOf(index)
        this.favorites.splice(favoriteIndex, 1)
        } else {
        this.favorites.push(index)
        }
    },
},
};

</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>
