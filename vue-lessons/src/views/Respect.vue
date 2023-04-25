<template>
  <!-- banner start-->
  <VHeader></VHeader>
  <div class="respect_bg">





  <section id=timeline>
	<h1><span>「陪你」</span>在幹嘛?</h1>
	<p class="leader">陪你的故事緣起於日本，<br><br>要從一位退休大叔的故事開始說起...</p>
  <div class="earth">
      <img src="../assets/image/earth.png" alt="">
  </div>

	<div class="demo-card-wrapper">
		<div class="demo-card demo-card--step1">
			<div class="head">
				<div class="number-box">
					<span>01</span>
				</div>
				<!-- <h2><span class="small">Subtitle</span> Technology</h2> -->
			</div>
			<div class="body">
				<p>一天大叔走在人來人往的街道上偶然聽見女大學生談話說道「大叔好噁心」!</p>
				<img src="../assets/image/about/respect007.png">
			</div>
		</div>

		<div class="demo-card demo-card--step2">
			<div class="head">
				<div class="number-box">
					<span>02</span>
				</div>
				<!-- <h2><span class="small">Subtitle</span> Confidence</h2> -->
			</div>
			<div class="body">
				<p>身為一個擁有豐富閱歷經驗的大叔想做些事情來重拾社會對大叔的正面形象決定，以展現大叔被遺忘的魅力</p>
        <img src="../assets/image/about/respect010.png">
				<!-- <img src="http://placehold.it/1000x500" alt="Graphic"> -->
			</div>
		</div>

		<div class="demo-card demo-card--step3">
			<div class="head">
				<div class="number-box">
					<span>03</span>
				</div>
				<!-- <h2><span class="small">Subtitle</span> Adaptation</h2> -->
			</div>
			<div class="body">
				<p>所以決定出租自己，而人生中也有許多時刻會需要像出租大叔這樣的人生導師，給予適時的指引與幫助 。</p>
				<img src="../assets/image/about/respect009.png">
			</div>
		</div>

		<div class="demo-card demo-card--step4">
			<div class="head">
				<div class="number-box">
					<span>04</span>
				</div>
				<!-- <h2><span class="small">Subtitle</span> Consistency</h2> -->
			</div>
			<div class="body">
				<p>而「陪你」這個網站就此誕生!希望可以幫助所有孤單需要求助的人</p>
				<img src="../assets/image/about/respect003.png">
			</div>
		</div>

		<div class="demo-card demo-card--step5">
			<div class="head">
				<div class="number-box">
					<span>05</span>
				</div>
				<!-- <h2><span class="small">Subtitle</span> Conversion</h2> -->
			</div>
			<div class="body">
				<p>我們提供了「學習」及「旅遊」的服務，透過體驗的方式增加生活的樂趣!</p>
        <img src="../assets/image/about/respect008.png">
				<!-- <img src="http://placehold.it/1000x500" alt="Graphic"> -->
			</div>
		</div>
    
	</div>
</section>







</div>




<VFooter></VFooter>
</template>

<script>
import VHeader from "@/components/VHeader.vue";
import VFooter from "@/components/VFooter.vue";
import Typed from "typed.js";

