<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">All Candidates</div>
                </div>
            </div>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>City</th>
                    <th>Birthdate</th>
                    <th>Technology</th>
                    <th>Skill Level</th>
                    <th>Experience</th>
                    <th>Salary</th>
                    <th>Department</th>
                    <th>Start Working</th>
                    <th>Comments</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>City</th>
                    <th>Birthdate</th>
                    <th>Technology</th>
                    <th>Skill Level</th>
                    <th>Experience</th>
                    <th>Salary</th>
                    <th>Department</th>
                    <th>Start Working</th>
                    <th>Comments</th>
                </tr>
                </tfoot>
                <tbody>
                <tr v-for="candidate in candidates">
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                candidates: []
            }
        },
        created() {
            axios.get('/candidate/').then(({data}) => this.candidates = data);
        }
    }
</script>
