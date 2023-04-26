<template>
  <div  v-if="consultantInfoL">
    <!-- main_content -->
    <div class="consultant_content">
      <form action="">
        <div class="input_row">
          <div class="form_group">
            <label class="input_label" for="highest_education">最高學歷</label>
            <select
              name="highest_education"
              id="highest_education"
              class="input_select"
              v-model="consultantInfoL[0].s_grad"
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
            <input v-model="consultantInfoL[0].s_school" type="text" class="input_text" placeholder="畢業於" />
          </div>
        </div>
        <div class="input_row">
          <!-- <div class="form_group">
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
          </div> -->
          <!-- <div class="form_group">
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
              <option value="數學">數學</option>
              <option value="國文">國文</option>
              <option value="歷史">歷史</option>
              <option value="物理">物理</option>
              <option value="化學">化學</option>
              <option value="生物">生物</option>
              <option value="微積分">微積分</option>
              <option value="素描">素描</option>
              <option value="油畫">油畫</option>
              <option value="水彩">水彩</option>
              <option value="電腦繪圖">電腦繪圖</option>
              <option value="水彩畫">水彩畫</option>
              <option value="蠟筆繪畫">蠟筆繪畫</option>
              <option value="Java">Java</option>
              <option value="C++">C++</option>
              <option value="JavaScript">JavaScript</option>
              <option value="Python">Python</option>
              <option value="MySQL">MySQL</option>
              <option value="街舞">街舞</option>
              <option value="芭蕾舞">芭蕾舞</option>
              <option value="兒童舞蹈">兒童舞蹈</option>
              <option value="爵士鼓">爵士鼓</option>
            </select>
          </div> -->

          <div class="form_group">
              <label class="input_label" for="category">選擇您可提供的教學類別：</label>
              <select v-model="consultantInfoL[0].s_category" name="category" id="category" class="input_select" @change="updateSecondSelection">
                  <option value="" disabled selected>--請選擇--</option>
                  <option value="音樂">音樂</option>
                  <option value="伴讀">伴讀</option>
                  <option value="科目">科目</option>
                  <option value="繪畫">繪畫</option>
                  <option value="程式">程式</option>
                  <option value="舞蹈">舞蹈</option>
              </select>
          </div>

          <div class="form_group">
              <label class="input_label" for="class">選擇您可提供的服務課程：</label>
              <select name="class" id="class" class="input_select" v-model="consultantInfoL[0].about_class">
                  <option value="" disabled selected>--請選擇--</option>
                  <option v-for="option in About_classOptions" :value="option.value">{{ option.label }}</option>
              </select>
          </div>





        </div>
        <div class="input_row">
          <div class="form_group">
            <label for="" class="input_label">教學地址</label>
            <input v-model="consultantInfoL[0].s_address" type="text" class="input_text" placeholder="教學地址" />
          </div>
          <div class="form_group">
            <label for="" class="input_label">課程費用</label>
            <input v-model="consultantInfoL[0].about_cost" type="text" class="input_text" placeholder="課程費用" />
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
              v-model="consultantInfoL[0].about_title"
            />
          </div>
        </div>
        <h1 class="self_intro">
          簡短的介紹一下自己吧(例如：服務課程相關經歷簡述)(100字以內)
        </h1>
        <!-- <ckeditor
          :editor="editor"
          v-model="editorData"
          :config="editorConfig"
          class="ckeditor"
        ></ckeditor> -->
        <textarea
        name=""
        id=""
        cols="30"
        rows="10"
        placeholder="最高字數200字"
        v-model="consultantInfoL[0].about_introduction"
        ></textarea>
      </form>
      <div class="btns">
        <button type="button" class="outline_btn_blue">取消</button>
        <button type="button" class="btn_blue" @click="save">確定儲存</button>
      </div>
    </div>
    <!-- main_content end-->
  </div>
</template>

