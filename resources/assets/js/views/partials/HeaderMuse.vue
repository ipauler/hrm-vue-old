<template>
    <mu-appbar class="hrmBar" v-bind:class="{ navShow: this.$store.state.menuOpened }">

    </mu-appbar>
</template>

<script>

    export default {
        data(){
            return {
                iconType: 'menu'
            }
        },
        computed: {
            menuIsOpened(){
                return this.$store.state.menuOpened;
            }
        },
        methods: {


        }
    }
</script>

<style>
    .hrmBar.navShow{
        padding: 1%;
    }
    .hrmBar {
        position: fixed;
        background-color: #fff;
        z-index: 220;
        left: 3%;
        right: 0;
        top: 0;
        width: auto;
        -webkit-transition: all .45s cubic-bezier(.23,1,.32,1);
        transition: all .45s cubic-bezier(.23,1,.32,1);
    }
    .navShow {
        left: 13%;
    }
</style>