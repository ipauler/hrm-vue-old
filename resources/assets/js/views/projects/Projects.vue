<template>
<div>
    <!--<chart></chart>-->
    <div class="column is-one-third">
        <mu-paper :zDepth="1" class="searchBox myPaper">
            <mu-text-field fullWidth :hintText="searchHint" v-model="query" class="demo-radio"/><br/>
                <mu-radio label="Name" name="group" nativeValue="1" v-model="selected" class="demo-radio"/>
                <mu-radio label="Manager" name="group" nativeValue="2" v-model="selected" class="demo-radio"/>
                <mu-radio label="Department" name="group" nativeValue="3" v-model="selected" class="demo-radio"/>
                <mu-radio label="Stage" name="group" nativeValue="4" v-model="selected" class="demo-radio"/>
                <mu-radio label="Deadline" name="group" nativeValue="5" v-model="selected" class="demo-radio"/>
                <mu-radio label="Start Date" name="group" nativeValue="6" v-model="selected" class="demo-radio"/>
        </mu-paper>
    </div>
    <div class="column is-one-column">
        <mu-float-button icon="add" v-on:click="open"/>
    </div>
    <div class="column is-full">
        <draggable v-model="projects" :options="{group: {name: 'shared', pull: 'clone', revertClone: true },animation: 200, sort: true}">
                <project-card v-for="(project, index) in projectsComputed" class="list-complete-item"  :key="project.name" :data-index="index" :project="project"></project-card>
        </draggable>
    </div>
    <mu-dialog :open="addProjectDialog" title="Add New Project" @close="close">
        <mu-row>
            <mu-col width="50" desktop="50" class="inputDiv">
                <mu-text-field fullWidth label="Project Name"  v-model="newProject.name" hintText="..."/>
            </mu-col>
            <mu-col width="50" desktop="50" class="inputDiv">
                <mu-text-field fullWidth label="Project Description"  v-model="newProject.description" hintText="..."/>
            </mu-col>
            <mu-col width="50" desktop="50" class="inputDiv">
                <mu-date-picker mode="landscape" okLabel="Ok" cancelLabel="Cancel" :dateTimeFormat="enDateFormat" fullWidth label="Start Date" v-model="newProject.started_from" hintText="..."/>
            </mu-col>
            <mu-col width="50" desktop="50" class="inputDiv">
                <mu-date-picker mode="landscape" okLabel="Ok" cancelLabel="Cancel" :dateTimeFormat="enDateFormat" fullWidth label="Start Date" v-model="newProject.deadline" hintText="..."/>
            </mu-col>
            <mu-col width="50" desktop="50" class="inputDiv">
                <mu-select-field fullWidth v-model="newProject.manager_id" :labelFocusClass="['label-foucs']" label="Manager">
                    <mu-menu-item v-for="(manager, index) in createResponse.managers" :key="index" :value="manager.id" :title="manager.name"/>
                </mu-select-field>
            </mu-col>
            <mu-col width="50" desktop="50" class="inputDiv">
                <mu-select-field fullWidth v-model="newProject.department_id" :labelFocusClass="['label-foucs']" label="Department">
                    <mu-menu-item v-for="(department, index) in createResponse.departments" :key="index" :value="department.id" :title="department.name"/>
                </mu-select-field>
            </mu-col>
            <mu-col width="50" desktop="50" class="inputDiv">
                <mu-select-field fullWidth v-model="newProject.stage_id" :labelFocusClass="['label-foucs']" label="Stage">
                    <mu-menu-item v-for="(stage, index) in createResponse.stage" :key="index" :value="stage.id" :title="stage.name"/>
                </mu-select-field>
            </mu-col>
        </mu-row>
        <mu-flat-button slot="actions" @click="createProject" primary label="Save"/>
        <mu-flat-button slot="actions" primary @click="close" label="Close"/>
    </mu-dialog>
</div>
</template>
<style scoped>
    .inputDiv {
        padding: 0.5em;
    }
    .myPaper {
        padding: 2em;
        -webkit-transition: all .45s cubic-bezier(.23,1,.32,1);
        transition: all .45s cubic-bezier(.23,1,.32,1);
    }
    .myPaper:hover {
        box-shadow: 0 14px 45px rgba(0,0,0,.247059), 0 10px 18px rgba(0,0,0,.219608);
    }
    .demo-radio {
        min-width: 8em;
    }
    .searchBox {
        padding: 2em;
    }
    .column{
        display: inline-block;
        padding: 1em;
    }
    .list-complete-item {
        transition: all 1s;
    }
    .list-complete-enter, .list-complete-leave-active {
        opacity: 0;
    }
