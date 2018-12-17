<template>
    <div class="column is-one-quarter">
    <mu-paper :zDepth="1" class="myPaper projectPaper">
        <div>
            <mu-icon-button v-if="!editing" icon="settings" size='15' v-on:click="editProject" class="delete-button"></mu-icon-button>
            <mu-icon-button v-if="editing" icon="done" size='15' v-on:click="saveProjectEdit(project.id)" class="delete-button"></mu-icon-button>
            <mu-icon-button v-if="editing" icon="delete" size='15' v-on:click="deleteProject(project.id)" class="delete-button"></mu-icon-button>
            <mu-icon-button v-if="editing" icon="cancel" size='15' v-on:click="closeEdit" class="delete-button"></mu-icon-button>
        </div>
        <article class="media">
            <div class="media-content">
                <div class="content">
                    <div class="project-name has-text-centered">
                        <span v-if="!editing">{{project.name}}</span>
                        <mu-text-field fullWidth :value="project.name" v-model="newProject.name"  v-else/>
                    </div>
                    <mu-badge v-if="!editing" :content="project.stage.name" primary slot="right"/>
                    <mu-select-field v-if="editing" fullWidth v-model="newProject.stage_id" :labelFocusClass="['label-foucs']" label="Stage">
                        <mu-menu-item v-for="(stage, index) in createResponse.stage" :key="index" :value="stage.id" :title="stage.name"/>
                    </mu-select-field>
                    <div class="project-desc-list has-text left">
                        <span v-if="!editing">Manager: </span> <span v-if="!editing">{{project.manager.name}}</span>
                        <mu-select-field v-if="editing" fullWidth v-model="newProject.manager_id" :labelFocusClass="['label-foucs']" label="Manager">
                            <mu-menu-item v-for="(manager, index) in createResponse.managers" :key="index" :value="manager.id" :title="manager.name"/>
                        </mu-select-field>
                    </div>
                    <div class="project-desc-list has-text left">
                        <span v-if="!editing">Department: </span> <span v-if="!editing">{{project.department.name}}</span>
                        <mu-select-field v-if="editing" fullWidth v-model="newProject.department_id" :labelFocusClass="['label-foucs']" label="Department">
                            <mu-menu-item v-for="(department, index) in createResponse.departments" :key="index" :value="department.id" :title="department.name"/>
                        </mu-select-field>
                    </div>
                    <div class="project-desc-list has-text left">
                        <span>Start Date: </span> <span v-if="!editing">{{project.started_from}}</span>  <mu-date-picker mode="landscape" okLabel="Ok" cancelLabel="Cancel" :dateTimeFormat="enDateFormat" fullWidth :value="project.started_from" v-model="newProject.started_from" v-else/>
                    </div>
                    <div class="project-desc-list has-text left">
                        <span>Dealine: </span> <span v-if="!editing">{{project.deadline}}</span><mu-date-picker mode="landscape" okLabel="Ok" cancelLabel="Cancel" :dateTimeFormat="enDateFormat" fullWidth :value="project.deadline" v-model="newProject.deadline" v-else/>
                    </div>
                    <p v-if="!editing" class="project-description">
                        {{project.description}}
                    </p>
                    <mu-text-field fullWidth multiLine :rows="3" :rowsMax="6" :maxLength="100" :value="project.description" v-model="newProject.description" v-else/>
                </div>
            </div>
        </article>
    </mu-paper>
    </div>
</template>

<style scoped>
    .project-desc-list span:first-of-type{
        font-weight: 900;
    }
    .media{
        width:100%;
    }
    .projectPaper {
        min-height: 22em;
        -webkit-transition: all .45s cubic-bezier(.23,1,.32,1);
        transition: all .45s cubic-bezier(.23,1,.32,1);
    }
    .myPaper {
        padding: 2em;
        -webkit-transition: all .45s cubic-bezier(.23,1,.32,1);
        transition: all .45s cubic-bezier(.23,1,.32,1);
    }
    .myPaper:hover {
        box-shadow: 0 14px 45px rgba(0,0,0,.247059), 0 10px 18px rgba(0,0,0,.219608);
    }
    .project-name {
        font-weight: 900;
    }
    .project-description {
        margin-top: 0.5em;
        padding-top: 1em;
        border-top: 1px solid lightgrey;
    }
    .project-name {
        text-align: center;
    }
    .delete-button {
        transition: all .25s ease-in;
        float: right;
        right: -1em;
        top: -1em;
    }
    .delete-button:hover, .delete-button:focus{

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
                createResponse: [],
                enDateFormat,
                editing: false,
                newProject: {
                    name: '',
                    description: '',
                    started_from: '',
                    deadline: '',
                    manager_id: '',
                    department_id: '',
                    stage_id: ''
                },
            }
        },
        computed: {
            isGetData(){
                return this.$store.state.getDataTriggered;
            },
        },
        props: ['project'],
        methods: {
            saveProjectEdit(projectId){
                axios.post('project/update/'+ projectId, this.newProject)
                    .then(({data}) => this.$store.state.getDataTriggered = true)
                    .then(() => this.editing = false)
                    .then(() => this.newProject = {});

            },
            closeEdit(){
                this.editing = false,
                    this.newProject = {}
            },
            editProject(){
                axios.get('/project/create')
                    .then(({data}) => this.createResponse = data)
                    .then(() => this.editing = true);
            },
            deleteProject(projectId){
                axios.post('project/delete/'+ projectId, {'id':projectId})
                    .then(({data}) => this.$store.state.getDataTriggered = true)
                    .then(() => this.editing = false);
            }
        }
    }
</script>