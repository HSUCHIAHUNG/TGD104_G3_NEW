<template>

    <VHeader/>
    <!-- join_learn -->
    <div class="join_learn">
        <div class="container">
            <h1>表格申請</h1>
            <img src="../assets/image/join/step2.png" alt="" />

            <div class="labels">
                <div class="learn_label"><p>學習</p></div>
                <div class="travel_label"><p>旅行</p></div>
            </div>
        <form @submit.prevent="submitForm">
            <div class="learn_apply">
                
                    <div class="input_row">
                        <div class="form_group">
                            <label class="input_label" for="highest_education">最高學歷</label>
                            <select name="highest_education" id="highest_education" class="input_select" v-model="S_grad" required>
                                <option value="" disabled selected>--請選擇--</option>
                                <option value="高中">高中</option>
                                <option value="大學">大學</option>
                                <option value="碩士">碩士</option>
                                <option value="博士">博士</option>
                            </select>
                        </div>
                        <div class="form_group">
                            <label for="" class="input_label">畢業於</label>
                            <input type="text" class="input_text" placeholder="畢業於" v-model="S_school" required/>
                        </div>
                    </div>

                    <div class="input_row">
                        <!-- <div class="form_group">
                            <label class="input_label" for="category">選擇您可提供的教學類別：</label>
                            <select name="category" id="category" class="input_select" v-model="S_category">
                                <option value="" disabled selected>--請選擇--</option>
                                <option value="音樂">音樂</option>
                                <option value="伴讀">伴讀</option>
                                <option value="科目">科目</option>
                                <option value="繪畫">繪畫</option>
                                <option value="程式">程式</option>
                                <option value="舞蹈">舞蹈</option>
                            </select>
                        </div> -->

                        <div class="form_group">
                            <label class="input_label" for="category">選擇您可提供的教學類別：</label>
                            <select name="category" id="category" class="input_select" v-model="S_category" @change="updateSecondSelection" required>
                                <option value="" disabled selected>--請選擇--</option>
                                <option value="音樂">音樂</option>
                                <option value="伴讀">伴讀</option>
                                <option value="科目">科目</option>
                                <option value="繪畫">繪畫</option>
                                <option value="程式">程式</option>
                                <option value="舞蹈">舞蹈</option>
                            </select>
                        </div>

                        <!-- <div class="form_group">
                            <label class="input_label" for="class">選擇您可提供的服務課程：</label>
                            <select name="class" id="class" class="input_select" v-model="About_class">
                                <option value="" disabled selected>--請選擇--</option>
                                <option value="鋼琴">鋼琴</option>
                                <option value="吉他">吉他</option>
                                <option value="烏克麗麗">烏克麗麗</option>
                                <option value="爵士鼓">爵士鼓</option>
                                <option value="國小">國小</option>
                                <option value="國中">國中</option>
                                <option value="高中">高中</option>
                                <option value="英文">英文</option>
                                <option value="國文">國文</option>
                                <option value="化學">化學</option>
                                <option value="生物">生物</option>
                                <option value="微積分">微積分</option>
                                <option value="素描">素描</option>
                                <option value="油畫">油畫</option>
                                <option value="水彩">水彩</option>
                                <option value="電腦繪圖">電腦繪圖</option>
                                <option value="蠟筆繪畫">蠟筆繪畫</option>
                                <option value="Java">Java</option>
                                <option value="C++">C++</option>
                                <option value="JavaScript">JavaScript</option>
                                <option value="Python">Python</option>
                                <option value="MySQL">MySQL</option>
                                <option value="街舞">街舞</option>
                                <option value="芭蕾舞">芭蕾舞</option>
                                <option value="兒童舞蹈">兒童舞蹈</option>
                                <option value="爵士舞">爵士舞</option>
                            </select>
                        </div> -->

                        <div class="form_group">
                            <label class="input_label" for="class">選擇您可提供的服務課程：</label>
                            <select name="class" id="class" class="input_select" v-model="About_class" required>
                                <option value="" disabled selected>--請選擇--</option>
                                <option v-for="option in About_classOptions" :value="option.value">{{ option.label }}</option>
                            </select>
                        </div>
                    </div>

                    <div class="input_row">
                        <div class="form_group">
                            <label for="" class="input_label">教學地址</label>
                            <input type="text" class="input_text" placeholder="教學地址" v-model="S_address" required/>
                        </div>
                        <div class="form_group">
                            <label for="" class="input_label">課程費用</label>
                            <input type="text" class="input_text" placeholder="課程費用" v-model="About_cost" required/>
                        </div>
                    </div>

                    <div class="input_row">
                        <div class="form_group">
                            <label for="" class="input_label">請提供網頁上詳細資料標題(20字以內)</label>
                            <input type="text" class="input_text" placeholder="詳細資料標題" maxlength="20" v-model="About_title" required/>
                        </div>
                    </div>

                    <h1>簡短的介紹一下自己吧(例如：服務課程相關經歷簡述)(100字以內)</h1>
                    <ckeditor :editor="editor" v-model="About_introduction" :config="editorConfig" required></ckeditor>

                    <div class="join_learn_btn">
                        <!-- <a href="/JoinApply"><button class="outline_btn_blue">回上一步</button></a> -->
                        <router-link to="/JoinApply"><button class="outline_btn_blue">回上一步</button></router-link>
                        <!-- <a href="/JoinOk"><button class="btn_blue">送出</button></a> -->
                       <button class="btn_blue" type="submit">送出</button>
                    </div>
            </div>
        </form>

        </div>

        

    </div>
    <!-- join_learn end -->

    <VFooter/>
