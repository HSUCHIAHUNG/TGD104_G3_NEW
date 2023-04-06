
<template>
    <div class="OrderManagement">

        <div class="OrderManagement_category_btn">
        <button class="outline_btn_orange">陪你旅行</button>
        <button class="outline_btn_orange">陪你學習</button>
        </div>

        <div class="OrderManagement_select_form">
            <div class="OrderManagement_form_state">
                <select name="state" id="state" class="OrderManagement_select">
                    <option value="">請選擇</option>
                    <option value="Finish">完成</option>
                    <option value="undone">未完成</option>
                </select>
            </div>
            <button class="OrderManagement_btn">最新</button>
            <button class="OrderManagement_btn">最舊</button>
            <searchbar></searchbar>
        </div>

        <div class="OrderManagement_table">
            <div class="OrderManagement_table_bg">
                <table>
                    <tr class="OrderManagement_tr_bg">
                        <th>訂單編號</th>
                        <th>預約項目</th>
                        <th>顧問姓名</th>
                        <th>訂購日期</th>
                        <th>體驗日期</th>
                        <th>訂單狀態</th>
                    </tr>
                    <tr v-for="(item, index) in items" :key="index">
                        <td>{{item.id}}</td>
                        <td>{{item.tr_category}}</td>
                        <td>{{item.name}}</td>
                        <td>{{item.tr_cost}}</td>
                        <td>{{item.tro_booking_data}}</td>
                        <td>{{item.tro_order_data}}</td>

                    </tr>
                </table>
                <ul>
                    <li>
                        <i class="fa-solid fa-angle-left"></i>
                    </li>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>
                        <i class="fa-solid fa-angle-right"></i>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</template>
<script setup></script>

<script>
    import searchbar from '../components/BackecdSearch.vue'
    

    export default {
        data(){ 
            return {
                items: [
                    { id: '2023022000', tr_category: '登山',name: '舞動小敏之腳踝90分', tr_cost: '2023/03/01',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                    { id: '2023022000', tr_category: '登山',name: '怕被看腳踝的霈霈', tr_cost: '2023/03/01',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                    { id: '2023022000', tr_category: '登山',name: '炫炫', tr_cost: '2023/03/01',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                    { id: '2023022000', tr_category: '登山',name: '立偉', tr_cost: '2023/03/01',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                    { id: '2023022000', tr_category: '登山',name: '嘉宏', tr_cost: '2023/03/01',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                    { id: '2023022000', tr_category: '登山',name: '小敏', tr_cost: '2023/03/01',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                    { id: '2023022000', tr_category: '登山',name: '品諭', tr_cost: '2023/03/01',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                    { id: '2023022000', tr_category: '登山',name: '娟霈', tr_cost: '2023/03/01',tro_booking_data: '2023/03/19',tro_order_data: '未完成', },
                    { id: '2023022000', tr_category: '登山',name: '舞動小敏之腳踝90分', tr_cost: '2023/03/01',tro_booking_data: '2023/03/19',tro_order_data: '未完成', },
                    { id: '2023022000', tr_category: '登山',name: '口頭禪蝦怎麼辦的品諭', tr_cost: '2023/03/01',tro_booking_data: '2023/03/19',tro_order_data: '未完成', },
                    { id: '2023022000', tr_category: '登山',name: '炫炫', tr_cost: '2023/03/01',tro_booking_data: '2023/03/19',tro_order_data: '未完成', },
                    { id: '2023022000', tr_category: '登山',name: '立偉', tr_cost: '2023/03/01',tro_booking_data: '2023/03/19',tro_order_data: '未完成', },
                ],
            }
        },   
        
        methods: {
            
        },

        computed: {
       
        },

        name: 'MemberManagement',
        components: {
            searchbar,
        }
    }

</script>

<style lang="scss">
    // @import '../../../../tgd104-sass/new_style.scss';
    

    .OrderManagement{
        display: flex;
        flex-direction: column;
        margin: 0 auto;
        width: 100%;
        
        .OrderManagement_table {
        display: flex;
        width: 100%;
        flex-direction: column;
        align-items: flex-end;

            .OrderManagement_table_bg{
                margin: 0 auto 20px auto;
                width: 90%;
                overflow-y: auto;
                height: auto;
                background-color: #fff;
                box-shadow: 1px 2px 10px  #adadad;

                &::-webkit-scrollbar {
                    display: none;
                }

                ul{
                    display: flex;
                    justify-content: center;
                    margin-top: 25px;
                    margin-bottom: 25px;

                    li{
                            color: #585858;
                            border: 1px solid #eda77e;
                            font-size: 20px;
                            display: inline-block;
                            width: 30px;
                            line-height: 30px;
                            margin: 0 5px;
                            border-radius: 5px;
                            text-align: center;
                            &:hover{
                                background-color: #ff995e;
                                color: #fff;
                            }
                            &:nth-child(1){
                                background-color: #ff995e;
                                color: #fff;
                            }
                            &:nth-child(2){
                                background-color: #ff995e;
                                color: #fff;
                            }
                    }
                }
                
                table{
                margin: 0 auto ;
                border-collapse: collapse;
                width: 100%;
                table-layout:auto;
                font-size: 20px;
                font-weight: bold;
                color: #585858;
                
                .OrderManagement_tr_bg{
                    position: sticky;
                    top: 0;
                }

                tr{
                    &:first-child{
                        background-color: #FF7426;
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
    }


    .OrderManagement_select_form{
    width: 90%;
    display: flex;
        margin: 25px auto 30px auto;

        .OrderManagement_btn{
                background-color: #FAEECD;
                border: none;
                font-weight: bold;
                margin-left: 20px;
                box-sizing: border-box;
                width: 13%;
                font-size: 15px;
                border-radius: 5px;
            }
        .OrderManagement_form_state{

            .OrderManagement_select{
                background-color: #FAEECD;
                border: none;
                font-weight: bold;
                padding: 10px 35px 10px 20px;
                box-sizing: border-box;
               
            }
        }
        .SearchBar{
            margin: 0;
        }

    }
    
    .OrderManagement_category_btn{
        margin: 30px auto 0px auto;
        display: flex;

        .outline_btn_orange{
            margin-right: 10px;
            margin-left: 10px;
        }
    }
}
    

</style>