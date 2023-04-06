<template>

    <VHeader></VHeader>
    <!-- join_learn -->
    <div class="join_learn">
        <div class="container">
            <h1>表格申請</h1>
            <img src="../assets/image/join/step2.png" alt="" />

            <div class="labels">
                <div class="learn_label"><p>學習</p></div>
                <div class="travel_label"><p>旅行</p></div>
            </div>

            <div class="learn_apply">
                <form action="">
                <div class="input_row">
                    <div class="form_group">
                    <label class="input_label" for="highest_education"
                        >最高學歷</label
                    >
                    <select
                        name="highest_education"
                        id="highest_education"
                        class="input_select"
                    >
                        <option value="">--請選擇--</option>
                        <option value="高中">高中</option>
                        <option value="大學">大學</option>
                        <option value="碩士">碩士</option>
                        <option value="博士">博士</option>
                    </select>
                    </div>
                    <div class="form_group">
                    <label for="" class="input_label">畢業於</label>
                    <input type="text" class="input_text" placeholder="畢業於" />
                    </div>
                </div>

                <div class="input_row">
                    <div class="form_group">
                    <label class="input_label" for="category"
                        >選擇您可提供的教學類別：</label
                    >
                    <select name="category" id="category" class="input_select">
                        <option value="">--請選擇--</option>
                        <option value="音樂">音樂</option>
                        <option value="伴讀">伴讀</option>
                        <option value="科目">科目</option>
                        <option value="繪畫">繪畫</option>
                        <option value="程式">程式</option>
                        <option value="舞蹈">舞蹈</option>
                    </select>
                    </div>
                    <div class="form_group">
                    <label class="input_label" for="class"
                        >選擇您可提供的服務課程：</label
                    >
                    <select name="class" id="class" class="input_select">
                        <option value="">--請選擇--</option>
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
                    </div>
                </div>

                <div class="input_row">
                    <div class="form_group">
                    <label for="" class="input_label">教學地址</label>
                    <input type="text" class="input_text" placeholder="教學地址" />
                    </div>
                    <div class="form_group">
                    <label for="" class="input_label">課程費用</label>
                    <input type="text" class="input_text" placeholder="課程費用" />
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
                    />
                    </div>
                </div>

                <h1>簡短的介紹一下自己吧(例如：服務課程相關經歷簡述)(100字以內)</h1>
                <ckeditor :editor="editor" v-model="editorData" :config="editorConfig"></ckeditor>

                </form>
            </div>

        </div>

        <div class="join_learn_btn">
            <!-- <a href="/JoinApply"><button class="outline_btn_blue">回上一步</button></a> -->
            <router-link to="/JoinApply"><button class="outline_btn_blue">回上一步</button></router-link>
            <!-- <a href="/JoinOk"><button class="btn_blue">送出</button></a> -->
            <router-link to="/JoinOk"><button class="btn_blue">送出</button></router-link>
        </div>

    </div>
    <!-- join_learn end -->

    <VFooter></VFooter>
</template>

<script>
import VHeader from "@/components/VHeader.vue";
import VFooter from "../components/VFooter.vue";
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';


export default {
  name: "JoinLearn",
    data() {
        return {
            editor: ClassicEditor,
            editorData: '',
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
    },

 
};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>
