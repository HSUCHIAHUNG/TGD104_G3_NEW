
<template>
    <div class="ConsultantManagement">

        <div class="ConsultantManagement_select_form">
            <div class="ConsultantManagement_form_state">
                <select name="state" id="state" class="ConsultantManagement_input_select">
                    <option value="">請選擇</option>
                    <option value="Finish">完成</option>
                    <option value="undone">未完成</option>
                </select>
            </div>
            <button class="ConsultantManagement_btn">最新</button>
            <button class="ConsultantManagement_btn">最舊</button>
            <searchbar></searchbar>
        </div>

        <div class="ConsultantManagement_table">
            <div class="ConsultantManagement_table_bg">
                <table>
                    <tr class="ConsultantManagement_tr_bg">
                        <th>身份證字號</th>
                        <th>姓名</th>
                        <th>手機</th>
                        <th>信箱</th>
                        <th>註冊日期</th>
                        <th>狀態</th>
                    </tr>
                    <tr v-for="(item, index) in items" :key="index">
                        <td>{{item.id}}</td>
                        <td>{{item.tr_category}}</td>
                        <td>{{item.name}}</td>
                        <td>{{item.tr_cost}}</td>
                        <td>{{item.tro_booking_data}}</td>
                        <td>
                            {{item.tro_order_data}}
                            <i class="fa-solid fa-ban"></i>
                        </td>

                    </tr>
                </table>
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
                { id: 'H124803065', tr_category: '桃園阿宏',name: '0989541162', tr_cost: 'h0989541162@gmail.com',tro_booking_data: '1995/01/24',tro_order_data: '正常', },
                { id: 'H124803065', tr_category: '桃園阿宏',name: '0989541162', tr_cost: 'h0989541162@gmail.com',tro_booking_data: '1995/01/24',tro_order_data: '凍結中', },
                { id: 'H124803065', tr_category: '桃園阿宏',name: '0989541162', tr_cost: 'h0989541162@gmail.com',tro_booking_data: '1995/01/24',tro_order_data: '正常', },
                { id: 'H124803065', tr_category: '桃園阿宏',name: '0989541162', tr_cost: 'h0989541162@gmail.com',tro_booking_data: '1995/01/24',tro_order_data: '凍結中', },
                { id: 'H124803065', tr_category: '桃園阿宏',name: '0989541162', tr_cost: 'h0989541162@gmail.com',tro_booking_data: '1995/01/24',tro_order_data: '凍結中', },
                { id: 'H124803065', tr_category: '桃園阿宏',name: '0989541162', tr_cost: 'h0989541162@gmail.com',tro_booking_data: '1995/01/24',tro_order_data: '正常', },
                { id: 'H124803065', tr_category: '桃園阿宏',name: '0989541162', tr_cost: 'h0989541162@gmail.com',tro_booking_data: '1995/01/24',tro_order_data: '正常', },
                { id: 'H124803065', tr_category: '桃園阿宏',name: '0989541162', tr_cost: 'h0989541162@gmail.com',tro_booking_data: '1995/01/24',tro_order_data: '凍結中', },
                { id: 'H124803065', tr_category: '桃園阿宏',name: '0989541162', tr_cost: 'h0989541162@gmail.com',tro_booking_data: '1995/01/24',tro_order_data: '正常', },
                { id: 'H124803065', tr_category: '桃園阿宏',name: '0989541162', tr_cost: 'h0989541162@gmail.com',tro_booking_data: '1995/01/24',tro_order_data: '凍結中', },
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
    
    .ConsultantManagement{
        display: flex;
        flex-direction: column;
        margin: 0 auto;
        width: 100%;
        margin-top: 50px;
        
        .ConsultantManagement_table {
            display: flex;
            width: 100%;
            flex-direction: column;
            align-items: flex-end;

            .ConsultantManagement_table_bg{
                margin: 0 auto 20px auto;
                width: 100%;
                overflow-y: auto;
                height: 790px;

                &::-webkit-scrollbar {
                    display: none;
                }
                
                table{
                    margin: 20px auto 20px auto;
                    border-collapse: collapse;
                    width: 90%;
                    table-layout:auto;
                    font-size: 20px;
                    font-weight: bold;
                    color: #585858;
                    box-shadow: 1px 2px 10px  #adadad;
                    
                
                .ConsultantManagement_tr_bg{
                    position: sticky;
                    top: 0;
                }

                tr{

                    &:first-child{
                        background-color: #FF7426;
                        color: #fff;
                        
                    }

                    th {
                        width: 10%;
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
                        background-color: #fff;
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


    .ConsultantManagement_select_form{
        width: 90%;
        display: flex;
        margin: 0 auto;

        .ConsultantManagement_btn{
            background-color: #FAEECD;
            border: none;
            font-weight: bold;
            margin-left: 20px;
            box-sizing: border-box;
            width: 13%;
            font-size: 15px;
            border-radius: 5px;
        }

        .ConsultantManagement_form_state{

            .ConsultantManagement_input_select{
                background-color: #FAEECD;
                border: none;
                font-weight: bold;
                padding: 10px 35px 10px 20px;
                box-sizing: border-box;
                border-radius: 5px;
            }
        }
        .SearchBar{
            margin: 0;
        }

    }
    
    .orderbtn{
        margin: 30px auto 0px auto;
        display: flex;

        .outline_btn_orange{
            margin-right: 10px;
            margin-left: 10px;
        }
    }
}
    

</style>