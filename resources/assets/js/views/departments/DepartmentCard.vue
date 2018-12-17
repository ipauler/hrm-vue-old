<template>
    <div class="wrapper column departmentCard is-4" @click="activate">
        <div class="myPaper" :class="{active: getCurrentDep == department.id}">
            <div class="depCardHeader" :class="classObject"></div>
            <div class="cardBody">
                <span>{{department.name}}</span>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        data(){
            return {
                classes: ['greenHeader', 'fogHeader', 'orangeHeader', 'blueHeader']
            }
        },
        props: ['department'],
        methods: {
            activate() {
                this.$store.state.departmentView = this.department
            }
        },
        computed: {
            classObject(){
                var newClass = this.classes[Math.floor(Math.random()*this.classes.length)];
              return   newClass
            },
            getCurrentDep() {
                return this.$store.state.departmentView.id;
            },
            getCompareStatus(){
                return this.$store.state.depCompare
            }
        }
    }
</script>
<style scoped>
    .myPaper:hover .depCardHeader, .myPaper.active .depCardHeader{
        opacity: 1;
    }
    .myPaper.active .cardBody{
        color: #333333;
    }
    .cardBody:hover {
        color: #333333;
    }
    .cardBody {
        padding: 1em;
        text-transform: uppercase;
        font-weight: 900;
        background-color: rgb(241, 241, 241);
        color: rgba(51, 51, 51, 0.47);
        -webkit-transition: all .45s cubic-bezier(.23,1,.32,1);
        transition: all .45s cubic-bezier(.23,1,.32,1);
    }
    .greenHeader {
        background: #76b852;
        background: -webkit-linear-gradient(to right, #8DC26F, #76b852);
        background: linear-gradient(to right, #8DC26F, #76b852);

    }
    .fogHeader {
        background: #B993D6;
        background: -webkit-linear-gradient(to right, #8CA6DB, #B993D6);
        background: linear-gradient(to right, #8CA6DB, #B993D6);

    }
    .orangeHeader {
        background: #e96a44;
        background: -webkit-linear-gradient(to right, #e49f48, #ea6b45);
        background: linear-gradient(to right, #e49e49, #ea6a44);

    }
    .blueHeader {
        background: #525252;
        background: -webkit-linear-gradient(to right, #3d72b4, #525252);
        background: linear-gradient(to right, #3d72b4, #525252);

    }
    .departmentCard {
        -webkit-transition: all .45s cubic-bezier(.23,1,.32,1);
        transition: all .45s cubic-bezier(.23,1,.32,1);
    }
    .cardDescElement {
        margin-top: 2em;
    }
    .cardDescElement span {
        font-size: 1.2em;
        display: block;
        line-height: 1.2;
        color: #424242;
    }
    .cardDescElement small{
        font-size: 85%;
        color: rgba(0, 0, 0, 0.3);
    }
    .active{
        box-shadow: 0 7px 30px rgba(0,0,0,.147059), 0 5px 9px rgba(0,0,0,.119608);
    }
    .myPaper {
        overflow: hidden;
        background-color: #fff;
        border-radius: 4px;
        border: 1px solid #dfe8f1;
        -webkit-transition: all .45s cubic-bezier(.23,1,.32,1);
        transition: all .45s cubic-bezier(.23,1,.32,1);
    }
    .myPaper:hover, .myPaper.active{
        box-shadow: 0 7px 30px rgba(0,0,0,.147059), 0 5px 9px rgba(0,0,0,.119608);
    }
    .depCardDetailsButton i {
        font-size: 3em;
    }
    .depCardHeader {
        text-align: center;
        font-weight: 900;
        font-size: 1em;
        color: #333333;
        height: 5px;
        width: 100%;
        opacity: 0.4;
        -webkit-transition: all .45s cubic-bezier(.23,1,.32,1);
        transition: all .45s cubic-bezier(.23,1,.32,1);
    }

    .wrapper {
        /*position: relative;*/
        cursor: pointer;
    }

</style>