</template>

<script>
import VHeader from "@/components/VHeader.vue";
import VFooter from "../components/VFooter.vue";
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

import $ from "jquery";

export default {
  name: "JoinLearn",
    data() {
        return {
            S_address:'',
            S_school:'',
            About_cost:'',
            About_title:'',
            About_introduction:'',
            S_grad:'',
            editor: ClassicEditor,
            // S_experience: '',
            S_category:'',
            About_class:'',
            editorConfig: {
                placeholder: '請輸入內容...',
                removePlugins: ['Bold', 'Italic', 'Link', 'CKFinder', 'Image', 'Media' ],
            },
            Member_id:'',
            Consultant_id:'',
        };
    },
    computed: {
        About_classOptions() {
        // 根據第一層選擇，返回對應的第二層選項
        if (this.S_category === '音樂') {
            return [
            { value: '鋼琴', label: '鋼琴' },
            { value: '吉他', label: '吉他' },
            { value: '烏克麗麗', label: '烏克麗麗' },
            { value: '爵士鼓', label: '爵士鼓' },
            ];
        } else if (this.S_category === '伴讀') {
            return [
            { value: '國小', label: '國小' },
            { value: '國中', label: '國中' },
            { value: '高中', label: '高中' },
            ];
        } else if (this.S_category === '科目') {
            return [
            { value: '英文', label: '英文' },
            { value: '國文', label: '國文' },
            { value: '化學', label: '化學' },
            { value: '生物', label: '生物' },
            { value: '微積分', label: '微積分' },
            ];
        } else if (this.S_category === '繪畫') {
            return [
            { value: '素描', label: '素描' },
            { value: '油畫', label: '油畫' },
            { value: '水彩', label: '水彩' },
            { value: '電腦繪圖', label: '電腦繪圖' },
            { value: '蠟筆繪畫', label: '蠟筆繪畫' },
            ];
        } else if (this.S_category === '程式') {
            return [
            { value: 'Java', label: 'Java' },
            { value: 'C++', label: 'C++' },
            { value: 'JavaScript', label: 'JavaScript' },
            { value: 'Python', label: 'Python' },
            { value: 'MySQL', label: 'MySQL' },
            ];
        } else if (this.S_category === '舞蹈') {
            return [
            { value: '街舞', label: '街舞' },
            { value: '芭雷舞', label: '芭雷舞' },
            { value: '兒童舞蹈', label: '兒童舞蹈' },
            { value: '爵士舞', label: '爵士舞' },
            ];
        } else {
            return [];
        }
        },
    },
    components:{
        ClassicEditor,
        VHeader,
        VFooter,
        $
    },
    methods: {
        updateSecondSelection() {
            // 重置第二層選擇
            this.About_class = '';
        },
        submitForm(){
            $.ajax({
                // type: 'POST',
                method: "POST",
                url: `${process.env.VUE_APP_AJAX_URL}JoinLearn.php`, 
                // url: 'https://tibamef2e.com/tgd104/g3/JoinLearn.php`, 

                dataType: 'json', 
                data: {
                    S_address: this.S_address,
                    S_school: this.S_school,
                    About_cost: this.About_cost,
                    About_title: this.About_title,
                    About_introduction: this.About_introduction,
                    S_grad: this.S_grad,
                    S_category: this.S_category,
                    About_class: this.About_class,
                    Consultant_id: this.Consultant_id,
                    // Member_id: this.Member_id,
                },
                success: function(response) {
                    //更新html內容
                    
                    $("#result").html(response);
                    
                },
                error: function(exception) {
                    alert("發生錯誤: " + exception.status);
                }
            });
            this.$router.push('/JoinOk');
        }
    }, 
    mounted() {

        // this.$cookies.set("Consultant_id","8")
      
        this.Consultant_id = $cookies.get('Consultant_id');
        // this.$cookies.set("Consultant_id",this.Consultant_id)
        // console.log(this.Consultant_id );
    },
 
};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>
