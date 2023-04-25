
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
                        current = [
                        '鋼琴', '吉他', '烏克麗麗','爵士鼓',
                        '國小', '國中', '高中',
                        '英文', '國文', '化學', '生物', '微積分',
                        '素描', '油畫', '水彩', '電腦繪圖', '蠟筆繪畫',
                        'Java', 'C++', 'Javascript', 'Python', 'MySQL',
                        '街舞', '芭蕾舞', '兒童舞蹈','爵士舞'
                        ], 
                        (currentTab = 'tab2');
                    }
                    "
            >陪你鋼琴</button>
        </div>

        

        <div class="OrderManagement_select_form">
            <div class="OrderManagement_form_state">
                <select v-model="selectedState" c_nickname="state" id="state" class="OrderManagement_select"
                :class="{ option_active: selectedState === 'Finish' || selectedState === 'undone' }"
                >
                    <option value="">全部</option>
                    <option value="Finish">完成</option>
                    <option value="undone">未完成</option>
                </select>
            </div>
            <button class="OrderManagement_btn" @click="toggleSortOrder('desc')"
            :class="{ option_active: sortOrder === 'desc' }"
            >最新</button>
            <button class="OrderManagement_btn" @click="toggleSortOrder('asc')"
            :class="{ option_active: sortOrder === 'asc' }"
            >最舊</button>
            <!-- <searchbar></searchbar> -->
            <div class="MemberContainer">
                <div class="SearchBar">
                    <input id="search-input" placeholder="請輸入身分證字號" v-model="searchId"
                    :class="{ option_active: searchId }"
                    >
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
                            <td>{{item.or_number}}</td>
                            <td>{{item.or_class}}</td>
                            <td>{{item.c_nickname}}</td>
                            <td>{{item.or_order_date}}</td>
                            <td>{{item.or_booking_date}}</td>
                            <td>{{item.order_status}}</td>
                        </tr>
                    </template >
                            
                 
                    
                </table>

                    <ul>
                        <li @click.prevent="setPage(currentPage-1)">
                            <i class="fa-solid fa-angle-left"></i>
                        </li>
                        <li 
                        :class="{'pag_active': (currentPage === (n))}"
                        v-for="(n, index) in totalPage" :key="index" @click.prevent="setPage(n)">
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
                sortOrder: "",
                searchId: '',
                perpage: 10, 
                currentPage: 1,
                // items: [],
        
                items: [
                    { or_number: '2023022001', or_class: '登山',c_nickname: '舞動小敏之', or_order_date: '2023/03/01',or_booking_date: '2023/03/19',order_status: '完成', },
                    { or_number: '2023022002', or_class: '單車',c_nickname: '怕被看腳踝的霈霈', or_order_date: '2023/03/02',or_booking_date: '2023/03/19',order_status: '完成', },
                    { or_number: '2023022003', or_class: '潛水',c_nickname: '炫炫', or_order_date: '2023/03/03',or_booking_date: '2023/03/19',order_status: '完成', },
                    { or_number: '2023022004', or_class: '單車',c_nickname: '立偉', or_order_date: '2023/03/04',or_booking_date: '2023/03/19',order_status: '完成', },
                    { or_number: '2023022005', or_class: '單車',c_nickname: '嘉宏', or_order_date: '2023/03/05',or_booking_date: '2023/03/19',order_status: '完成', },
                    { or_number: '2023022006', or_class: '單車',c_nickname: '小敏', or_order_date: '2023/03/06',or_booking_date: '2023/03/19',order_status: '完成', },
                    { or_number: '2023022007', or_class: '鋼琴',c_nickname: '品諭', or_order_date: '2023/03/07',or_booking_date: '2023/03/19',order_status: '完成', },
                    { or_number: '2023022000', or_class: '鋼琴',c_nickname: '娟霈', or_order_date: '2023/03/08',or_booking_date: '2023/03/19',order_status: '未完成', },
                    { or_number: '2023022040', or_class: '鋼琴',c_nickname: '舞動小敏之分', or_order_date: '2023/03/09',or_booking_date: '2023/03/19',order_status: '未完成', },
                    { or_number: '2023022101', or_class: '鋼琴',c_nickname: '口頭禪蝦品諭', or_order_date: '2023/03/10',or_booking_date: '2023/03/19',order_status: '未完成', },
                    { or_number: '2023022008', or_class: '鋼琴',c_nickname: '炫炫', or_order_date: '2023/03/11',or_booking_date: '2023/03/19',order_status: '未完成', },
                    { or_number: '2023022000', or_class: '鋼琴',c_nickname: '立偉', or_order_date: '2023/03/12',or_booking_date: '2023/03/19',order_status: '未完成', },
                    { or_number: '2023022000', or_class: '單車',c_nickname: '小敏', or_order_date: '2023/03/13',or_booking_date: '2023/03/19',order_status: '完成', },
                    { or_number: '2023022000', or_class: '單車',c_nickname: '霈霈', or_order_date: '2023/03/14',or_booking_date: '2023/03/19',order_status: '完成', },
                    { or_number: '2023022000', or_class: '單車',c_nickname: '炫1', or_order_date: '2023/03/15',or_booking_date: '2023/03/19',order_status: '完成', },
                    { or_number: '2023022000', or_class: '單車',c_nickname: '偉1', or_order_date: '2023/03/16',or_booking_date: '2023/03/19',order_status: '完成', },
                    { or_number: '2023022000', or_class: '單車',c_nickname: '宏1', or_order_date: '2023/03/17',or_booking_date: '2023/03/19',order_status: '完成', },
                    { or_number: '2023022000', or_class: '單車',c_nickname: '敏1', or_order_date: '2023/03/18',or_booking_date: '2023/03/19',order_status: '完成', },
                    { or_number: '2023022000', or_class: '鋼琴',c_nickname: '諭1', or_order_date: '2023/03/19',or_booking_date: '2023/03/19',order_status: '完成', },
                    { or_number: '2023022000', or_class: '鋼琴',c_nickname: '霈1', or_order_date: '2023/03/20',or_booking_date: '2023/03/19',order_status: '未完成', },
                    { or_number: '2023022000', or_class: '鋼琴',c_nickname: '動小敏踝90分', or_order_date: '2023/03/21',or_booking_date: '2023/03/19',order_status: '未完成', },
                    { or_number: '2023022000', or_class: '鋼琴',c_nickname: '頭禪蝦怎的品諭', or_order_date: '2023/03/22',or_booking_date: '2023/03/19',order_status: '未完成', },
                    { or_number: '2023022000', or_class: '鋼琴',c_nickname: '炫炫', or_order_date: '2023/03/23',or_booking_date: '2023/03/19',order_status: '未完成', },
                    { or_number: '2023022000', or_class: '鋼琴',c_nickname: '偉', or_order_date: '2023/03/24',or_booking_date: '2023/03/19',order_status: '未完成', },
                    { or_number: '2023022000', or_class: '單車',c_nickname: '小敏之90分', or_order_date: '2023/03/25',or_booking_date: '2023/03/19',order_status: '完成', },
                    { or_number: '2023022000', or_class: '單車',c_nickname: '霈霈2', or_order_date: '2023/03/26',or_booking_date: '2023/03/19',order_status: '完成', },
                    { or_number: '2023022000', or_class: '單車',c_nickname: '炫炫2', or_order_date: '2023/03/27',or_booking_date: '2023/03/19',order_status: '完成', },
                    { or_number: '2023022000', or_class: '單車',c_nickname: '立2', or_order_date: '2023/03/28',or_booking_date: '2023/03/19',order_status: '完成', },
                    { or_number: '2023022000', or_class: '單車',c_nickname: '嘉宏2', or_order_date: '2023/03/29',or_booking_date: '2023/03/19',order_status: '完成', },
                    { or_number: '2023022000', or_class: '單車',c_nickname: '小敏2', or_order_date: '2023/03/30',or_booking_date: '2023/03/19',order_status: '完成', },
                    { or_number: '2023022000', or_class: '鋼琴',c_nickname: '品諭2', or_order_date: '2023/03/31',or_booking_date: '2023/03/19',order_status: '完成', },
                    { or_number: '2023022000', or_class: '吉他',c_nickname: '娟霈2', or_order_date: '2023/04/01',or_booking_date: '2023/03/19',order_status: '未完成', },
                    { or_number: '2023022000', or_class: '鋼琴',c_nickname: '舞動小敏分', or_order_date: '2023/04/02',or_booking_date: '2023/03/19',order_status: '未完成', },
                    { or_number: '2023022000', or_class: '鋼琴',c_nickname: '口怎麼辦的品諭', or_order_date: '2023/04/01',or_booking_date: '2023/03/19',order_status: '未完成', },
                    { or_number: '2023022000', or_class: '鋼琴',c_nickname: '炫炫', or_order_date: '2023/02/01',or_booking_date: '2023/03/19',order_status: '未完成', },
                    { or_number: '2023022000', or_class: '鋼琴',c_nickname: '立偉2', or_order_date: '2023/03/01',or_booking_date: '2023/03/19',order_status: '未完成', },
                    { or_number: '2023022000', or_class: '單車',c_nickname: '舞動小敏之', or_order_date: '2023/04/01',or_booking_date: '2023/03/19',order_status: '完成', },
                    { or_number: '2023022000', or_class: '單車',c_nickname: '怕被看腳踝的霈霈', or_order_date: '2023/05/01',or_booking_date: '2023/03/19',order_status: '完成', },
                    { or_number: '2023022000', or_class: '單車',c_nickname: '炫炫', or_order_date: '2023/06/01',or_booking_date: '2023/03/19',order_status: '完成', },
                    { or_number: '2023022000', or_class: '單車',c_nickname: '立偉', or_order_date: '2023/07/01',or_booking_date: '2023/03/19',order_status: '完成', },
                    { or_number: '2023022000', or_class: '單車',c_nickname: '嘉宏', or_order_date: '2023/08/01',or_booking_date: '2023/03/19',order_status: '完成', },
                ],  

            }
        },   
        
        mounted() {
            this.selectedState = '';

            // $.getJSON(`${process.env.VUE_APP_AJAX_URL}orderManagement.php`).then(response => this.items = response)
            // console.log(this.items);
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

        watch: {
            selectedState: {
                immediate: true, // 頁面載入時也會觸發
                handler() {
                this.currentPage = 1; // 重設頁面為第一頁
                },
            },
        },
        computed: {
            filtered_list() {
                let filteredItems = this.items.filter(
                (item) => this.current.includes(item.or_class)
                );
                if (this.searchId) {
                filteredItems = filteredItems.filter((item) =>
                    item.id.includes(this.searchId)
                );
                }
                let sortedItems = filteredItems
                .map((item) => ({
                    ...item,
                    or_order_date: new Date(item.or_order_date),
                }))
                .filter((item) => {
                    if (this.selectedState === '') {
                    return true;
                    } else if (this.selectedState === 'Finish') {
                    return item.order_status === '完成';
                    } else if (this.selectedState === 'undone') {
                    return item.order_status !== '完成';
                    }
                })
                .sort((a, b) =>
                    this.sortOrder === 'asc' ? a.or_order_date - b.or_order_date : b.or_order_date - a.or_order_date
                )
                .map((item) => ({
                    ...item,
                    or_order_date: item.or_order_date.toLocaleDateString(),
                }));

                const start = (this.currentPage - 1) * this.perpage;
                const end = this.currentPage * this.perpage;
                return sortedItems.slice(start, end);
                },
                totalPage() {
                    let filteredItems = this.items.filter(
                        (item) => this.current.includes(item.or_class)
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
                            return item.order_status === '完成';
                        } else if (this.selectedState === 'undone') {
                            return item.order_status !== '完成';
                        }
                    });

                    const totalItems = filteredItems.length;
                    const totalPages = Math.ceil(totalItems / this.perpage);

                    if (this.currentPage > totalPages) {
                        this.currentPage = totalPages;
                    }

                    return totalPages;
                },
                pageStart() {
                    return (this.currentPage - 1) * this.perpage;
                },
                pageEnd() {
                    return this.currentPage * this.perpage;
                },
            },
        c_nickname: 'MemberManagement',
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

                    .pag_active{
                        background-color: #ff995e;
                        color: #fff;
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

            .option_active{
                background-color: #ffe396;
            }

        .OrderManagement_form_state{

            .OrderManagement_select{
                background-color: #FAEECD;
                border: none;
                font-weight: bold;
                padding: 10px 35px 10px 20px;
                box-sizing: border-box;
                outline: none;
            }

            .option_active{
                background-color: #ffe396;
            }
        }
        .SearchBar{
            margin: 0;

            input{
                outline: none;
            }
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