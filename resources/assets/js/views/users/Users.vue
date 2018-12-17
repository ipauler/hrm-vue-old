


<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">All Users</div>
                </div>
            </div>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th>Email</th>
                    <th>Name</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
                </tfoot>
                <tbody>
                <tr v-for="user in users">
                    <!--<th>{{key}}</th>-->
                    <td><a href="">{{user.email}}</a></td>
                    <td>{{user.name}}</td>
                    <td>{{user.created_at}}</td>
                    <td>{{user.updated_at}}</td>
                    <!--{{key++;}}-->
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
                users: []
//                key: 1
            }
        },
        created() {
            axios.get('/user/').then(({data}) => this.users = data);

        },
        methods: {
            onDrop: function(ev) {
                console.log(ev.target);
            }
        }
    }
</script>
