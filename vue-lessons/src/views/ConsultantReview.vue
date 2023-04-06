
<template>
    <div class="ConsultantReview">

        <div class="ConsultantReview_category_btn">
        <button class="outline_btn_orange">陪你旅行</button>
        <button class="outline_btn_orange">陪你學習</button>
        </div>

        <div class="ConsultantReview_select_form">
            <div class="ConsultantReview_form_state">
                <select name="state" id="state" class="ConsultantReview_select">
                    <option value="">請選擇</option>
                    <option value="Finish">完成</option>
                    <option value="undone">未完成</option>
                </select>
            </div>
            <button class="ConsultantReview_btn">最新</button>
            <button class="ConsultantReview_btn">最舊</button>
            <searchbar></searchbar>
        </div>

        <div class="ConsultantReview_table">
            <div class="ConsultantReview_table_bg">
                <table>
                    <tr class="ConsultantReview_tr_bg">
                        <th>姓名</th>
                        <th>電話號碼</th>
                        <th>申請日期</th>
                        <th>證件審核</th>
                        <th>預覽審核</th>
                        <th>審核結果</th>
                    </tr>
                   
                    <tr v-for="(item, index) in items" :key="index">
                        <td>{{item.id}}</td>
                        <td>{{item.tr_category}}</td>
                        <td>{{item.name}}</td>
                        <td>
                            <a href="">查看
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a> 
                        </td>
                        <td>
                            <a href="">查看
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                        </td>
                        <td>
                            <i class="fa-solid fa-check"></i>
                            <i class="fa-solid fa-xmark"></i>
                        </td>
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
                        { id: '宏宏', tr_category: '0989541162',name: '2023/03/01',  },
                        { id: '敏敏', tr_category: '0989541162',name: '2023/03/01',  },
                        { id: '霈霈', tr_category: '0989541162',name: '2023/03/01', },
                        { id: '諭諭', tr_category: '0989541162',name: '2023/03/01',  },
                        { id: '宏宏', tr_category: '0989541162',name: '2023/03/01',  },
                        { id: '敏敏', tr_category: '0989541162',name: '2023/03/01',  },
                        { id: '霈霈', tr_category: '0989541162',name: '2023/03/01', },
                        { id: '諭諭', tr_category: '0989541162',name: '2023/03/01',  },
                        { id: '宏宏', tr_category: '0989541162',name: '2023/03/01',  },
                        { id: '敏敏', tr_category: '0989541162',name: '2023/03/01',  },
                        { id: '霈霈', tr_category: '0989541162',name: '2023/03/01', },
                        { id: '諭諭', tr_category: '0989541162',name: '2023/03/01',  },
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

            .ConsultantReview_table_bg{
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
            }
        .ConsultantReview_form_state{

            .ConsultantReview_select{
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
    
    .ConsultantReview_category_btn{
        margin: 30px auto 0px auto;
        display: flex;

        .outline_btn_orange{
            margin-right: 10px;
            margin-left: 10px;
        }
    }
}
    

</style>