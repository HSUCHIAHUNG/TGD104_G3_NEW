
<template>
    <div class="ordercontainer">

        <div class="orderbtn">
        <button class="outline_btn_orange">陪你旅行</button>
        <button class="outline_btn_orange">陪你學習</button>
        </div>

        <div class="select_form_container">
            <div class="form_state">
                <select name="state" id="state" class="input_select">
                <option value="">請選擇</option>
                <option value="Finish">完成</option>
                <option value="undone">未完成</option>
                </select>
            </div>
            <searchbar></searchbar>
        </div>

        <div class="MemberWrapper">
            <table>
                <tr>
                    <th>會員ID</th>
                    <th>旅行類別</th>
                    <th>顧問姓名</th>
                    <th>費用</th>
                    <th>訂購日期</th>
                    <th>旅行日期</th>
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
        </div>
    </div>

</template>

<script>
    import searchbar from '../../components/BackecdSearch.vue'
    

    export default {
        data(){ 
            return {
                items: [
                { id: 'H124803062', tr_category: '登山',name: '舞動小敏之腳踝90分', tr_cost: '1500元',tro_booking_data: '1995/01/24',tro_order_data: '1993/03/19', },
                { id: 'H124803062', tr_category: '登山',name: '口頭禪蝦怎麼辦的品諭', tr_cost: '1500元',tro_booking_data: '1995/01/24',tro_order_data: '1993/03/19', },
                { id: 'H124803062', tr_category: '登山',name: '怕被看腳踝的霈霈', tr_cost: '1500元',tro_booking_data: '1995/01/24',tro_order_data: '1993/03/19', },
                { id: 'H124803062', tr_category: '登山',name: '炫炫', tr_cost: '1500元',tro_booking_data: '1995/01/24',tro_order_data: '1993/03/19', },
                { id: 'H124803062', tr_category: '登山',name: '立偉', tr_cost: '1500元',tro_booking_data: '1995/01/24',tro_order_data: '1993/03/19', },
                { id: 'H124803062', tr_category: '登山',name: '嘉宏', tr_cost: '1500元',tro_booking_data: '1995/01/24',tro_order_data: '1993/03/19', },
                { id: 'H124803062', tr_category: '登山',name: '小敏', tr_cost: '1500元',tro_booking_data: '1995/01/24',tro_order_data: '1993/03/19', },
                { id: 'H124803062', tr_category: '登山',name: '品諭', tr_cost: '1500元',tro_booking_data: '1995/01/24',tro_order_data: '1993/03/19', },
                { id: 'H124803062', tr_category: '登山',name: '娟霈', tr_cost: '1500元',tro_booking_data: '1995/01/24',tro_order_data: '1993/03/19', },
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
    

    .ordercontainer{
        display: flex;
        flex-direction: column;
        margin: 0 auto;
        width: 100%;
        
        .MemberWrapper {
        display: flex;
        width: 100%;
        flex-direction: column;
        align-items: flex-end;


            table{
                margin: 20px auto 20px auto;
                border-collapse: collapse;
                width: 90%;
                table-layout:auto;
                font-size: 20px;
                font-weight: bold;
                color: #585858;
                box-shadow: 1px 2px 10px  #adadad;
                
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


    .select_form_container{
    width: 90%;
    display: flex;
    margin: 0 auto;
        .form_state{

            .input_select{
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