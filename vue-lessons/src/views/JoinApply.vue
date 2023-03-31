<template>
<!-- join_apply -->
    <div class="join_apply">
        <div class="container">
            <h1>表格申請</h1>
            <img src="../assets/image/join/step1.png" alt="">
            <h2>基本資料</h2>
            <div class="personal_information" id="app">
                    <form action="">

                    <div class="input_row">
                    <div class="form_group">
                        <label for="" class="input_label">姓</label>
                        <input type="text" class="input_text" placeholder="姓"/>
                    </div>
                    <div class="form_group">
                        <label for="" class="input_label">名</label>
                        <input type="text" class="input_text" placeholder="名" />
                    </div>
                    </div>

                    <div class="input_row">
                    <div class="form_group">
                        <label for="" class="input_label">信箱(帳號)</label>
                        <input type="text" class="input_text" placeholder="信箱(帳號)" />
                    </div>
                    <div class="form_group">
                        <label for="" class="input_label">暱稱</label>
                        <input type="text" class="input_text" placeholder="暱稱" />
                    </div>
                    </div>

                    <div class="input_row">
                    <div class="form_group">
                        <label for="" class="input_label">身分證字號</label>
                        <input type="text" class="input_text" placeholder="身分證字號" />
                    </div>
                    <div class="form_group">
                        <label for="" class="input_label">個性</label>
                        <input type="text" class="input_text" placeholder="個性" />
                    </div>
                    </div>

                    <div class="input_row">
                    <div class="form_group">
                        <label for="" class="input_label">密碼</label>
                        <input type="text" class="input_text" placeholder="密碼" />
                    </div>
                    <div class="form_group">
                        <label for="" class="input_label">再次確認密碼</label>
                        <input type="text" class="input_text" placeholder="再次確認密碼" />
                    </div>
                    </div>
                    
                    <div class="input_row">
                    <div class="form_group">
                        <label for="" class="input_label">電話號碼</label>
                        <input type="text" class="input_text" placeholder="電話號碼" />
                    </div>
                    <div class="form_group">
                        <label class="input_label" for="area">居住地區</label>
                        <select name="area" id="area" class="input_select">
                        <option value="">--請選擇--</option>
                        <option value="北部">北部</option>
                        <option value="中部">中部</option>
                        <option value="南部">南部</option>
                        <option value="東部">東部</option>
                        </select>
                    </div>
                    </div>

                    <div class="input_row">
                    <div class="form_group">
                        <label class="input_label" for="gender">性別</label>
                        <select name="gender" id="gender" class="input_select">
                        <option value="">--請選擇--</option>
                        <option value="male">男性</option>
                        <option value="female">女性</option>
                        </select>
                    </div>       
                    <div class="form_group">
                        <label class="input_label" for="birthday">生日</label>
        
                        <input
                        type="date"
                        id="birthday"
                        name="trip-start"
                        min="1900-01-01"
                        max="2023-12-31"
                        class="input_text"
                        />
                    </div>
                    </div>

                    <div class="input_row">
                        <div class="form_group">
                        <label class="input_label" for="goodPeopleImage">良民證上傳</label>
                        <input type="file" id="goodPeopleImage" name="goodPeopleImage" class="input_file"/>
                        </div>       
                        <div class="form_group">
                        <label class="input_label" for="IdImage">身分證上傳</label>
                        <input type="file" id="IdImage" name="IdImage" class="input_file"/>
                        </div>
                    </div>
                    <div class="input_row" id="app">
                        <div class="form_group">
                        <label class="input_label" for="theFile">生活照上傳(圖片寬&高請設定相同且檔案大小不得超過10mb)</label>
                        <input type="file" ref="fileInput" @change="fileChange" class="input_img"/>
                        <input type="file" ref="fileInput2" @change="fileChange2" class="input_img"/>
                        <input type="file" ref="fileInput3" @change="fileChange3" class="input_img"/>
                        </div>       
                        <div class="form_group" id="image_container">
                        <div class="image">
                            <img ref="image1">
                        </div>
                        <div class="image">
                            <img ref="image2">
                        </div>
                        <div class="image">
                            <img ref="image3">
                        </div>
                        </div>
                    </div>

                    </form>
            </div>
        </div>

        <div class="join_btn">
            <a href="/Join"><button class="outline_btn_blue">回上一頁</button></a>
            <a href="/JoinLearn"><button class="btn_blue">下一步</button></a>
        </div>
    </div>
<!-- join_apply end -->
</template>

<script>
export default {
  name: "JoinApply",
  data() {
    return {};
  },
  methods: {
    fileChange() {
    const file = this.$refs.fileInput.files[0]
    const reader = new FileReader()
    reader.readAsDataURL(file)
    reader.addEventListener('load', () => {
        const image = this.$refs.image1
        image.src = reader.result
        image.style.maxWidth = '130px'
        image.style.maxHeight = '130px'
    })
    },
    fileChange2() {
    const file = this.$refs.fileInput2.files[0]
    const reader = new FileReader()
    reader.readAsDataURL(file)
    reader.addEventListener('load', () => {
        const image = this.$refs.image2
        image.src = reader.result
        image.style.maxWidth = '130px'
        image.style.maxHeight = '130px'
    })
    },
    fileChange3() {
    const file = this.$refs.fileInput3.files[0]
    const reader = new FileReader()
    reader.readAsDataURL(file)
    reader.addEventListener('load', () => {
        const image = this.$refs.image3
        image.src = reader.result
        image.style.maxWidth = '130px'
        image.style.maxHeight = '130px'
    })
    },
  },
};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>
