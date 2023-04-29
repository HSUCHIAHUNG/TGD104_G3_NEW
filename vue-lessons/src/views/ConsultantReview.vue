
<template>
    <div class="ConsultantReview">

        <!-- <div class="ConsultantReview_category_btn">
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
            >陪你learing</button>
        </div> -->

        <div class="ConsultantReview_select_form">
            <div class="ConsultantReview_form_state">
                <select v-model="selectedStatus" name="state" id="state" class="ConsultantReview_select "
                :class="{ option_active: selectedStatus === 'Finish' || selectedStatus === 'undone' }" 
                >
                    <option value="">全部</option>
                    <option value="Finish">通過</option>
                    <option value="undone">未通過</option>
                </select>
            </div>
            <button class="ConsultantReview_btn" @click.prevent="toggleSortDate('desc')"
            :class="{ option_active: SortDate === 'desc' }" 
            >最新</button>
            <button class="ConsultantReview_btn" @click.prevent="toggleSortDate('asc')"
            :class="{ option_active: SortDate === 'asc' }" 
            
            >最舊</button>
            <!-- <button class="ConsultantReview_btn">最新</button>
            <button class="ConsultantReview_btn">最舊</button> -->
            <!-- <searchbar></searchbar> -->
            <div class="MemberContainer">
                <div  class="SearchBar">
                    <input id="search-input" placeholder="請輸入身分證字號" v-model="searchId"
                    :class="{ option_active: searchId }" 
                    >
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
        </div>

        <div class="ConsultantReview_table">
            <div class="ConsultantReview_table_bg">
                <table>
                    <tr class="ConsultantReview_tr_bg">
                        <th>身份證字號</th>
                        <th>姓名</th>
                        <th>申請日期</th>
                        <!-- <th>證件審核</th> -->
                        <th>預覽審核</th>
                        <th>審核結果</th>
                    </tr>
                   
                    <tr v-for="(item, index) in filteredItems.slice(pageStart, pageEnd)" :key="index">
                        <td>{{item.c_id}}</td>
                        <td>{{item.c_nickname}}</td>
                        <td>{{formatDate(item.c_create_date)}}</td>
                        <!-- <td>
                            <button>查看
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button> 
                        </td> -->
                        <td>
                            <button @click="setbacked_cid(item.id)"  >
                                查看
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </td>
                        <td>

                            <i class="fa-solid fa-check"
                            :class="{ review_active: item.c_review_status === '通過' }"
                             @click.prevent="
                                {   
                                    c_review(item.id,'通過'),
                                    ( item.c_review_status = '通過'),
                                    (update_id = item.c_review_status);
                                }
                                "
                            ></i>
                            <i class="fa-solid fa-xmark"
                                :class="{  review_active: item.c_review_status === '未通過' }"
                                @click.prevent="
                                    {
                                        c_review(item.id,'未通過'),
                                        (item.c_review_status = '未通過');
                                    }
                                    "
                            ></i>
                        </td>
                    </tr>
                </table>

               <ul>
                    <li @click.prevent="setPage(currentPage-1)">
                        <i class="fa-solid fa-angle-left"></i>
                    </li>
                    <li :class="{'pag_active': (currentPage === (n))}" 
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
                selectedStatus: '',
                option_active:'',
                searchId: '',
                c_review_status:'',
                update_id:'',
                currentTab: "tab1",
                items: [],
                perpage: 20, //一頁的資料數
                currentPage: 1,
                SortDate: "",
                // items: [
                //         { c_nickname: '宏宏', c_id: 'H124853065',c_create_date: '2023/03/01',c_review_status:'通過' },
                //         { c_nickname: '宏宏', c_id: 'H121403065',c_create_date: '2023/03/02',c_review_status:'未通過' },
                //         { c_nickname: '宏宏', c_id: 'H121432065',c_create_date: '2023/03/03',c_review_status:'通過' },
                //         { c_nickname: '宏宏', c_id: 'H120314065',c_create_date: '2023/03/04',c_review_status:'未通過' },
                //         { c_nickname: '宏宏', c_id: 'H122243065',c_create_date: '2023/03/05',c_review_status:'通過' },
                //         { c_nickname: '宏宏', c_id: 'H122422306',c_create_date: '2023/03/06',c_review_status:'通過' },
                //         { c_nickname: '宏宏', c_id: 'H124645065',c_create_date: '2023/03/07',c_review_status:'未通過' },
                //         { c_nickname: '宏宏', c_id: 'H124803065',c_create_date: '2023/03/08',c_review_status:'通過' },
                //         { c_nickname: '宏宏', c_id: 'H124803065',c_create_date: '2023/03/01',c_review_status:'未通過' },
                //         { c_nickname: '宏宏', c_id: 'H124803065',c_create_date: '2023/03/01',c_review_status:'通過' },
                //         { c_nickname: '宏宏', c_id: 'H124803065',c_create_date: '2023/03/01',c_review_status:'未通過' },
                //         { c_nickname: '宏', c_id: 'H124803065',c_create_date: '2023/03/01',c_review_status:'未通過' },
                //         { c_nickname: '宏宏', c_id: 'H124803065',c_create_date: '2023/03/01',c_review_status:'通過' },
                //         { c_nickname: '宏宏', c_id: 'H124803065',c_create_date: '2023/03/01',c_review_status:'未通過' },
                //         { c_nickname: '宏宏', c_id: 'H124803065',c_create_date: '2023/03/01',c_review_status:'通過' },
                //         { c_nickname: '宏宏', c_id: 'H124803065',c_create_date: '2023/03/01',c_review_status:'未通過' },
                //         { c_nickname: '宏', c_id: 'H124803065',c_create_date: '2023/03/01',c_review_status:'通過' },
                //         { c_nickname: '宏宏', c_id: 'H124803065',c_create_date: '2023/03/01',c_review_status:'未通過' },
                //         { c_nickname: '宏宏', c_id: 'H124803065',c_create_date: '2023/03/01',c_review_status:'未通過' },
                //         { c_nickname: '宏', c_id: 'H124803065',c_create_date: '2023/03/01',c_review_status:'未通過' },
                //         { c_nickname: '宏宏', c_id: 'H124803065',c_create_date: '2023/03/01',c_review_status:'通過' },
                //         { c_nickname: '宏宏', c_id: 'H124803065',c_create_date: '2023/03/01',c_review_status:'未通過' },
                //         { c_nickname: '宏宏', c_id: 'H124803065',c_create_date: '2023/03/01',c_review_status:'通過' },
                //         { c_nickname: '宏宏', c_id: 'H124803065',c_create_date: '2023/03/01',c_review_status:'未通過' },
                //         { c_nickname: '宏', c_id: 'H124803065',c_create_date: '2023/03/01',c_review_status:'通過' },
                //         { c_nickname: '宏宏', c_id: 'H124803065',c_create_date: '2023/03/01',c_review_status:'未通過' },    
                //     ],   
            }
        },   

        mounted() {
            $.getJSON(`${process.env.VUE_APP_AJAX_URL}ConsultantReview.php`).then(response => this.items = response)
            // console.log(this.items);
           
        },
        
        methods: {
            setbacked_cid(cid){
            this.$cookies.set("backed_cid",cid)
            this.$router.push('/backendGallery');
            // window.open('/backendGallery', '_blank');
                
            },
            setPage(page) {
                if(page <= 0 || page > this.totalPage) {
                    return
                }
                this.currentPage = page
            },
            toggleSortDate(date) {
                this.SortDate = date === 'asc' ? 'asc' : 'desc';
                // 使用 Array.sort() 對 items 數組進行排序
                this.items.sort((a, b) => {
                    if (this.SortDate === 'asc') {
                    return new Date(a.c_create_date) - new Date(b.c_create_date);
                    } else {
                    return new Date(b.c_create_date) - new Date(a.c_create_date);
                    }
                });
            },

            formatDate(dateString) {
                const dateObj = new Date(dateString);
                return dateObj.toLocaleDateString();
            },

            c_review(id, status){
                // console.log(id, status);
                    $.ajax({
                
                    method: "POST",
                    url: `${process.env.VUE_APP_AJAX_URL}ConsultantReview_update.php`, 
                    //url: '../api/Join_test.php`, 
                    data: {
                        Id: id,
                        C_review_status: status,
                    },
                    success: function(response) {
                        //更新html內容
                        // console.log(response);
                    },
                    error: function(exception) {
                        // alert("發生錯誤: " + exception.status);
                    }
                });
            }
        },

        
         computed: {
            filteredItems() {
            const searchId = this.searchId.toLowerCase();
            const filteredItems = this.items.filter((item) =>
                item.c_id.toLowerCase().includes(searchId)
            );

            if (this.selectedStatus === "") {
                return filteredItems;
            } else if (this.selectedStatus === "Finish") {
                return filteredItems.filter((item) => item.c_review_status === "通過");
            } else if (this.selectedStatus === "undone") {
                return filteredItems.filter((item) => item.c_review_status === "未通過");
            }
            },

            totalPage() {
                return Math.ceil(this.filteredItems.length / this.perpage)
            },
            pageStart() {
                return (this.currentPage - 1) * this.perpage
            },
            pageEnd() {
                return this.currentPage * this.perpage
            },

        name: 'MemberManagement',
        components: {
            searchbar,
            $
        }
    }
}