<script>
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";
import $ from "jquery";
export default {
  name: "ConsultantInfoL",
  components: {
    $,
  },
  data() {
    return {
      editor: ClassicEditor,
      editorData:'',
      s_category:'',
      about_class:'',
      editorConfig: {
        placeholder: "請輸入內容...",
        removePlugins: ["Bold", "Italic", "Link", "CKFinder", "Image", "Media"],
      },
      consultantInfoL:[
        {
          about_cost: "",
          about_introduction: "",
          s_grad: "",
          s_address: "",
          s_school: "",
          about_title: "",
          about_class: "",
          about_cid: "",
          s_category: "",
        }
        ],
        
      
    };
  },
  computed: {
      About_classOptions() {
        // 根據第一層選擇，返回對應的第二層選項
        if (this.s_category === '音樂') {
            return [
            { value: '鋼琴', label: '鋼琴' },
            { value: '吉他', label: '吉他' },
            { value: '烏克麗麗', label: '烏克麗麗' },
            { value: '爵士鼓', label: '爵士鼓' },
            ];
        } else if (this.s_category === '伴讀') {
            return [
            { value: '國小', label: '國小' },
            { value: '國中', label: '國中' },
            { value: '高中', label: '高中' },
            ];
        } else if (this.s_category === '科目') {
            return [
            { value: '英文', label: '英文' },
            { value: '國文', label: '國文' },
            { value: '化學', label: '化學' },
            { value: '生物', label: '生物' },
            { value: '微積分', label: '微積分' },
            ];
        } else if (this.s_category === '繪畫') {
            return [
            { value: '素描', label: '素描' },
            { value: '油畫', label: '油畫' },
            { value: '水彩', label: '水彩' },
            { value: '電腦繪圖', label: '電腦繪圖' },
            { value: '蠟筆繪畫', label: '蠟筆繪畫' },
            ];
        } else if (this.s_category === '程式') {
            return [
            { value: 'Java', label: 'Java' },
            { value: 'C++', label: 'C++' },
            { value: 'JavaScript', label: 'JavaScript' },
            { value: 'Python', label: 'Python' },
            { value: 'MySQL', label: 'MySQL' },
            ];
        } else if (this.s_category === '舞蹈') {
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
  methods: {
    save() {
      if(this.consultantInfoL && this.consultantInfoL[0]){
        $.ajax({
        url: `${process.env.VUE_APP_AJAX_URL}ConsultantinfoL_update.php`,
        dataType: "text",
        type: "POST",
        data: {
          about_cost: this.consultantInfoL[0].about_cost,
          about_introduction: this.consultantInfoL[0].about_introduction,
          s_grad: this.consultantInfoL[0].s_grad,
          s_address: this.consultantInfoL[0].s_address,
          s_school: this.consultantInfoL[0].s_school,
          about_title: this.consultantInfoL[0].about_title,
          about_class: this.consultantInfoL[0].about_class,
          about_cid: this.consultantInfoL[0].about_cid,
          s_category: this.consultantInfoL[0].s_category,
        },
        success: (response) => {
          alert(response);
          console.log(response)
          // this.editorData = <p>'123'</p>
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
        },
      });
      }
 
    },
  },




  mounted() {
    // let Member_id = $cookies.get("Member_id");
    let Consultant_id = $cookies.get("Consultant_id");
    console.log(Consultant_id);
    if (!Consultant_id) {
      this.$router.back();
      alert("請登入顧問");
    } else {
      $.ajax({
        url: `${process.env.VUE_APP_AJAX_URL}ConsultantinfoL_select.php`,
        dataType: "json",
        type: "POST",
        data: {
          about_cid: Consultant_id,
        },
        success: (response) => {
          // this.editorData = 'this.ConsultantInfoL[0].about_introduction'
          // this.editorData = about_introduction;
          this.consultantInfoL = response;
          // console.log(this.memberInfo);
          // console.log(this.memberInfo[0].id);
          // console.log(this.memberInfo[0].m_id);
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
        },
      });
    }
  },
  

  

};
</script>

<style lang="scss">
// consultant_account
@import "../assets/tgd104-sass/new_style.scss";
.self_intro {
  width: 90%;
  margin: 0 auto;
  margin-bottom: 10px;
}
.ck .ck-sticky-panel {
  width: 90%;
  margin: 0 auto;
}
.ck .ck-editor__main {
  width: 90%;
  margin: 0 auto;
}
.ck .ck-content {
  height: 200px;
}


.consultant_content textarea{
  width: 90%;
  border: 1px solid $dark_blue;
  margin: 0 auto;
  border-radius: 5px;
  padding: 20px;
  font-size: 16px;
  display: block;
}

</style>