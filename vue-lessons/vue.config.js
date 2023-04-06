const { defineConfig } = require("@vue/cli-service");
module.exports = defineConfig({
  transpileDependencies: true,
});

// css source map 設定
module.exports = {
  css: {
    sourceMap: true,
  },
};
