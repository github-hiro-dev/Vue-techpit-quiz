<template>
    <div>
        <the-header :auth="auth"></the-header>
        <router-view :errors="errors"></router-view>
        <the-footer></the-footer>
    </div>
</template>

<script>
import TheHeader from "../layout/TheHeader";
import TheFooter from "../layout/TheFooter";
export default {
    components: {
        TheHeader,
        TheFooter
    },
    props:{
        auth: {
            type: Object | Array
        },
        errors:{
            type: Object | Array
        }
    }
};
</script>