</style>
<script >
    const dayAbbreviation = ['S', 'M', 'T', 'W', 'T', 'F', 'S']
    const dayList = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
    const monthList = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep',
        'Oct', 'Nov', 'Dec']
    const monthLongList = ['January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December']
    const enDateFormat = {
        formatDisplay (date) {
            return `${dayList[date.getDay()]}, ${monthList[date.getMonth()]} ${date.getDate()}`
        },
        formatMonth (date) {
            return `${monthLongList[date.getMonth()]} ${date.getFullYear()}`
        },
        getWeekDayArray (firstDayOfWeek) {
            let beforeArray = []
            let afterArray = []
            for (let i = 0; i < dayAbbreviation.length; i++) {
                if (i < firstDayOfWeek) {
                    afterArray.push(dayAbbreviation[i])
                } else {
                    beforeArray.push(dayAbbreviation[i])
                }
            }
            return beforeArray.concat(afterArray)
        }
    }
    export default {
        data(){
            return {
                enDateFormat,
                loading: false,
                addProjectDialog: false,
                modal: 'modal',
                getDataTrigger: false,
                editing: false,
                searchHint: 'Search by ...',
                activeClass: 'is-active',
                query: "",
                selected: "",
                projects: [],
                createResponse: [],
                newProject: {
                    name: '',
                    description: '',
                    started_from: '',
                    deadline: '',
                    manager_id: '',
                    department_id: '',
                    stage_id: ''
                }
            }
        },
        options: {
            segmentShowStroke: false
        },
        mounted() {
            this.getData();
        },
        computed: {
            storage(){
                this.getDataTrigger = this.$store.state.getDataTriggered;
                return this.getDataTrigger;
            },
            projectsComputed: function () {
               var vm = this;
               if(this.selected == '1' || this.selected == ""){
                   this.searchHint = "Search by Name";
                   return this.projects.filter(function (project) {
                       return project.name.toLowerCase().indexOf(vm.query.toLowerCase()) !== -1;
                   })
               }else if(this.selected == '2'){
                   this.searchHint = "Search by Manager";
                   return this.projects.filter(function (project) {
                       return project.manager.name.toLowerCase().indexOf(vm.query.toLowerCase()) !== -1;
                   })
               }else if(this.selected == '3'){
                   this.searchHint = "Search by Department";
                   return this.projects.filter(function (project) {
                       return project.department.name.toLowerCase().indexOf(vm.query.toLowerCase()) !== -1;
                   })
               }else if(this.selected == '4'){
                   this.searchHint = "Search by Stage";
                   return this.projects.filter(function (project) {
                       return project.stage.name.toLowerCase().indexOf(vm.query.toLowerCase()) !== -1;
                   })
               }else if(this.selected == '5'){
                   this.searchHint = "Search by Deadline";
                   return this.projects.filter(function (project) {
                       return project.deadline.toLowerCase().indexOf(vm.query.toLowerCase()) !== -1;
                   })
               }else if(this.selected == '6'){
                   this.searchHint = "Search by Start Date";
                   return this.projects.filter(function (project) {
                       return project.started_from.toLowerCase().indexOf(vm.query.toLowerCase()) !== -1;
                   })
               }
            }
        },
        watch:{
            getDataTrigger: function () {
                this.getData();
            }
        },
        methods: {
            saveProjectEdit(){
                this.editing = false;
            },
            editProject(){
              this.editing = true;
            },
            getData() {
                this.loading = true;
                axios.get('/project/').then(({data}) => this.projects = data).then(() => this.loading = false).then(() => this.$store.state.getDataTriggered = false)
            },
            open () {
                axios.get('/project/create').then(({data}) => this.createResponse = data).then(() => console.log(this.createResponse), this.addProjectDialog = true);

            },
            close () {
                this.newProject = {},
                this.addProjectDialog = false
            },
            createProject() {
               axios.post('project/store', this.newProject)
                   .then(({data}) => this.getData())
                   .then(() => this.addProjectDialog = false)
                   .then(()=> this.newProject = {});
//                console.log(this.newProject)
            },
        }
    }
</script>