export default {
name: "Respect",
components: {
  VHeader,
  VFooter,
  Typed
},

data() {
  return {
  
  };
},

methods: {
 
},

mounted() {
    
  // const options1 = {
  //   strings: ['陪你的故事緣起於日本,這要從一個退休大叔的,故事開始說起...'],
  //   typeSpeed: 100,
  //   showCursor : false,
  //   loop : false,
  //   // startDelay : 1000,
  // };

  // const options2 = {
  //   strings: ['有一天大叔走在人來人往的街道上偶然聽見女大學生談話說道「大叔好噁心」!'],
  //   typeSpeed: 100,
  //   showCursor : false,
  //   loop : false,
  //   // startDelay : 5000,
  // };

  // const options3 = {
  //   strings: ['身為一個擁有豐富閱歷經驗的大叔想做些事情來重拾社會對大叔的正面形象決定，出租自己以展現大叔被遺忘的魅力 。'],
  //   typeSpeed: 100,
  //   showCursor : false,
  //   loop : false,
  //   // startDelay : 10000,
  // };

  // const options4 = {
  //   strings: ['而陪你這個網站也以此概念延伸,認為出租大叔是出租自己閱歷經驗，而人生中也有許多時刻會需要像出租大叔這樣的人生導師，給予適時的指引與幫助 。'],
  //   typeSpeed: 100,
  //   showCursor : false,
  //   loop : false,
  //   // startDelay : 18000,
  // };

  // new Typed('.typing1', options1);
  // new Typed('.typing2', options2);
  // new Typed('.typing3', options3);
  // new Typed('.typing4', options4);


  // let executed = false;
  // let executed2 = false;
  // let executed3 = false;

  //   window.addEventListener('scroll', () => {
  //   const story1 = document.querySelector('.about_story1');
  //   const story2 = document.querySelector('.about_story2');
  //   const story3 = document.querySelector('.about_story3');
 
  //   if (story1 && !executed && story1.getBoundingClientRect().top <= 0) {
  //     executed = true;
  //     new Typed('.typing2', options2);
  //   }
    
  //   if (story2 && !executed2 && story2.getBoundingClientRect().top <= 0) {
  //     executed2 = true;
  //     new Typed('.typing3', options3);
  //   }
  //   if (story3 && !executed3 && story3.getBoundingClientRect().top <= 0) {
  //     executed3 = true;
  //     new Typed('.typing4', options4);
  //   }
  // });
  
},
};
</script>

<style lang="scss" scope>
@import "../assets/tgd104-sass/new_style.scss";

/* Media Queries */

@mixin mq-xs {
  @media (min-width: 320px) {
    @content;
  }
}

@mixin mq-sm {
  @media (min-width: 480px) {
    @content;
  }
}

@mixin mq-md {
  @media (min-width: 720px) {
    @content;
  }
}

@mixin mq-lg {
  @media (min-width: 1000px) {
    @content;
  }
}

$background: #f7f7f7;
$box-shadow: 0px 1px 22px 4px rgba(0, 0, 0, 0.07);
$border: 1px solid rgba(191, 191, 191, 0.4);
$items: 5;
$rows: ceil($items/2);

/* Card sizing */

$card-height: 400px;
$card-width: 450px;
$inner-margin: 15px;
$number-size: 35px;
$stagger: 180px;
$outer-margin: 90px;
$marker-size: 9px;

/* Colors */

$steps: #DCECEE;
$colors: #FFE59D,
#DCECEE,
#FFE59D,
#DCECEE;
$timeline: #bdbdbd;

/* Calculations */

$container-height: $rows * ($card-height + $outer-margin) + $stagger;
$container-width: $card-width*2 + $outer-margin*3;
$head-height: $number-size + 50;
$body-height: $card-height - $head-height;
$marker-dist: $card-width + $outer-margin/2 - $marker-size/2;

/* Placeholders */

@include mq-lg {
  %arrow {
    position: absolute;
    content: "";
    width: 0;
    height: 0;
    border-top: 15px solid transparent;
    border-bottom: 15px solid transparent;
  }
  %marker {
    position: absolute;
    content: "";
    width: $marker-size;
    height: $marker-size;
    background-color: $timeline;
    border-radius: $marker-size;
    box-shadow: 0px 0px 2px 8px $background;
  }
}


/* Some Cool Stuff */

