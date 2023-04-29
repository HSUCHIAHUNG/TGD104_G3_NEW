<template>
    <VHeader></VHeader>

    <!-- join_travel -->
    <div class="join_travel">
        <div class="container">
            <h1>表格申請</h1>
            <img src="../assets/image/join/step2.png" alt="" />

            <div class="labels">
                <div class="learn_label"><p>學習</p></div>
                <div class="travel_label"><p>旅行</p></div>
            </div>

            <div class="travel_apply">
                <form @submit.prevent="submitForm">
                    <div class="input_row">
                        <div class="form_group">
                        <label for="" class="input_label">興趣</label>
                        <input type="text" class="input_text" placeholder="興趣" v-model="Tr_interest" required/>
                        </div>
                        <div class="form_group">
                        <label for="" class="input_label">經歷</label>
                        <input type="text" class="input_text" placeholder="經歷" v-model="Tr_experience" required/>
                        </div>
                    </div>

                    <div class="input_row">
                        <div class="form_group">
                        <label for="" class="input_label">職業</label>
                        <input type="text" class="input_text" placeholder="職業" v-model="Tr_job" required/>
                        </div>
                        <div class="form_group">
                        <label for="" class="input_label">證照</label>
                        <input type="text" class="input_text" placeholder="證照" v-model="Tr_license" required/>
                        </div>
                    </div>

                    <div class="input_row">
                        <div class="form_group">
                        <label class="input_label" for="travelCategory"
                            >選擇您可提供的旅行類別：</label
                        >
                        <select name="category" id="travelCategory" class="input_select" v-model="About_class" required>
                            <option value="">--請選擇--</option>
                            <option value="登山">登山</option>
                            <option value="單車">單車</option>
                            <option value="潛水">潛水</option>

                        </select>
                        </div>
                        <div class="form_group">
                        <label for="" class="input_label" >費用</label>
                        <input type="text" class="input_text" placeholder="費用" v-model="About_cost" required/>
                        </div>
                    </div>


                    <div class="input_row">
                        <div class="form_group">
                        <label for="" class="input_label"
                            >請提供網頁上詳細資料標題(20字以內)</label
                        >
                        <input
                            type="text"
                            class="input_text"
                            placeholder="詳細資料標題"
                            maxlength="20"
                            v-model= "About_title"
                            required
                        />
                        </div>
                    </div>

                    <h1>簡短的介紹一下自己吧(例如：旅行相關經歷簡述)(100字以內)</h1>
                    <textarea type="text" cols="110" rows="10" v-model="About_introduction" required></textarea>
                    <!-- <ckeditor :editor="editor" v-model="About_introduction" :config="editorConfig" ></ckeditor> -->

                    <div class="join_travel_btn">
                        <!-- <a href="/JoinApply"><button class="outline_btn_blue">回上一步</button></a> -->
                        <router-link to="/JoinApply"><button class="outline_btn_blue">回上一步</button></router-link>
                        <!-- <a href="/JoinOk"><button class="btn_blue">送出</button></a> -->
                        <button type="sumbit" class="btn_blue">送出</button>
                    </div>

                </form>
            </div>

        </div>


    </div>
    <!-- join_travel end -->

    <VFooter></VFooter>
</template>

<script>
import VHeader from "@/components/VHeader.vue";
import VFooter from "../components/VFooter.vue";
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
import $ from "jquery";

export default {
  name: "JoinTravel",
    data() {
        return {
            Tr_interest: '',
            Tr_experience: '',
            Tr_license: '',
            Tr_job: '',
            About_cost: '',
            About_title: '',
            About_class: '',
            About_introduction: '',
            Consultant_id:'',
            Member_id:'',
            editor: ClassicEditor,
            editorConfig: {
                placeholder: '請輸入內容...',
                removePlugins: ['Bold', 'Italic', 'Link', 'CKFinder', 'Image', 'Media' ],
            }
        };
    },
    components:{
        ClassicEditor,
        VHeader,
        VFooter,
        $
    },
    mounted() {

     
        this.Consultant_id = $cookies.get('Consultant_id')   
      

    },
    methods: {
        submitForm(){
        // console.log(this.Consultant_id);
            
        
            $.ajax({
              
                method: "POST",
                url: `${process.env.VUE_APP_AJAX_URL}joinTeavel.php`, 
                // url: 'https://tibamef2e.com/tgd104/g3/joinTeavel.php`, 
                data: {
                    Tr_interest: this.Tr_interest,
                    Tr_experience: this.Tr_experience,
                    Tr_license: this.Tr_license,
                    Tr_job: this.Tr_job,
                    About_cost: this.About_cost,
                    About_title: this.About_title,
                    About_class: this.About_class,
                    About_introduction: this.About_introduction,
                    Consultant_id: this.Consultant_id,
                },
                success: function(response) {
                    //更新html內容
                    // console.log(response);
                },
                error: function(exception) {
                    // // alert("發生錯誤: " + exception.status);
                }
            });
            this.$router.push('/JoinOk');
        }
    },   

 
};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>
