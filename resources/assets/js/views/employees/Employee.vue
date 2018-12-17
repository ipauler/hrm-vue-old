<template>
	<div class="parentBlock">
		<div class="column is-half inline" v-for="employee, index in employees" :key="index"
			 v-if="!loading && employee.profile">
			<mu-sub-header v-if="employee.profile.name" class="headerStyle "><img class="titlePhoto"
																				  :src="'storage/'+employee.department.headed_by.image.image_path"
																				  alt="">{{employee.profile.name}} {{employee.profile.surname}}
			</mu-sub-header>
			<mu-content-block>
				<mu-select-field v-model="game1" label="Contact">
					<span v-if="employee.profile.contacts.email" class="profileName">Email:</span>
					<span v-if="employee.profile.contacts.email">{{employee.profile.contacts.email}}</span><br>
					<span else></span>
					<span v-if="employee.profile.contacts.phone" class="profileName">Phone:</span>
					<span v-if="employee.profile.contacts.phone">{{employee.profile.contacts.phone}}</span><br>
					<span else></span>
					<span v-if="employee.profile.contacts.skype" class="profileName">Skype:</span>
					<span v-if="employee.profile.contacts.skype">{{employee.profile.contacts.skype}}</span><br>
					<span else></span>
					<span v-if="employee.profile.city.name" class="profileName">City:</span>
					<span v-if="employee.profile.city.name">{{employee.profile.city.name}}</span><br>
					<span else></span>
				</mu-select-field>
				<mu-select-field v-model="game2" label="Technology">
					<span v-if="employee.profile.technology.name" class="profileName">Technology:</span>
					<span v-if="employee.profile.technology.name">{{employee.profile.technology.name}}</span><br>
					<span else></span>
					<span v-if="employee.profile.level.name" class="profileName">Level:</span>
					<span v-if="employee.profile.level.name">{{employee.profile.level.name}}</span><br>
					<span else></span>
					<span v-if="employee.profile.experience" class="profileName">Experience:</span>
					<span v-if="employee.profile.experience">{{employee.profile.experience}}</span><br>
					<span else></span>
					<span v-if="employee.department.name" class="profileName">Department:</span>
					<span v-if="employee.department.name">{{employee.department.name}}</span><br>
					<span else></span>
				</mu-select-field>
				<mu-select-field v-model="game3" label="Salary">
					<span v-if="employee.salary" class="profileName">Start salary:</span>
					<span v-if="employee.salary">{{employee.salary.start_date}}</span><br>
					<span else></span>
					<span v-if="employee.salary" class="profileName">End salary:</span>
					<span v-if="employee.salary">{{employee.salary.end_date}}</span><br>
					<span else></span>
					<span v-if="employee.salary" class="profileName">Salary:</span>
					<span v-if="employee.salary">{{employee.salary.salary}}</span><br>
					<span else></span>
					<span v-if="employee.profile.birthdate" class="profileName">Birthdate:</span>
					<span v-if="employee.profile.birthdate">{{employee.profile.birthdate}}</span>
					<span else></span>
				</mu-select-field>
			</mu-content-block>
		</div>
	</div>
</template>
<script>
    export default {
        data(){
            return {
                loading  : false,
                employees: [],
                height   : '80vh',
                game1    : [ '0' ],
                game2    : [ '1' ],
                game3    : [ '2' ]
            }
        },
        mounted() {
            this.getData();
        },
        methods: {
            getData() {
                this.loading = true;
                axios.get( '/employee/' ).then(({data}) => this.employees = data).then( () => this.loading = false)
            }
        }
    }
</script>
<style scoped>
	.titlePhoto {
		float: left;
		border-radius: 50%;
	}

	.profileName {
		font-weight: 900;
	}

	.parentBlock {
		margin-left: 15px;
	}

	.inline {
		display: inline-block;
		max-width: 340px;
		background: white;
		box-shadow: 0 2px 2px rgba(0, 0, 0, .247059), 0 2px 2px rgba(0, 0, 0, .219608);
		margin-left: 15px;
		margin-top: 15px;
		transition: all 0.5s;
	}

	.inline:hover {
		box-shadow: 0 14px 45px rgba(0, 0, 0, .247059), 0 10px 18px rgba(0, 0, 0, .219608);
	}

	.headerStyle {
		background: #43a047;
		font-size: 18px;
		font-weight: 900;
		text-align: center;

	}
</style>
