<template>
    <div>
        <div class="columns is-10" v-if="!loading">
                <div class="column">
                   <toolbar :className="'greenBar'" :title="'Departments in total'" v-bind:counter="departments.length" :iconName="'group_work'"></toolbar>
                </div>
                <div class="column">
                    <toolbar :className="'orangeBar'" :title="'Employees'" v-bind:counter="30" :iconName="'account_circle'"></toolbar>
                </div>
                <div class="column">
                    <toolbar :className="'blueBar'" :title="'Something else'" v-bind:counter="44" :iconName="'android'"></toolbar>
                </div>
                <div class="column">
                    <toolbar :className="'fogBar'" :title="'One more thing'" v-bind:counter="55" :iconName="'assignment'"></toolbar>
                </div>
        </div>
        <div class="columns">
            <div class="column">
                <mu-float-button icon="view_week" v-on:click="comparison"/>
            </div>
        </div>
        <div class="columns depCardsGrid">
            <div class="column transited" :class="{'is-12': !checkIfCurDep, 'is-6': !this.$store.state.depCompare, 'is-4': this.$store.state.depCompare}">
                <div class="columns depGrid cardDep">
                    <div class="cardHeader">
                        <span>Departments</span>
                    </div>
                    <department-card v-for="(department, index) in departments" :key="index" :department="department"></department-card>
                </div>
            </div>
            <div class="column transited" :class="{'is-6': !this.$store.state.depCompare, 'is-4': this.$store.state.depCompare}">
                <department-compare v-show="checkIfCurDep"></department-compare>
            </div>
            <div class="column transited" :class="{'is-4': this.$store.state.depCompare}">
                <department-compare v-show="this.$store.state.depCompare"></department-compare>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        data(){
            return {
                loading: true,
                isInView: this.checkIfCurDep,
                compare: this.$store.state.depCompare,
                currentDepartment: this.$store.state.departmentView,
                departments: [],
                newDepartment: {},
                isSortable: false
            }
        },
        mounted() {
            console.log(this.checkIfCurDep);
            axios.get('/department/').then(({data}) => this.departments = data).then(() => this.loading = false);
        },
        methods: {
            comparison: function () {
                this.$store.state.depCompare = !this.$store.state.depCompare;
            }
        },
        computed: {
            getCurrentDep() {
                return this.$store.state.departmentView;
            },
            getCompareStatus(){
                return this.$store.state.depCompare
            },
            checkIfCurDep(){
                if(Object.keys(this.getCurrentDep).length > 0){
                    return true;
                }else {
                    return false;
                }

            },
        }
    }
</script>
<style scoped>
    .depCardsGrid {
        padding: 2em;
    }
    .cardHeader {
        border-bottom: 1px solid #dfe8f1;
        padding: 1em;
        width: 100%;
        color: rgb(51, 51, 51);
        text-transform: uppercase;
        font-size: 1.5em;
    }
    .transited {
        -webkit-transition: all .45s cubic-bezier(.23,1,.32,1);
        transition: all .45s cubic-bezier(.23,1,.32,1);
    }
    .depGrid {
        flex-direction: column;
        flex-flow: row wrap;
        justify-content: space-around;
        margin: 0;
    }
    .cardDep {
        background-color: #fff;
        border-radius: 4px;
        padding: 0.5em;
        border: 1px solid #dfe8f1;
    }
</style>