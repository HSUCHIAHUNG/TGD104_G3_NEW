
<template>
    <div class="OrderManagement">

        <div class="OrderManagement_category_btn">
            <button class="outline_btn_orange"
            :class="{ touchbg: currentTab === 'tab1' }"
                    @click.prevent="
                    {
                        current = ['登山', '單車', '潛水'], 
                        (currentTab = 'tab1');
                    }
                    "
            >陪你旅行</button>
            <button class="outline_btn_orange"
                :class="{ touchbg: currentTab === 'tab2' }"
                    @click.prevent="
                    {
                        (current = 'learing'), (currentTab = 'tab2');
                    }
                    "
            >陪你learing</button>
        </div>

        

        <div class="OrderManagement_select_form">
            <div class="OrderManagement_form_state">
                <select v-model="selectedState" name="state" id="state" class="OrderManagement_select">
                    <option value="">請選擇</option>
                    <option value="Finish">完成</option>
                    <option value="undone">未完成</option>
                </select>
            </div>
            <button class="OrderManagement_btn" @click="toggleSortOrder('desc')">最新</button>
            <button class="OrderManagement_btn" @click="toggleSortOrder('asc')">最舊</button>
            <!-- <searchbar></searchbar> -->
            <div class="MemberContainer">
                <div class="SearchBar">
                    <input id="search-input" placeholder="請輸入身分證字號" v-model="searchId">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
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
                                         
                    <template v-for="(item, index) in filtered_list" :key="index">
                        <tr>
                            <td>{{item.id}}</td>
                            <td>{{item.tr_category}}</td>
                            <td>{{item.name}}</td>
                            <td>{{item.tr_cost}}</td>
                            <td>{{item.tro_booking_data}}</td>
                            <td>{{item.tro_order_data}}</td>
                        </tr>
                    </template >
                            
                 
                    
                </table>

                    <ul>
                        <li @click.prevent="setPage(currentPage-1)">
                            <i class="fa-solid fa-angle-left"></i>
                        </li>
                        <li v-for="(n, index) in totalPage" :key="index" @click.prevent="setPage(n)">
                            {{ n }}
                        </li>
                        <li @click.prevent="setPage(currentPage+1)">
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
    import $ from "jquery";

    export default {

        data(){ 
            
            return {
               
                selectedState: '',
                current: ['登山', '單車', '潛水'],
                currentTab: "tab1",
                sortOrder: "asc",
                searchId: '',
        
                items: [
                    { id: '2023022001', tr_category: '登山',name: '舞動小敏之', tr_cost: '2023/03/01',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                    { id: '2023022002', tr_category: '單車',name: '怕被看腳踝的霈霈', tr_cost: '2023/03/02',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                    { id: '2023022003', tr_category: '潛水',name: '炫炫', tr_cost: '2023/03/03',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                    { id: '2023022004', tr_category: '單車',name: '立偉', tr_cost: '2023/03/04',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                    { id: '2023022005', tr_category: '單車',name: '嘉宏', tr_cost: '2023/03/05',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                    { id: '2023022006', tr_category: '單車',name: '小敏', tr_cost: '2023/03/06',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                    { id: '2023022007', tr_category: 'learing',name: '品諭', tr_cost: '2023/03/07',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                    { id: '2023022000', tr_category: 'learing',name: '娟霈', tr_cost: '2023/03/08',tro_booking_data: '2023/03/19',tro_order_data: '未完成', },
                    { id: '2023022040', tr_category: 'learing',name: '舞動小敏之分', tr_cost: '2023/03/09',tro_booking_data: '2023/03/19',tro_order_data: '未完成', },
                    { id: '2023022101', tr_category: 'learing',name: '口頭禪蝦品諭', tr_cost: '2023/03/10',tro_booking_data: '2023/03/19',tro_order_data: '未完成', },
                    { id: '2023022008', tr_category: 'learing',name: '炫炫', tr_cost: '2023/03/11',tro_booking_data: '2023/03/19',tro_order_data: '未完成', },
                    { id: '2023022000', tr_category: 'learing',name: '立偉', tr_cost: '2023/03/12',tro_booking_data: '2023/03/19',tro_order_data: '未完成', },
                    { id: '2023022000', tr_category: '單車',name: '小敏', tr_cost: '2023/03/13',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                    { id: '2023022000', tr_category: '單車',name: '霈霈', tr_cost: '2023/03/14',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                    { id: '2023022000', tr_category: '單車',name: '炫1', tr_cost: '2023/03/15',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                    { id: '2023022000', tr_category: '單車',name: '偉1', tr_cost: '2023/03/16',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                    { id: '2023022000', tr_category: '單車',name: '宏1', tr_cost: '2023/03/17',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                    { id: '2023022000', tr_category: '單車',name: '敏1', tr_cost: '2023/03/18',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                    { id: '2023022000', tr_category: 'learing',name: '諭1', tr_cost: '2023/03/19',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                    { id: '2023022000', tr_category: 'learing',name: '霈1', tr_cost: '2023/03/20',tro_booking_data: '2023/03/19',tro_order_data: '未完成', },
                    { id: '2023022000', tr_category: 'learing',name: '動小敏踝90分', tr_cost: '2023/03/21',tro_booking_data: '2023/03/19',tro_order_data: '未完成', },
                    { id: '2023022000', tr_category: 'learing',name: '頭禪蝦怎的品諭', tr_cost: '2023/03/22',tro_booking_data: '2023/03/19',tro_order_data: '未完成', },
                    { id: '2023022000', tr_category: 'learing',name: '炫炫', tr_cost: '2023/03/23',tro_booking_data: '2023/03/19',tro_order_data: '未完成', },
                    { id: '2023022000', tr_category: 'learing',name: '偉', tr_cost: '2023/03/24',tro_booking_data: '2023/03/19',tro_order_data: '未完成', },
                    { id: '2023022000', tr_category: '單車',name: '小敏之90分', tr_cost: '2023/03/25',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                    { id: '2023022000', tr_category: '單車',name: '霈霈2', tr_cost: '2023/03/26',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                    { id: '2023022000', tr_category: '單車',name: '炫炫2', tr_cost: '2023/03/27',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                    { id: '2023022000', tr_category: '單車',name: '立2', tr_cost: '2023/03/28',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                    { id: '2023022000', tr_category: '單車',name: '嘉宏2', tr_cost: '2023/03/29',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                    { id: '2023022000', tr_category: '單車',name: '小敏2', tr_cost: '2023/03/30',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                    { id: '2023022000', tr_category: 'learing',name: '品諭2', tr_cost: '2023/03/31',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                    { id: '2023022000', tr_category: 'learing',name: '娟霈2', tr_cost: '2023/04/01',tro_booking_data: '2023/03/19',tro_order_data: '未完成', },
                    { id: '2023022000', tr_category: 'learing',name: '舞動小敏分', tr_cost: '2023/04/02',tro_booking_data: '2023/03/19',tro_order_data: '未完成', },
                    { id: '2023022000', tr_category: 'learing',name: '口怎麼辦的品諭', tr_cost: '2023/04/01',tro_booking_data: '2023/03/19',tro_order_data: '未完成', },
                    { id: '2023022000', tr_category: 'learing',name: '炫炫', tr_cost: '2023/02/01',tro_booking_data: '2023/03/19',tro_order_data: '未完成', },
                    { id: '2023022000', tr_category: 'learing',name: '立偉2', tr_cost: '2023/03/01',tro_booking_data: '2023/03/19',tro_order_data: '未完成', },
                     { id: '2023022000', tr_category: '單車',name: '舞動小敏之', tr_cost: '2023/04/01',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                    { id: '2023022000', tr_category: '單車',name: '怕被看腳踝的霈霈', tr_cost: '2023/05/01',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                    { id: '2023022000', tr_category: '單車',name: '炫炫', tr_cost: '2023/06/01',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                    { id: '2023022000', tr_category: '單車',name: '立偉', tr_cost: '2023/07/01',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                    { id: '2023022000', tr_category: '單車',name: '嘉宏', tr_cost: '2023/08/01',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                   ],
                perpage: 10, //一頁的資料數
                currentPage: 1,
                
            }
        },   
        
        mounted() {
            // $.getJSON('http://localhost/TGD104_G3_NEW/vue-lessons/src/api/Select.php').then(response => this.order_m = response)
         
            this.selectedState = '';
            
        },
        methods: {
            setPage(page) {
                if (page <= 0 || page > this.totalPage) {
                return;
                }
                this.currentPage = page;
            },
            toggleSortOrder(order) {
                this.sortOrder = order === 'asc' ? 'asc' : 'desc';
            },
        },
        computed: {
            filtered_list() {
                let filteredItems = this.items.filter(
                (item) => this.current.includes(item.tr_category)
                );
                if (this.searchId) {
                filteredItems = filteredItems.filter((item) =>
                    item.id.includes(this.searchId)
                );
                }
                let sortedItems = filteredItems
                .map((item) => ({
                    ...item,
                    tr_cost: new Date(item.tr_cost),
                }))
                .filter((item) => {
                    if (this.selectedState === '') {
                    return true;
                    } else if (this.selectedState === 'Finish') {
                    return item.tro_order_data === '完成';
                    } else if (this.selectedState === 'undone') {
                    return item.tro_order_data !== '完成';
                    }
                })
                .sort((a, b) =>
                    this.sortOrder === 'asc' ? a.tr_cost - b.tr_cost : b.tr_cost - a.tr_cost
                )
                .map((item) => ({
                    ...item,
                    tr_cost: item.tr_cost.toLocaleDateString(),
                }));

                const start = (this.currentPage - 1) * this.perpage;
                const end = this.currentPage * this.perpage;
                return sortedItems.slice(start, end);
                },
                totalPage() {
                    let filteredItems = this.items.filter(
                    (item) => this.current.includes(item.tr_category)
                    );
                    if (this.searchId) {
                    filteredItems = filteredItems.filter((item) =>
                        item.id.includes(this.searchId)
                    );
                    }
                    filteredItems = filteredItems.filter((item) => {
                    if (this.selectedState === '') {
                        return true;
                    } else if (this.selectedState === 'Finish') {
                        return item.tro_order_data === '完成';
                    } else if (this.selectedState === 'undone') {
                        return item.tro_order_data !== '完成';
                    }
                    });
                    return Math.ceil(filteredItems.length / this.perpage);
                },
                pageStart() {
                    return (this.currentPage - 1) * this.perpage;
                },
                pageEnd() {
                    return this.currentPage * this.perpage;
                },
            },
        name: 'MemberManagement',
        components: {
            searchbar,
            $
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
        height: 80vh;

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
                            // &:nth-child(1){
                            //     background-color: #ff995e;
                            //     color: #fff;
                            // }
                            // &:nth-child(2){
                            //     background-color: #ff995e;
                            //     color: #fff;
                            // }
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
        .touchbg{
        background-color: #ffcaab;
    }
    }
}
    

</style>