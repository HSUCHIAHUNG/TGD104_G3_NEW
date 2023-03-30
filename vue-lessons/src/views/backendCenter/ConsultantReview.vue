
<template>
    <div class="ConsultantReview">

        <div class="ConsultantReview_btn">
            <button class="outline_btn_orange">陪你旅行</button>
            <button class="outline_btn_orange">陪你學習</button>
        </div>

        <div class="ConsultantReview_table">
            <table v-for="(item, index) in items" :key="index">
                <tr>
                    <th>姓名</th>
                    <th>暱稱</th>
                    <th>信箱(帳號)</th>
                    <th>身份證字號</th>
                    <th>性別</th>
                    <th></th>
                    
                </tr>
                <tr>
                    <td>{{item.name}}</td>
                    <td>{{item.c_nickname}}</td>
                    <td>{{item.c_email}}</td>
                    <td>{{item.c_id}}</td>
                    <td>{{item.c_gender}}</td>
                    <td><img :src='item.url' alt=""></td>
                    <td><img :src="item.url" alt="logo"></td>


                </tr>
                <tr>
                    <th>電話號碼</th>
                    <th>出生年月日</th>
                    <th>居住地區</th>
                    <th>個性</th>
                    <th></th>
                    <th></th>

                </tr>
                <tr>
                    <td>{{item.c_phone}}</td>
                    <td>{{item.c_birth}}</td>
                    <td>{{item.c_area}}</td>
                    <td>{{item.c_personality}}</td>
                    <button>良名證</button>
                    <button>身份證</button>
                </tr>
                <tr>
                    <th>最高學歷</th>
                    <th>畢業於</th>
                    <th>教學地址</th>
                    <th>課程費用</th>
                    <th>學習類別</th>
                    <th>服務課程</th>
                </tr>
                <tr>
                    <td>{{item.c_phone}}</td>
                    <td>{{item.c_birth}}</td>
                    <td>{{item.c_area}}</td>
                    <td>{{item.c_personality}}</td>
                    <td>{{item.c_personality}}</td>
                    <td>{{item.c_personality}}</td>
                </tr>
                <tr>
                    <th>相關經歷簡述及自我介紹</th>
                    <th>學習標題 </th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <td>{{item.c_phone}}</td>
                    <td>{{item.c_birth}}</td>
                    <button>良名證</button>
                    <button>良名證</button>
                    <button>良名證</button>
                </tr>
            </table>
        </div>
    </div>

</template>

<script>
    import searchbar from '../../components/BackecdSearch.vue'
    export default {
        data(){ 
            return {
                items: [
                { name: '舞動小敏', c_nickname: '敏敏',c_email: 'h0989541162@gmail.com', c_id: 'H124803065',
                c_gender: '女',c_phone: '0989541162',c_birth: '1993/03/19',c_area: '冰島',c_personality: '怪人',url:require('../../assets/image/consultant_card.png') },
                { name: '舞動小敏', c_nickname: '敏敏',c_email: 'h0989541162@gmail.com', c_id: 'H124803065',
                c_gender: '女',c_phone: '0989541162',c_birth: '1993/03/19',c_area: '冰島',c_personality: '怪人',url:require('../../assets/image/consultant_card.png') },
                { name: '舞動小敏', c_nickname: '敏敏',c_email: 'h0989541162@gmail.com', c_id: 'H124803065',
                c_gender: '女',c_phone: '0989541162',c_birth: '1993/03/19',c_area: '冰島',c_personality: '怪人',url:require('../../assets/image/consultant_card.png') },
                

                // { name: '舞動小敏', c_nickname: '敏敏',c_email: 'h0989541162@gmail.com', c_id: 'H124803065',c_gender: '女'},
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
            imagePath() {
                return `${this.items[1].url}`;
                }
        },

        name: 'MemberManagement',
        components: {
            searchbar,
        }
    }
</script>

<style lang="scss">
    // @import '../../../../tgd104-sass/new_style.scss';
    

    .ConsultantReview{
        display: flex;
        flex-direction: column;
        margin: 0 auto;
        width: 100%;
        
        .ConsultantReview_table {
        display: flex;
        width: 100%;
        flex-direction: column;
        align-items: flex-end;


            table{
                margin: 20px auto 20px auto;
                border-collapse: collapse;
                width: 90%;
                table-layout: auto;
                font-size: 20px;
                font-weight: bold;
                box-shadow: 1px 2px 10px  #adadad;
                background-color: #fff;

                
                tr{
                    &:nth-child(2n+1){
                        background-color: #FF7426;
                        color: #fff;
                    }
                    &:nth-child(5){
                        background-color: #FFB992;
                        color: #fff;
                    }
                    &:nth-child(7){
                        background-color: #FFB992;
                        color: #fff;
                    }

                    th {
                        border-bottom: 2px solid #ddd;
                        text-align: left;
                        padding: 10px 0px 5px 30px;
                        
                        // &:nth-child(3){
                        //     width: 300px;
                        // }
                        // &:nth-child(4n+1){
                        //     width: 200px;
                        // }
                        &:last-child{
                            // width: 80px;
                        }
                    }
                
                    td{
                        padding: 15px 0px 5px 30px;
                        text-align: left;
                        &:nth-child(3){
                            width: 300px;
                        }
                        // &:nth-child(4n+1){
                        //     width: 200px;
                        // }
                        &:last-child{
                            // width: 80px;
                        }
                    }
                }    
            }
        }
    
    .ConsultantReview_btn{
        margin: 30px auto 0px auto;
        display: flex;

        .outline_btn_orange{
            margin-right: 10px;
            margin-left: 10px;
        }
    }
}
    

</style>