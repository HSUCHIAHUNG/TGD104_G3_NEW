<template>
  <div>
    <main class="travel_game_wrapper">
      <div class="container travel_game_container">
        <div class="travel_game_comment main_test">
          <!-- q01 -->
          <div id="q01" class="test explain">
            <h1>歡迎來到理想顧問世界盃！</h1>
            <div class="bottom">
              <span href=""></span>
              <p>01</p>
              <span id="next-01" @click="nextQuestion('q01', 'q02')"
                ><i class="fa-regular fa-circle-right"></i
              ></span>
            </div>
          </div>
          <!-- q01 end -->
          <!-- q02 -->
          <div id="q02" class="test explain hide">
            <h1>準備好要挑選專屬自己的理想顧問了嗎？</h1>
            <div class="bottom">
              <span id="prev-02" @click="prevQuestion('q02', 'q01')"
                ><i class="fa-regular fa-circle-left"></i
              ></span>
              <p>02</p>
              <span id="next-02" @click="nextQuestion('q02', 'q03')"
                ><i class="fa-regular fa-circle-right"></i
              ></span>
            </div>
          </div>
          <!-- q02 end -->
          <!-- q03 -->
          <div id="q03" class="test explain hide">
            <h1>接下來我會開始說明遊戲規則！</h1>
            <div class="bottom">
              <span id="prev-03" @click="prevQuestion('q03', 'q02')"
                ><i class="fa-regular fa-circle-left"></i
              ></span>
              <p>03</p>
              <span id="next-03" @click="nextQuestion('q03', 'q04')"
                ><i class="fa-regular fa-circle-right"></i
              ></span>
            </div>
          </div>
          <!-- q03 end -->
          <!-- q04 -->
          <div id="q04" class="test explain hide">
            <h1>遊戲會PK制的方式進行，總共進行3輪。</h1>
            <div class="bottom">
              <span id="prev-04" @click="prevQuestion('q04', 'q03')"
                ><i class="fa-regular fa-circle-left"></i
              ></span>
              <p>04</p>
              <span id="next-04" @click="nextQuestion('q04', 'q05')"
                ><i class="fa-regular fa-circle-right"></i
              ></span>
            </div>
          </div>
          <!-- q04 end -->
          <!-- q05 -->
          <div id="q05" class="test explain hide">
            <h1>
              每一輪會給您2個顧問進行2選1，選中的會保留，沒被選中的會被淘汰。
            </h1>
            <div class="bottom">
              <span id="prev-05" @click="prevQuestion('q05', 'q04')"
                ><i class="fa-regular fa-circle-left"></i
              ></span>
              <p>05</p>
              <span id="next-05" @click="nextQuestion('q05', 'q06')"
                ><i class="fa-regular fa-circle-right"></i
              ></span>
            </div>
          </div>
          <!-- q05 end -->
          <!-- q06 -->
          <div id="q06" class="test explain hide">
            <h1>最後留下的就是專屬您的理想顧問！ 準備好要開始遊戲了嗎？</h1>
            <div class="bottom">
              <span id="prev-06" @click="prevQuestion('q06', 'q05')"
                ><i class="fa-regular fa-circle-left"></i
              ></span>
              <p>06</p>
              <span id="next-06" @click="nextQuestion('q06', 'q07')"
                ><i class="fa-regular fa-circle-right"></i
              ></span>
            </div>
          </div>
          <!-- q06 end -->
          <!-- q07 -->
          <div id="q07" class="test explain hide">
            <h1>遊戲開始!!!!!</h1>
            <div class="bottom">
              <span id="prev-07" @click="prevQuestion('q07', 'q06')"
                ><i class="fa-regular fa-circle-left"></i
              ></span>
              <p>07</p>
              <span id="next-07" @click="nextQuestion('q07', 'q08')"
                ><i class="fa-regular fa-circle-right"></i
              ></span>
            </div>
          </div>
          <!-- q07 end -->
          <!-- q08 -->
          <div id="q08" class="test hide">
            <div id="pick1" @click="firstRound($event)">
              <p class="first_round" data-id="0">第一位</p>
              <p class="first_round" data-id="1">第二位</p>
            </div>
            <div class="bottom">
              <span id="prev-08" @click="prevQuestion('q08', 'q07')"
                ><i class="fa-regular fa-circle-left"></i
              ></span>
              <p>08</p>
              <span id="next-08" @click="nextQuestion('q08', 'q09')"
                ><i class="fa-regular fa-circle-right"></i
              ></span>
            </div>
          </div>
          <!-- q08 end -->
          <!-- q09 -->
          <div id="q09" class="test hide">
            <div id="pick2" @click="secondRound($event)">
              <p class="second_round" data-id="2">第三位</p>
              <p class="second_round" data-id="3">第四位</p>
            </div>
            <div class="bottom">
              <span id="prev-09" @click="prevQuestion('q09', 'q08')"
                ><i class="fa-regular fa-circle-left"></i
              ></span>
              <p>09</p>
              <span id="next-09" @click="nextQuestion('q09', 'q10')"
                ><i class="fa-regular fa-circle-right"></i
              ></span>
            </div>
          </div>
          <!-- q09 end -->
          <!-- q10 -->
          <div id="q10" class="test hide">
            <div id="pick3" @click="finalRound($event)">
              <p class="third_round" data-id="2">第三位</p>
              <p class="third_round" data-id="3">第四位</p>
            </div>
            <div class="bottom">
              <span id="prev-10" @click="prevQuestion('q10', 'q09')"
                ><i class="fa-regular fa-circle-left"></i
              ></span>
              <p>10</p>
              <span></span>
            </div>
          </div>
          <!-- q10 end -->
        </div>
      </div>
    </main>
  </div>