</script>

<style lang="scss">
    // @import '../../../../tgd104-sass/new_style.scss';
    

    .ConsultantReview{
        display: flex;
        flex-direction: column;
        margin: 0 auto;
        margin-top: 50px;
        width: 100%;
        height: auto;
        
        .ConsultantReview_table {
            display: flex;
            width: 100%;
            flex-direction: column;
            align-items: flex-end;

            .ConsultantReview_table_bg{
                margin: 0 auto 20px auto;
                width: 90%;
                overflow-y: auto;
                height: auto;
                background-color: #fff;
                box-shadow: 1px 2px 10px  #adadad;
                height: 100vh;

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
                    margin: 0px auto;
                    border-collapse: collapse;
                    width: 100%;
                    table-layout:auto;
                    font-size: 20px;
                    font-weight: bold;
                    color: #585858;
                
                .ConsultantReview_tr_bg{
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
                        
                        .review_active{
                            color: #FF7426;
                        }

                        &:nth-child(3){
                            width: 300px;
                        }
                        // &:nth-child(4n+1){
                        //     width: 200px;
                        // }
                        &:last-child{
                            // width: 80px;
                        }

                        a{
                        color: #585858;
                        }

                        &:last-child i{
                         
                            margin-left: 10px;
                            margin-right: 10px;
                            font-size: 20px;

                        }
                        button{
                            &:hover{
                                color: #FF7426;
                            }
                        }
                    }
                }    
            }
        }
    }


    .ConsultantReview_select_form{
    width: 90%;
    display: flex;
    margin: 25px auto 30px auto;

        .ConsultantReview_btn{
                background-color: #FAEECD;
                border: none;
                font-weight: bold;
                margin-left: 20px;
                box-sizing: border-box;
                width: 13%;
                font-size: 15px;
                border-radius: 5px;
                font-weight: bold;
                color: #0e0e0e;
                
            }

            .option_active{
                background-color: #ffe396;
                border: none;
            }

        .ConsultantReview_form_state{

            .ConsultantReview_select{
                background-color: #FAEECD;
                border: none;
                font-weight: bold;
                padding: 10px 35px 10px 20px;
                box-sizing: border-box;
                outline: none;
                border-radius: 5px;
                columns: #0e0e0e;
                    
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
    
    .ConsultantReview_category_btn{
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