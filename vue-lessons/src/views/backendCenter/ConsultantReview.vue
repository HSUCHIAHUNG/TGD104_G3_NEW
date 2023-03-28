

<template>
    <div class="ConsultantReview_container">

       <div class="orderbtn">
            <button class="outline_btn_orange">陪你旅行</button>
            <button class="outline_btn_orange">陪你學習</button>
        </div>

        <table>
            <tr>
                <th>姓名</th>
                <th>暱稱</th>
                <th>信箱(帳號)</th>
                <th>身分證字號</th>
                <th>性別</th>
            </tr>
            <tr v-for="(item, index) in items" :key="index">
                <td>{{item.id}}</td>
                <td>{{item.tr_category}}</td>
                <td>{{item.name}}</td>
                <td>{{item.tr_cost}}</td>
                <td>{{item.tro_booking_data}}</td>
            </tr>
            <tr>
                <th>姓名</th>
                <th>暱稱</th>
                <th>信箱(帳號)</th>
                <th>身分證字號</th>
                <th>性別</th>
            </tr>
            <tr>
                <td>{{item.id}}</td>
                <td>{{item.tr_category}}</td>
                <td>{{item.name}}</td>
                <td>{{item.tr_cost}}</td>
                <button>123</button>
                <button>123</button>
            </tr>
        </table>
    </div>
</template>

<script>

    export default {
        data(){ 
            return {
                items: [
                { id: 'H124803062', tr_category: '登山',name: '舞動小敏之腳踝90分', tr_cost: '1500元',tro_booking_data: '1995/01/24',tro_order_data: '1993/03/19', },
                // { id: 'H124803062', tr_category: '登山',name: '口頭禪蝦怎麼辦的品諭', tr_cost: '1500元',tro_booking_data: '1995/01/24',tro_order_data: '1993/03/19', },
                // { id: 'H124803062', tr_category: '登山',name: '怕被看腳踝的霈霈', tr_cost: '1500元',tro_booking_data: '1995/01/24',tro_order_data: '1993/03/19', },
                // { id: 'H124803062', tr_category: '登山',name: '炫炫', tr_cost: '1500元',tro_booking_data: '1995/01/24',tro_order_data: '1993/03/19', },
                // { id: 'H124803062', tr_category: '登山',name: '立偉', tr_cost: '1500元',tro_booking_data: '1995/01/24',tro_order_data: '1993/03/19', },
                // { id: 'H124803062', tr_category: '登山',name: '嘉宏', tr_cost: '1500元',tro_booking_data: '1995/01/24',tro_order_data: '1993/03/19', },
                // { id: 'H124803062', tr_category: '登山',name: '小敏', tr_cost: '1500元',tro_booking_data: '1995/01/24',tro_order_data: '1993/03/19', },
                // { id: 'H124803062', tr_category: '登山',name: '品諭', tr_cost: '1500元',tro_booking_data: '1995/01/24',tro_order_data: '1993/03/19', },
                // { id: 'H124803062', tr_category: '登山',name: '娟霈', tr_cost: '1500元',tro_booking_data: '1995/01/24',tro_order_data: '1993/03/19', },
                ],
            }
        },   
        
        methods: {
            
        },

        computed: {
       
        },
    }

</script>

<style lang="scss">

    .ConsultantReview_container{
        
        .orderbtn{

        }
    }

</style>