</template>

//
<script>
// import ChatBot from "@/components/ChatBot.vue";

export default {
  name: "TravelGame",
  components: {
    // ChatBot,
    // DropDown,
  },
  data() {
    return {
      people: [
        {
          id: 1,
          name: "王一",
          img: "https://images.unsplash.com/photo-1480429370139-e0132c086e2a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8bWFufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60",
        },
        {
          id: 2,
          name: "王二",
          img: "https://images.unsplash.com/photo-1581382575275-97901c2635b7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8bWFufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60",
        },
        {
          id: 3,
          name: "王三",
          img: "https://images.unsplash.com/photo-1590086782957-93c06ef21604?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fG1hbnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60",
        },
        {
          id: 4,
          name: "王四",
          img: "https://images.unsplash.com/photo-1615109398623-88346a601842?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fG1hbnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60",
        },
      ],
      firstRoundPick: "",
      secondRoundPick: "",
      finalPick: "",
    };
  },
  methods: {
    // 下一題
    nextQuestion(currentId, nextId) {
      const current = document.getElementById(currentId);
      const next = document.getElementById(nextId);
      current.classList.add("hide");
      next.classList.remove("hide");
      console.log(currentId, nextId);
    },
    // 上一題
    prevQuestion(currentId, prevId) {
      const current = document.getElementById(currentId);
      const prev = document.getElementById(prevId);
      current.classList.add("hide");
      prev.classList.remove("hide");
    },
    // 第一輪
    firstRound($event) {
      this.firstRoundPick = parseInt($event.target.dataset.img);
      $event.target.classList.add("border_picked");
      console.log(this.firstRoundPick);
      console.log($event.target);
    },
    // 第二輪
    secondRound($event) {
      this.secondRoundPick = parseInt($event.target.dataset.img);
      $event.target.classList.add("border_picked");
      console.log(this.secondRoundPick);
      pick3.innerHTML = `<img src="${
        this.people[this.firstRoundPick].img
      }" alt="" data-img="${this.firstRoundPick}" />
   <img src="${this.people[this.secondRoundPick].img}" alt="" data-img="${
        this.secondRoundPick
      }" />`;
    },
    // 最後一輪
    finalRound($event) {
      this.finalPick = parseInt($event.target.dataset.img);
      console.log(this.finalPick);
      pick3.innerHTML = `<img src="${
        this.people[this.finalPick].img
      }" alt="" data-img="${
        this.finalPick
      }" /><p class="final">恭喜您選出專屬您的理想顧問!</p>`;
    },
  },
  mounted() {
    // 按題目分別塞入對應的照片
    pick1.innerHTML = `<img src="${this.people[0].img}" alt="people1" data-img='0'><img src="${this.people[1].img}" alt="people2" data-img='1'>`;
    pick2.innerHTML = `<img src="${this.people[2].img}" alt="people3" data-img='2'><img src="${this.people[3].img}" alt="people4" data-img='3'>`;
  },
};
</script>

<style lang="scss">
@import "../assets/tgd104-sass/new_style.scss";
</style>

<!-- <style lang="css">
* {
  margin: 0;
  padding: 0;
}
.travel_game_wrapper {
  background-image: url("../assets/image/travel/travel_game_bg.png");
  background-repeat: no-repeat;
  background-size: cover;
  height: 590px;
  width: 100%;
}

.travel_game_container {
}

.travel_game_wrapper .travel_game_container .travel_game_comment {
  width: 40%;
  min-width: 450px;
  margin: 0 auto;
  border-radius: 15px 15px 0 15px;
  background-color: #fff;
  position: relative;
  top: 50px;
}
.travel_game_wrapper .travel_game_container .travel_game_comment h1 {
  padding: 50px 20px;
}

/* ------------------------------------------------------------ */

.hide {
  display: none !important;
}
.test.explain {
  border: 15px solid lightblue;
  background-color: #fff;
}
.test {
  /* width: 80%; */
  margin: 0 auto;
  border-radius: 15px 15px 0 15px;
  font-size: 28px;
  font-weight: 500;
  text-align: center;
  /* 水平置中 */
  position: absolute;
  left: 0;
  right: 0;
  top: 50%;
  /* 垂直置中 */
}
/* .test.border0 {
  border: 0px !important;
} */

#pick1,
#pick2,
#pick3 {
  display: flex;
  justify-content: space-between;
}

#pick3 {
  align-items: center;
}

.blur {
  opacity: 0.5;
}

.bottom {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 20px;
}
.bottom i {
  font-size: 30px;
  cursor: pointer;
}
.bottom i:hover {
  color: lightblue;
}
.bottom span {
  flex: 3;
}
.bottom p {
  flex: 1;
}

img {
  border-radius: 15px;
  width: 48%;
  object-fit: cover;
  cursor: pointer;
}

.border_picked {
  border: 10px solid lightblue;
  border-radius: 15px;
}
</style> -->
