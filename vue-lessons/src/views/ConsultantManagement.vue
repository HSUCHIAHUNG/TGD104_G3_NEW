
<template>
    <div class="ConsultantManagement">

        <div class="ConsultantManagement_select_form">
            <div class="ConsultantManagement_form_state">
                <select name="state" id="state" class="ConsultantManagement_input_select" v-model="selectedStatus"
                :class="{ option_active: selectedStatus === 'Finish' || selectedStatus === 'undone' }"
                >
                    <option value="">全部</option>
                    <option value="Finish">正常</option>
                    <option value="undone">凍結中</option>
                </select>
            </div>
            <button class="ConsultantManagement_btn" @click="toggleSortDate('desc')"
            :class="{ option_active: SortDate === 'desc' }" 
            >最新</button>
            <button class="ConsultantManagement_btn" @click="toggleSortDate('asc')"
            :class="{ option_active: SortDate === 'asc' }" 
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
                        <tr v-for="(item, index) in filteredItems.slice(pageStart, pageEnd)" :key="index">
                        <td>{{item.c_id}}</td>
                        <td>{{item.c_nickname}}</td>
                        <td>{{item.c_phone}}</td>
                        <td>{{item.c_mail}}</td>
                        <!-- <td>{{item.c_create_date}}</td> -->
                         <td>{{ formatDate(item.c_create_date) }}</td>
                        <td>
                            <!-- {{item.c_status}} -->
                            <i class="fa-solid fa-ban"  
                             :class="{ review_active: item.c_status === '凍結中' }"
                             @click.prevent="
                                {   
                                    c_review(item.id, item.c_status),
                                    ( item.c_status = item.c_status),
                                    (update_id = item.c_status);
                                
                                }
                            ">
                            </i>
                        </td>

                    </tr>
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
    import $ from "jquery";
    import {API_URL} from "@/config";

    export default {
        data(){ 
            return {
                perpage: 20, //一頁的資料數
                currentPage: 1,
                SortDate: "asc",
                searchId: '',
                selectedStatus: '',
                c_status: '凍結中',
                items: [],
            }
        },   

        mounted() {
            // $.getJSON('http://localhost/TGD104_G3_NEW/vue-lessons/src/api/ConsultantManagement_Select.php').then(response => this.items = response)
            $.getJSON(`${API_URL}ConsultantManagement_Select.php`).then(response => this.items = response)

            console.log(this.items);
        },
        
        methods: {
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
                status = status === '凍結中' ? '正常' : '凍結中';
                console.log(id);
            // console.log(id, status);
                $.ajax({
            
                method: "POST",
                url: 'http://localhost/TGD104_G3_NEW/vue-lessons/src/api/ConsultantManagement_update.php', 
                //url: '../api/Join_test.php', 
                data: {
                    Id: id,
                    C_status: status,
                },
                success: function(response) {
                    //更新html內容
                    // console.log(response);
                    location.reload()
                },
                error: function(exception) {
                    alert("發生錯誤: " + exception.status);
                }
            });
            },
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
                return filteredItems.filter((item) => item.c_status === "正常");
            } else if (this.selectedStatus === "undone") {
                return filteredItems.filter((item) => item.c_status === "凍結中");
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

        },

        name: 'MemberManagement',
        components: {
            $,
        }
    }

</script>

<style lang="scss">
    // @import '../../../../tgd104-sass/new_style.scss';
     .MemberContainer {
        display: flex;
        width: 100%;
        flex-direction: column;
        align-items: flex-end;

        .SearchBar {
                display: flex;
                justify-content: flex-end;
                position: relative;
                width: fit-content;
                margin: 20px 70px 20px 0px;
                
            input {
                border-radius: 5px;
                border: none;
                background-color: #FAEECD;
                padding: 10px 0px 10px 35px; // 预留图标位置的空间
                box-sizing: border-box;
                &::placeholder{
                    color: #9E9E9E;
                    text-align: center;
                    line-height: 35.33px;
                    font-weight: 500;
                    font-size: 13px;
                    padding-right: 35px;
                }
            }

            i {
                position: absolute;
                top: 50%;
                left: 7px;
                transform: translateY(-50%);
                color: #FF7426;
                font-size: 18px;
                font-weight: bold;
            }
        }
    }

    .ConsultantManagement{
        display: flex;
        flex-direction: column;
        margin: 0 auto;
        width: 100%;
        margin-top: 50px;
        height: auto;
        
        .ConsultantManagement_table {
            display: flex;
            width: 100%;
            flex-direction: column;
            align-items: flex-end;
            
            

            .ConsultantManagement_table_bg{
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
                    margin: 0px auto 20px auto;
                    border-collapse: collapse;
                    width: 100%;
                    table-layout:auto;
                    font-size: 20px;
                    font-weight: bold;
                    color: #585858;
                    
                    
                
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
                        .review_active{
                            color: #ff7426;
                        }
                    }
                }    
            }
        }     
    }


    .ConsultantManagement_select_form{
        width: 90%;
        display: flex;
        margin: 25px auto 30px auto;
        
        


        .ConsultantManagement_btn{
            background-color: #FAEECD;
            border: none;
            font-weight: bold;
            margin-left: 20px;
            box-sizing: border-box;
            width: 13%;
            font-size: 15px;
            border-radius: 5px;
            color: #0e0e0e;
        }

        .option_active{
            background-color: #ffe396;
            border: none;
        }

        .ConsultantManagement_form_state{

            .ConsultantManagement_input_select{
                background-color: #FAEECD;
                border: none;
                font-weight: bold;
                padding: 10px 35px 10px 20px;
                box-sizing: border-box;
                border-radius: 5px;
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

        .pag_active{
            background-color: #ff995e;
            color: #fff;
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