<template>
    <div>
        <the-header></the-header>
        <router-view></router-view>
        <the-footer></the-footer>
    </div>
</template>

<script>
import TheHeader from "../layout/TheHeader";
import TheFooter from "../layout/TheFooter";
export default {
    name: "app",
    components: {
        TheHeader,
        TheFooter
    }
};
</script>
