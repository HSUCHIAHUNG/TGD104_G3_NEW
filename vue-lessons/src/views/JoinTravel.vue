<template>
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
                <form action="">
                <div class="input_row">
                    <div class="form_group">
                    <label for="" class="input_label">興趣</label>
                    <input type="text" class="input_text" placeholder="興趣" />
                    </div>
                    <div class="form_group">
                    <label for="" class="input_label">經歷</label>
                    <input type="text" class="input_text" placeholder="經歷" />
                    </div>
                </div>

                <div class="input_row">
                    <div class="form_group">
                    <label for="" class="input_label">職業</label>
                    <input type="text" class="input_text" placeholder="職業" />
                    </div>
                    <div class="form_group">
                    <label for="" class="input_label">證照</label>
                    <input type="text" class="input_text" placeholder="證照" />
                    </div>
                </div>

                <div class="input_row">
                    <div class="form_group">
                    <label class="input_label" for="travelCategory"
                        >選擇您可提供的旅行類別：</label
                    >
                    <select name="category" id="travelCategory" class="input_select">
                        <option value="">--請選擇--</option>
                        <option value="登山">登山</option>
                        <option value="單車">單車</option>
                        <option value="潛水">潛水</option>

                    </select>
                    </div>
                    <div class="form_group">
                    <label for="" class="input_label">費用</label>
                    <input type="text" class="input_text" placeholder="費用" />
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

                <h1>簡短的介紹一下自己吧(例如：旅行相關經歷簡述)(100字以內)</h1>
                
                <ckeditor :editor="editor" v-model="editorData" :config="editorConfig"></ckeditor>

                </form>
            </div>

        </div>

        <div class="join_travel_btn">
            <a href="/JoinApply"><button class="outline_btn_blue">回上一步</button></a>
            <a href="/JoinOk"><button class="btn_blue">送出</button></a>
        </div>

    </div>
<!-- join_travel end -->
</template>

<script>
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

export default {
  name: "JoinTravel",
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
    component: {
        ClassicEditor,
    },

 
};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>
