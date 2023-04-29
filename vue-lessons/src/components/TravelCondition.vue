<template>
    <!-- <div class="travel_condition_wrapper">
        <h4>申請條件</h4>
        <div class="travel_condition">
            <ul>
                <li><i class="fa-regular fa-hand-point-right"></i> 上傳良民證</li>
                <li><i class="fa-regular fa-hand-point-right"></i> 上傳身分證</li>
                <li><i class="fa-regular fa-hand-point-right"></i> 提供相關證照</li>
                <li><i class="fa-regular fa-hand-point-right"></i> 旅遊經驗豐富</li>
                <li><i class="fa-regular fa-hand-point-right"></i> 20歲以上</li>
                <li><i class="fa-regular fa-hand-point-right"></i> 男女不拘</li>
            </ul>
        </div>
    </div> -->
    <div class="wrapper_travel_condition">
      <h4>申請條件</h4>
      <div class="container-fluid box px-md-3 py-3">
        <div class="row">
          <div class="col-md-3 ">
            <div class="row">
              <div class="col-md-12">
                <div class="an-wrap" id="a1">
                  <div class="title-an">上傳良民證 📃📎</div>
                </div>
              </div>
              <div class="col-md-12 mt-3">
                <div class="memo-wrap" id="m1">
                  <div class="title-em">上傳身分證 💳📎</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 ">
            <div class="row">
              <div class="col-md-12 mb-3">
                <div class="news-wrap" id="n1">
                  <!-- <img src="https://image.flaticon.com/icons/svg/230/230336.svg" class="marker-icon"> -->
                  <div class="news-title">提供相關證照 💷</div>
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <div class="em-wrap" id="e1">
                  <!-- <img src="https://image.flaticon.com/icons/svg/230/230336.svg" class="marker-icon"> -->
                  <div class="title-em">旅遊經驗豐富 🌎</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="row">
              <div class="col-md-12 mb-3">
                <div class="memo-wrap" id="m2">
                  <!-- <img src="https://image.flaticon.com/icons/svg/230/230336.svg" class="marker-icon"> -->
                  <div class="title-em">20歲以上 🈵</div>
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <div class="news-wrap" id="n2">
                  <!-- <img src="https://image.flaticon.com/icons/svg/230/230336.svg" class="marker-icon"> -->
                  <div class="news-title">男女不拘 👩🏻‍🤝‍🧑🏼</div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
</template>

<script>
export default {
  name: "TravelCondition",
  data() {
    return {};
  },
};
</script>

<style lang="scss" scope>
@import "../assets/tgd104-sass/new_style.scss";
.wrapper_travel_condition {
  padding: 30px;
  h4{
    text-align: center;
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 20px;
  }
  .box {
    border: 25px solid #ddd;
    width: 50%;
    margin: 0 auto;
    background: #ddd;
    box-shadow: 10px 10px 5px -4px rgb(176, 176, 176);
    border-radius: 10px;
    .an-wrap {
    background: bisque;
    padding: 18px;
    font-weight: 600;
    -o-transform: rotate(-3deg);
    -webkit-transform: rotate(-3deg);
    -moz-transform: rotate(-3deg);
  }

  .em-wrap {
    padding: 18px;
    background: #79cbd4;
    color: white;
    font-size: 12px;
    font-weight: 600;
    -o-transform: rotate(3deg);
    -webkit-transform: rotate(3deg);
    -moz-transform: rotate(3deg);
  }

  .memo-wrap {
    padding: 18px;
    background: aliceblue;
    font-size: 12px;
    font-weight: 600;
    -o-transform: rotate(5deg);
    -webkit-transform: rotate(5deg);
    -moz-transform: rotate(5deg);
  }

  .title-an {
    padding-bottom: 1px;
  }

  .news-wrap {
    font-size: 12px;
    background: #ffff;
    padding: 23px;
    font-weight: 600;
  }

  .news-title {
    font-size: 18px;
    padding-bottom: 7px;
  }

  .marker-icon {
    width: 16px;
    height: 20px;
    position: absolute;
    top: 0px;
    left: 26px;
  }

  .title-em {
    font-size: 18px;
  }



  .an-wrap:hover,
  .news-wrap:hover,
  .memo-wrap:hover,
  .em-wrap:hover {
    -webkit-box-shadow: 10px 10px 5px -4px rgba(176, 176, 176, 1);
    -moz-box-shadow: 10px 10px 5px -4px rgba(176, 176, 176, 1);
    box-shadow: 10px 10px 5px -4px rgba(176, 176, 176, 1);

    cursor: pointer;

    transform: scale(1.1);
    -webkit-transition: transform 0.2s ease-in-out;
    -moz-transition: transform 0.2s ease-in-out;
    -ms-transition: transform 0.2s ease-in-out;
  }

  .an-wrap:before {
    content: "";
    position: absolute;
    top: 0;
    right: -1px;
    border-width: 0 16px 16px 0;
    border-style: solid;
    border-color: #fcf5e7 #e8ca95 #ffffff #e8ca95;
    background: #e8ca95;
    display: block;
    width: 0;
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.3),
      -1px 1px 1px rgba(0, 0, 0, 0.2);
    -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.3), -1px 1px 1px rgba(0, 0, 0, 0.2);
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.3), -1px 1px 1px rgba(0, 0, 0, 0.2);
  }
}
}





@media only screen and (max-width: 768px) {
  .wrapper_travel_condition{
    h4{
      font-size: 18px;
    }
    .box {
      width: 100%;
    }
    .title-em {
      font-size: 16px;
    }
    .news-title {
      font-size: 16px;
    }
    .title-em {
      font-size: 16px;
    }
    .news-title {
      font-size: 16px;
    }
  }

}
</style>
