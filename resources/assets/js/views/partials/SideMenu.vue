<template>
    <mu-drawer class="menuList mu-drawer app-drawer" v-bind:class="{open: this.$store.state.menuOpened, shrinked: !this.$store.state.menuOpened}">
        <mu-appbar class="menuTitle">
                <mu-icon-button v-on:click="onMenuClicked" slot="right">
                    <i class="material-icons colored" v-if="!this.$store.state.menuOpened">chevron_right</i>
                    <i class="material-icons colored" v-else>chevron_left</i>
                </mu-icon-button>
        </mu-appbar>
        <mu-divider></mu-divider>
        <mu-list class="navMenuInner">
            <mu-list-item title="Home" activeClass="activatedNav"  titleClass="navTitle" class="navItem" to="/home">
                <mu-icon slot="right"  class="navIcon" color="#fdd835" value="home"/>
            </mu-list-item>
            <mu-list-item title="Users" activeClass="activatedNav" titleClass="navTitle"  class="navItem" to="/users">
                <mu-icon slot="right" class="navIcon" color="#1e88e5" value="account_circle"/>
            </mu-list-item>
            <mu-list-item title="Employee" activeClass="activatedNav" titleClass="navTitle"  class="navItem" to="/employee">
                <mu-icon slot="right" class="navIcon" color="#43a047" value="people"/>
            </mu-list-item>
            <mu-list-item title="Candidates" activeClass="activatedNav" titleClass="navTitle"  class="navItem" to="/candidates">
                <mu-icon slot="right" class="navIcon" color="#3949ab" value="group_add"/>
            </mu-list-item>
            <mu-list-item title="Departments" activeClass="activatedNav" titleClass="navTitle"  class="navItem" to="/departments">
                <mu-icon slot="right" class="navIcon" color="#00897b" value="group_work"/>
            </mu-list-item>
            <mu-list-item title="Projects" activeClass="activatedNav" titleClass="navTitle"  class="navItem" to="/projects">
                <mu-icon slot="right" class="navIcon" color="#f4511e" value="insert_chart"/>
            </mu-list-item>
            <mu-list-item title="Roles" activeClass="activatedNav" titleClass="navTitle"  class="navItem" to="/roles">
                <mu-icon slot="right" class="navIcon" color="#43a047" value="verified_user"/>
            </mu-list-item>
        </mu-list>
    </mu-drawer>
</template>

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
        },
        methods: {
            onMenuClicked(){
                this.$store.state.menuOpened = !this.$store.state.menuOpened
            }
        }
    }
</script>

<style>
    .navItem:hover {
        -webkit-box-shadow: inset 0 14px 45px rgba(0, 0, 0, .247059), 0 10px 18px rgba(0, 0, 0, .219608);
        -moz-box-shadow: inset 0 14px 45px rgba(0, 0, 0, .247059), 0 10px 18px rgba(0, 0, 0, .219608);
        box-shadow: inset 0 14px 45px rgba(0, 0, 0, .247059), 0 10px 18px rgba(0, 0, 0, .219608);
    }
    .navItem:nth-of-type(7) .activatedNav{
        border-right:4px solid #43a047;
    }
    .navItem:hover:nth-child(7){
        background-color: #43a047;
    }
    .navItem:nth-of-type(6) .activatedNav{
        border-right:4px solid #f4511e;
    }
    .navItem:hover:nth-child(6){
        background-color: #f4511e;
    }
    .navItem:nth-of-type(5) .activatedNav{
        border-right:4px solid #00897b;
    }
    .navItem:hover:nth-child(5){
        background-color: #00897b;
    }
    .navItem:nth-of-type(4) .activatedNav{
        border-right:4px solid #3949ab;
    }
    .navItem:hover:nth-child(4){
        background-color: #3949ab;
    }
    .navItem:hover:nth-child(3){
        background-color: #43a047;
    }
    .navItem:nth-of-type(2) .activatedNav{
        border-right:4px solid #1e88e5;
    }
    .navItem:hover:nth-child(2){
        background-color: #1e88e5;
    }
    .navItem:nth-of-type(1) .activatedNav{
        border-right:4px solid #fdd835;
    }
    .navItem:hover:nth-child(1){
        background-color: #fdd835;
    }
    .navTitle {
        -webkit-transition: all .45s cubic-bezier(.23,1,.32,1);
        transition: all .45s cubic-bezier(.23,1,.32,1);
    }
    .navMenuInner {
        padding: 0;
    }
    .navTitle:hover .navTitle {
        color: #fff;
    }
    .navIcon {
        -webkit-transition: all .45s cubic-bezier(.23,1,.32,1);
        transition: all .45s cubic-bezier(.23,1,.32,1);
    }
    .navItem:hover .navIcon {
        color: #fff !important;
    }
    .navItem{
        -webkit-transition: all .45s cubic-bezier(.23,1,.32,1);
        transition: all .45s cubic-bezier(.23,1,.32,1);
        border-bottom: 1px solid rgba(0,0,0,.12);

    }
    .colored {
        color: #41B883;
    }
    .menuTitle > .right{
        padding: 6px;
    }
    .menuTitle {
        -webkit-flex-shrink: 0;
        -ms-flex-negative: 0;
        flex-shrink: 0;
        padding: 0;
        background-color: #fff !important;
        box-shadow: none !important;
    }
    .menuList.shrinked {
        padding-right: 0;
    }
    .menuList {
        background-colot: #fff;
        border-radius: 0 !important;
        position: fixed;
        max-width: 12.95%;
        top: 0;
        bottom: 0;
        overflow: auto;
        -webkit-transition: all .45s cubic-bezier(.23,1,.32,1);
        transition: all .45s cubic-bezier(.23,1,.32,1);
        visibility: hidden;
        z-index: 200;
    }
    .mu-drawer {
        -webkit-transform: translate3d(-77%, 0, 0) !important;
        -moz-transform: translate3d(-77%, 0, 0) !important;
        -ms-transform: translate3d(-77%, 0, 0) !important;
        -o-transform: translate3d(-77%, 0, 0) !important;
        transform: translate3d(-77%, 0, 0) !important;
        -webkit-transition: all .45s cubic-bezier(.23,1,.32,1);
        transition: all .45s cubic-bezier(.23,1,.32,1);
        visibility: inherit !important;
    }
    .mu-drawer.open {
        -webkit-transform: translateZ(0) !important;
        transform: translateZ(0) !important;
        visibility: visible !important;
    }
</style>