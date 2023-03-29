<template>
  <div>
    <!-- main_content -->
    <div class="main_content">
      <form action="">
        <div class="input_row">
          <div class="form_group">
            <label for="" class="input_label">姓</label>
            <input type="text" class="input_text" placeholder="姓" />
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
            <label for="" class="input_label">電話號碼</label>
            <input type="text" class="input_text" placeholder="電話號碼" />
          </div>
        </div>
        <div class="input_row">
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
          <div class="form_group">
            <label class="input_label" for="gender">性別</label>
            <select name="gender" id="gender" class="input_select">
              <option value="">--請選擇--</option>
              <option value="male">男性</option>
              <option value="female">女性</option>
            </select>
          </div>
        </div>
        <div class="input_row">
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
      </form>
      <div class="btns">
        <button type="button" class="outline_btn_blue">取消</button>
        <button type="button" class="btn_blue">確定儲存</button>
      </div>
    </div>
    <!-- main_content end-->
  </div>
</template>

<script>
export default {
  name: "ConsultantSetting",
  data() {
    return {};
  },
};
</script>

<style lang="scss">
@import "../../../tgd104-sass/new_style.scss";
</style>