$counter: $items - $rows + 2;
@for $i from 1 through $rows {
  .demo-card:nth-child(#{$i*2-1})   { order: $i }
  .demo-card:nth-child(#{$i*2})     { order: $counter }
  $counter: $counter + 1;
}

/* Border Box */

* {
  box-sizing: border-box;
}

/* Fonts */

body {
  font-family: Roboto;
}

#timeline {
  padding: 60px 0;
  h1 {
    text-align: center;
    font-size: 32px;
    font-weight:600;
    margin-bottom: 20px;
    letter-spacing: 2px;
    color: #585858;
    span {
      color: #ff7d33;
    }
  }
  p.leader {
    text-align: center;
    max-width: 90%;
    margin: auto;
    font-weight: 600;
    letter-spacing: 2px;
    font-size: 20px;
    color: #585858;
  }
  .demo-card-wrapper {
    position: relative;
    margin: auto;
    @include mq-lg {
      display: flex;
      flex-flow: column wrap;
      width: $container-width;
      height: 1500px;
      margin: 0 auto;
    }
    &::after {
      // z-index: 1;
      content: "";
      position: absolute;
      top: 0;
      bottom: 0;
      left: 50%;
      border-left: $border;
      @include mq-lg {
        border-left: 1px solid $timeline;
      }
    }
  }
  .demo-card {
    position: relative;
    display: block;
    margin: 10px auto 80px;
    max-width: 94%;
    z-index: 1;
    border-radius: 10px;
    @include mq-sm {
      max-width: 60%;
      box-shadow: $box-shadow;
    }
    @include mq-md {
      max-width: 40%;
    }
    @include mq-lg {
      max-width: $card-width;
      height: $card-height;
      margin: $outer-margin;
      margin-top: $outer-margin/2;
      margin-bottom: $outer-margin/2;
      &:nth-child(odd) {
        margin-right: $outer-margin/2;
        .head::after {
          @extend %arrow;
          border-left-width: 15px;
          border-left-style: solid;
          left: 100%;
        }
        .head::before {
          @extend %marker;
          left: $marker-dist + 1;
        }
      }
      &:nth-child(even) {
        margin-left: $outer-margin/2;
        .head::after {
          @extend %arrow;
          border-right-width: 15px;
          border-right-style: solid;
          right: 100%;
        }
        .head::before {
          @extend %marker;
          right: $marker-dist - 1;
        }
      }
      &:nth-child(2) {
        margin-top: $stagger;
      }
    }
    .head {
      position: relative;
      display: flex;
      align-items: center;
      color: #fff;
      font-weight: 400;
      border-radius: 5px 5px 0 0;
      .number-box {
        display: inline;
        float: left;
        margin: $inner-margin;
        padding: 10px;
        font-size: $number-size;
        line-height: $number-size;
        font-weight: 600;
        background: rgba(0, 0, 0, 0.17);
        border-radius: 50%;
      }
      h2 {
        text-transform: uppercase;
        font-size: 1.3rem;
        font-weight: inherit;
        letter-spacing: 2px;
        margin: 0;
        padding-bottom: 6px;
        line-height: 1rem;
        @include mq-sm {
          font-size: 165%;
          line-height: 1.2rem;
        }
        span {
          display: block;
          font-size: 0.6rem;
          margin: 0;
          @include mq-sm {
            font-size: 0.8rem;
          }
        }
      }
    }
    .body {
      background: #fff;
      // border: $border;
      border-top: 0;
      padding: $inner-margin;
      border-radius: 0 0 10px 10px;
      @include mq-lg {
        height: $body-height;
      }
      p {
        font-size: 18px;
        line-height: 28px;
        letter-spacing: 2px;
        font-weight: 600;
        margin-bottom: $inner-margin;
        color: #585858;
      }
      img {
        display: block;
        width: 75%;
        margin: 0 auto;
      }
    }
    @for $i from 1 through $items {
      &--step#{$i} {
        $color: nth($colors, ((($i - 1) % 4) + 1));
        background-color: $color;
        .head::after {
          border-color: $color;
        }
      }
    }
  }
}


.earth{
  text-align: center;
  // padding-top: 60px;
}

.earth img{
width: 35%;
min-width: 300px;
animation: 130s linear infinite rerotate;
animation-name: earth;
margin-top: 20px;
}

@keyframes earth{
from {
  transform: rotate(0deg);
}
to {
  transform: rotate(359deg);
}
}


.respect_bg{
  background-color: #f8f4eb;
}

#timeline .demo-card--step5 .body img{
  display: block;
  width: 100%;
  margin: 35px auto;
}

</style>
