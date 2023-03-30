<template>
<div class="center_nav">
  
    <div>
        <i class="fa-solid fa-xmark"></i>
    </div>

    <nav class="center_content">
      <!-- <router-link to="/">Home</router-link> |
      <router-link to="/about">About</router-link> | -->
      <button class="btn_blue">
        <router-link to="/chart">後台圖表</router-link>
      </button>   

      <button class="btn_blue">
        <router-link to="/member" class="center_content_btn">會員中心</router-link>
      </button>   

      <button class="btn_blue">
        <router-link to="/consultant">顧問中心</router-link>
      </button>   

      <button class="btn_blue">
        <router-link to="/backend">後台管理</router-link>
      </button>   

      <button class="btn_blue">
        <router-link to="/learning">陪你學習</router-link>
      </button>   

      <button class="btn_blue">
        <router-link to="/travel">陪你旅行</router-link>
      </button>    

      <button class="btn_blue">
        <router-link to="/Index">首頁</router-link>
      </button>   

      <button class="btn_blue">
        <router-link to="/Respect">關於我們</router-link>
      </button>    
      <!-- <router-link to="/learning">陪你學習</router-link> | -->
    </nav>

</div>

  <router-view />
</template>

<style lang="scss">
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

.center_nav{
  height: 100%;
  width: 100%;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #FDF8EE;
  overflow-x: hidden;
  transition: 0.5s;



    .center_content {
      position: relative;
      top: 10%;
      width: 100%;
      text-align: center;
      margin-top: 30px;
      display: flex;
      flex-direction: column;
      align-items: center;

      button{
        margin-top: 10px;
        margin-bottom: 10px;
      }

      .btn_blue{
        
        .center_content_btn{
      
      }
    }
      


    a {
      font-weight: bold;
      color: #FDF8EE;

      &.router-link-exact-active {
          color: #585858;
      }
    }
  }
}


</style>
