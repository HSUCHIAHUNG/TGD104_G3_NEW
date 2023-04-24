const { defineConfig } = require("@vue/cli-service");
module.exports = defineConfig({
  transpileDependencies: true,
});

// css source map 設定
module.exports = {
  css: {
    sourceMap: true,
  },
  runtimeCompiler: false,
  // publicPath: '/TGD104_G3_NEW/vue-lessons/dist/',

  publicPath: '/tgd104/g3/dist/',

  
};
