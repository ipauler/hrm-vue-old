<template>
    <div class="mainApp" v-bind:class="{opened: this.$store.state.menuOpened}">
        <router-view></router-view>
    </div>
</template>


<style>
    .opened {
       padding-left: 13% !important;
    }
    .mainApp {
        padding-top: 64px;
        min-height: 100vh;
        padding-left: 3%;
        overflow: hidden;
        background-color: #fff;
        -webkit-transition: all .45s cubic-bezier(.23,1,.32,1);
        transition: all .45s cubic-bezier(.23,1,.32,1);
    }
</style>
<script>
    export default {
        data(){
            return {

            }
        },
        computed: {
            menuIsOpened(){
                return this.$store.state.menuOpened;
            }
        }

    }
</script>