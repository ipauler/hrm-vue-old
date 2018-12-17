<template>
    <div class="wrapper">
        <div class="toolBar" :class="className">
            <div class="toolBarTitle">
                <span>{{title}}</span>
            </div>
            <div class="toolBarBody">
                <i class="material-icons">{{iconName}}</i>
                <span>{{animatedNumber}}</span>
            </div>
            </div>
        </div>
    </div>
</template>


<style scoped>
    .toolBar.orangeBar:hover{
        background: #ff6c46;
        background: -webkit-linear-gradient(to right, #ffb34f, #ff7049);
        background: linear-gradient(to right, #ffb44f, #ff6e47);
        -webkit-transition: all .45s cubic-bezier(.23,1,.32,1);
    }
    .toolBar.blueBar:hover{
        background: #808080;
        background: -webkit-linear-gradient(to right, #4191d7, #737373);
        background: linear-gradient(to right, #458dd7, #737373);
    }
    .toolBar.fogBar:hover{
        background: #cda5eb;
        background: -webkit-linear-gradient(to right, #98b4eb, #caa2e8);
        background: linear-gradient(to right, #9bb7ec, #cfa9ed);
        -webkit-transition: all .45s cubic-bezier(.23,1,.32,1);
    }
    .toolBar.greenBar:hover{
        background: #95e25e;
        background: -webkit-linear-gradient(to right, #9ed67e, #8bd459);
        background: linear-gradient(to right, #9cd67d, #8edb60);
    }
    .fogBar {
        background: #B993D6;
        background: -webkit-linear-gradient(to right, #8CA6DB, #B993D6);
        background: linear-gradient(to right, #8CA6DB, #B993D6);
         -webkit-transition: all .45s cubic-bezier(.23,1,.32,1);
        transition: all .45s cubic-bezier(.23,1,.32,1);

    }
    .blueBar {
        background: #525252;
        background: -webkit-linear-gradient(to right, #3d72b4, #525252);
        background: linear-gradient(to right, #3d72b4, #525252);
         -webkit-transition: all .45s cubic-bezier(.23,1,.32,1);
        transition: all .45s cubic-bezier(.23,1,.32,1);

    }
    .orangeBar {
        background: #e96a44;
        background: -webkit-linear-gradient(to right, #e49f48, #ea6b45);
        background: linear-gradient(to right, #e49e49, #ea6a44);
         -webkit-transition: all .45s cubic-bezier(.23,1,.32,1);
        transition: all .45s cubic-bezier(.23,1,.32,1);
    }
    .greenBar {
        background: #76b852;
        background: -webkit-linear-gradient(to right, #8DC26F, #76b852);
        background: linear-gradient(to right, #8DC26F, #76b852);
         -webkit-transition: all .45s cubic-bezier(.23,1,.32,1);
        transition: all .45s cubic-bezier(.23,1,.32,1);

    }
    .toolBarBody span {
        float: right;
        color: #fff;
        font-size: 3em;
        font-weight: 900;
    }
    .toolBarBody i{
        float: left;
        color: rgba(251, 249, 255, 0.31);
        font-size: 5em;
        padding: 0.1em;
    }
    .toolBarBody{
        padding: 0 1em  2em 0;
    }
    .toolBarTitle{
        background-color: rgba(0,0,0,.1);
        text-align: left;
        color: #fff;
        width: 100%;
        font-size: 1em;
        padding: 1em;
        font-weight: 900;
        text-transform: uppercase;
    }
    .toolBar {
        cursor: pointer;
        min-height: 4em;
        overflow: hidden;
        -webkit-border-radius:6px;
        -moz-border-radius:6px;
        border-radius:4px;
        box-shadow: 0 1px 6px rgba(0,0,0,.117647), 0 1px 4px rgba(0,0,0,.117647);
        -webkit-transition: all .45s cubic-bezier(.23,1,.32,1);
        transition: all .45s cubic-bezier(.23,1,.32,1);
    }
   .wrapper {
       padding: 1em;
   }
</style>

<script>
    var TWEEN = require('tween.js');
    export default {
        data(){
            return {
                animatedNumber: 0
            }
        },
        props: ['className', 'iconName', 'counter', 'title'],
        methods: {
            animateCounter: function(newValue, oldValue) {
                function animate () {
                    if (TWEEN.update()) {
                        requestAnimationFrame(animate)
                    }
                }
                    var vm = this;
                    new TWEEN.Tween({ tweeningNumber: oldValue })
                    .easing(TWEEN.Easing.Quadratic.Out)
                    .to({ tweeningNumber: newValue }, 1500)
                    .onUpdate(function () {
                        vm.animatedNumber = this.tweeningNumber.toFixed(0)
                    })
                    .start();
                    animate()
            }
        },
        watch: {

        },
        mounted(){
            this.animateCounter(this.counter, 0)
        },
        computed: {

        }
    }
</script>