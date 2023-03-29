<template>
  <nav>
    <!-- <router-link to="/">Home</router-link> |
    <router-link to="/about">About</router-link> | -->
    <router-link to="/chart">後台圖表</router-link> |
    <router-link to="/member">會員中心</router-link> |
    <router-link to="/consultant">顧問中心</router-link> |
    <router-link to="/backend">後台管理</router-link> |
    <router-link to="/learning">陪你學習</router-link> |
    <router-link to="/travel">陪你旅行</router-link> |
    <!-- <router-link to="/learning">陪你學習</router-link> | -->
    <router-link to="/Index">首頁</router-link> | 
    <router-link to="/Respect">關於我們</router-link> 


  </nav>
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

nav {
  padding: 30px;

  a {
    font-weight: bold;
    color: #2c3e50;

    &.router-link-exact-active {
      color: #42b983;
    }
  }
}
</style>
