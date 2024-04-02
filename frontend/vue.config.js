const { defineConfig } = require('@vue/cli-service')
const webpack = require('webpack');


module.exports = defineConfig({
  transpileDependencies: true,
  configureWebpack: {
    plugins: [
      new webpack.DefinePlugin ({
        __VUE_OPTIONS_API__: JSON.stringify(true), // Example: Enable the Options API
        __VUE_PROD_DEVTOOLS__: JSON.stringify(false), // Example: Disable Vue devtools in production builds
        __VUE_PROD_HYDRATION_MISMATCH_DETAILS__: JSON.stringify(false), // Setting the specific flag in question
      }),
    ],
  },
devServer: {
  proxy: {
    '/backend': {
      target: 'http://localhost:8000',
      changeOrigin: true,
      pathRewrite: { '^/backend': '/vue-v3/backend' },
    }
  }
}
}); 
       