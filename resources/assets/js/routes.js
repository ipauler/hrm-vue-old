import VueRouter from 'vue-router';
import Home from './views/home/Home.vue';
import Users from './views/users/Users.vue';
import Employee from './views/employees/Employee.vue';
import Candidates from './views/candidates/Candidates.vue';
import Departments from './views/departments/Departments.vue';
import Projects from './views/projects/Projects.vue';
import Roles from './views/roles/Roles.vue';

let routes =[
    {
        path: '/home',
        component: Home
    },
    {
        path: '/users',
        component: Users
    },
    {
        path: '/employee',
        component: Employee
    },
    {
        path: '/candidates',
        component: Candidates
    },
    {
        path: '/departments',
        component: Departments
    },
    {
        path: '/projects',
        component: Projects
    },
    {
        path: '/roles',
        component: Roles
    }

];


export default new VueRouter({
    routes,
    linkActiveClass: 'is-active'
});