<template>
  <div class="home">
    <div class="home_container container">
      <img src="../assets/image/logo_header.png" alt="">
      <div class="home_btn">
        <div class="home_img1">
          <a href="/main">前台</a>
        </div>
        <div class="home_img2">
          <a href="/BackendCenter">後台</a>
        </div>
      </div>
    </div>
  </div>

  <!-- <app></app> -->

</template>

 <script>
 export default {
 name: 'HomeView',
  data() {
    return {

    }
  },
  mounted() {

  },
   components: {
 

  }
}
</script>

<style lang="scss">
*{
  // outline: 1px solid red;
}
  .home{
    background-color: #FDF8EE;
    height: 100vh;
    .home_container{
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 85vh;
      width: auto;

      img{
        background-image: url('../assets/image/logo_header.png');
        background-image: url(data:image/png;base64,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);
        background-repeat: no-repeat;
        background-size: contain;
        width: 14%;
        padding-bottom: 40px;
        animation: main_logo 1.8s linear infinite alternate;
      }

      @keyframes main_logo {
        0%   {transform: rotate(-10deg);}
        50%  {transform: rotate(0deg);}
        100% {transform: rotate(10deg);}
      }

      .home_btn{
        display: flex;
        justify-content: space-between;
        min-width: auto;
        width: 40%;


        
        .home_img1{
          background-image: url('../assets/image/backend_btn.png.png');
          background-size: contain;
          background-repeat: no-repeat;
          background-position: center;
          width: 45%;
          height: 170px;
          position: relative;

          &:hover{
            background-image:url('../assets/image/Vector (1).png') ;
          }

            a{
              color: #555555;
              font-weight: bold;
              position: absolute;
              top: 0;
              bottom: 0;
              left: 0;
              right: 0;
              margin: auto;
              width: 100%;
              line-height: 170px;
              text-align: center;
              font-size: 26px;

            }
        }

        .home_img2{
          background-image: url(data:image/png;base64,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);
          background-size: contain;
          background-repeat: no-repeat;
          background-position: center;
          width: 45%;
          height: 170px;
          position: relative;

          &:hover{
            background-image:url('../assets/image//font_btn_hover.png') ;
          }
            a{
              color: #555555;
              font-weight: bold;
              position: absolute;
              top: 0;
              bottom: 0;
              left: 0;
              right: 0;
              margin: auto;
              width: 100%;
              line-height: 170px;
              text-align: center;
              font-size: 26px;
            }
        }
      }
    }
  }


  @mixin HomeView ($breakpoint){
    @media screen and (max-width: $breakpoint) {
    @content;  
    @if $breakpoint == 1200px{
          
        }

        @else if $breakpoint == 992px{
        
        }

        @else if $breakpoint == 768px{


        } 

        @else if $breakpoint == 576px{
           

        }
    }
}

@include HomeView(1200px){
    .home{
            
      .home_container{
        

        img{
          
        }

        @keyframes main_logo {
          0%   {transform: rotate(-10deg);}
          50%  {transform: rotate(0deg);}
          100% {transform: rotate(10deg);}
        }

        .home_btn{
    
          

          
          .home_img1{
            

              a{
                

              }
          }

          .home_img2{
            
              a{
                
              }
          }
        }
      }
    }
  }
@include HomeView(992px){
  .home{
            
    .home_container{
      

      img{
        
      }

      @keyframes main_logo {
        0%   {transform: rotate(-10deg);}
        50%  {transform: rotate(0deg);}
        100% {transform: rotate(10deg);}
      }

      .home_btn{
  
        

        
        .home_img1{
          

            a{
              

            }
        }

        .home_img2{
          
            a{
              
            }
        }
      }
    }
  }
}
@include HomeView(768px){
  .home{
            
    .home_container{
      

      img{
        width: 20%;
      }

      @keyframes main_logo {
        0%   {transform: rotate(-10deg);}
        50%  {transform: rotate(0deg);}
        100% {transform: rotate(10deg);}
      }

      .home_btn{
  
        

        
        .home_img1{
          

            a{
              font-size: 20px;
            }
        }

        .home_img2{
          
            a{
              font-size: 20px;
            }
        }
      }
    }
  }
}
@include HomeView(576px){
  .home{
            
    .home_container{
      

      img{
        width: 30%;
      }

      @keyframes main_logo {
        0%   {transform: rotate(-10deg);}
        50%  {transform: rotate(0deg);}
        100% {transform: rotate(10deg);}
      }

      .home_btn{
        width: 75%;
        

        
        .home_img1{
          height: 70px;
          width: 100%;
          height: 100px;
            a{
              font-size: 16px;
              line-height: 100px;
            }
        }

        .home_img2{
          height: 70px;
          width: 100%;
          height: 100px;
            a{
              font-size: 16px;
              line-height: 100px;
            }
        }
      }
    }
  }

}




</style>


