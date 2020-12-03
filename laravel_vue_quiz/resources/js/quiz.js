import Vue from 'vue'
import Quiz from './components/page/Quiz'
import SocialSharing from 'vue-social-sharing'

Vue.use(SocialSharing)

new Vue({
    el: '#app',
    components: {
        quiz: Quiz
    }
})