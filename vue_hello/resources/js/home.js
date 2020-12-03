import Vue from 'vue'
import Home from './components/page/Home'
import SocialSharing from 'vue-social-sharing'

Vue.use(SocialSharing);

new Vue({
  el: '#app', // 「el」はアプリケーションを紐付ける要素のセレクタです
  components: {
    home: Home //使用するコンポーネントの名称と使うコンポーネントを指定します（app:名称, App(./components/HelloWorld)使うコンポーネント）を指定します
  }
})
