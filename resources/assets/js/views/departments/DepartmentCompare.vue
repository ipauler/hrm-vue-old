<template>
    <div class="compareCard">
        <div class="depCardHeader" :class="classObject"></div>
        <div class="cardHeader">
            <span>{{getDep.name}}</span>
        </div>
        <div class="cardBody">
            <div class="depDescription">
                <div class="stats">
                    <div class="stat left">
                        <span>Members</span></br>
                        <span>{{getDep.staff.length}}</span>
                    </div>
                    <div class="stat right">
                        <span>Headed By</span></br>
                        <span>{{getDep.headed_by.name + ' ' + getDep.headed_by.surname}}</span>
                    </div>
                </div>
                <div class="descDep">
                    <div class="descTitle">
                        <span>Description</span>
                    </div>
                    <p>{{getDep.description}}</p>
                </div>
                    <div class="depStaff columns">
                        <div class="column is-4" v-for="member in getDep.staff">
                            <div class="staffWrapper ">
                                <img :src="'storage/'+member.profile.image.image_path" alt="">
                                <span>{{member.profile.name + ' ' + member.profile.surname}}</span>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>



    <!--<mu-paper :zDepth="1" class="wrapper myPaper">-->
        <!--<transition name="slide-fade">-->
        <!--<div v-if="Object.keys(getCurrentDep).length != 0">-->
            <!--<div class="titleCompare">-->
                <!--<span>{{getCurrentDep.name}}</span>-->
            <!--</div>-->
            <!--<div class="descriptionCompare">-->
                <!--<span>Description: </span>-->
                <!--<p>{{getCurrentDep.description}}</p>-->
            <!--</div>-->
            <!--<div class="staffCompare">-->
                <!--<span>Staff: </span>-->
                <!--<ul>-->
                    <!--<li v-for="member in getCurrentDep.staff">-->
                        <!--<img :src="'storage/'+member.profile.image.image_path" alt="">-->
                        <!--<span>{{member.profile.name + ' ' +member.profile.surname}}</span>-->
                        <!--<mu-icon value="info" class="headedByIcon"></mu-icon> <mu-icon value="chat_bubble" class="headedByIcon"></mu-icon>-->
                    <!--</li>-->
                <!--</ul>-->
            <!--</div>-->
        <!--</div>-->
        <!--</transition>-->
        <!--<div v-if="Object.keys(getCurrentDep).length = 0">-->
            <!--<img src="storage/dragDepartment.png" alt="">-->
        <!--</div>-->
    <!--</mu-paper>-->
</template>

<script>
    export default {
        data(){
            return {
                classes: ['greenHeader', 'fogHeader', 'orangeHeader', 'blueHeader']
            }
        },
        props: [''],
        methods: {

        },
        computed: {
            classObject(){
                var newClass = this.classes[Math.floor(Math.random()*this.classes.length)];
                return   newClass
            },
            getDep() {
                return this.$store.state.departmentView;
            }
        }
    }
</script>
<style scoped>
    .staffWrapper span {
        margin-left: 5px;
        font-weight: 900;
    }
    .staffWrapper img {
        border-radius: 50%;
        height: 4em;
        width: 4em;
        opacity: .9;
    }
    .staffWrapper {
        padding: 1em;
        border: 1px solid #dfe8f1;
        border-radius: 4px;
    }
    .depStaff {
        padding: 1em;
        flex-direction: column;
        flex-flow: row wrap;
        justify-content: space-around;
        margin: 0;
    }
    .descDep {
        margin-bottom: 1em;
    }
    .stat span:first-of-type{
        color: rgba(51, 51, 51, 0.44);
        font-size: 1em;
    }
    .stat span:last-of-type{
        color: rgb(51, 51, 51);
        font-size: 1.3em;
    }
    .stat.left {
        text-align: center;
    }
    .stat.right {
        float: right;
        text-align: center;
    }
    .stats .stat {
        display: inline-block;
    }
    .stats {
        margin-bottom: 1em;
    }
    .descTitle {
        font-size: 1.2em;
        text-transform: uppercase;
        color: rgba(51, 51, 51, 0.24);
        font-weight: 900;
        border-bottom: 1px solid rgba(51, 51, 51, 0.11);
        margin-bottom: 1em;
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
    .depCardHeader {
        text-align: center;
        font-weight: 900;
        font-size: 1em;
        color: #333333;
        height: 10px;
        width: 100%;
        -webkit-transition: all .45s cubic-bezier(.23,1,.32,1);
        transition: all .45s cubic-bezier(.23,1,.32,1);
    }
    .depDescription {
        padding: 1em;
    }
    .compareCard {
        background-color: #fff;
        border-radius: 4px;
        border: 1px solid #dfe8f1;
        overflow: hidden;
    }
    .cardHeader {
        border-bottom: 1px solid #dfe8f1;
        padding: 1em;
        color: rgb(51, 51, 51);
        text-transform: uppercase;
        font-size: 1.5em;
        width: 97%;
        margin: 0 auto;
    }
</style>