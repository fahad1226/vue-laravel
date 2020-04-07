<template>
	<div>
		
		<div class="row">
			<div class="col-md-6 offset-3">
				<form method="post" @submit.prevent="onSubmit">
					<h2 class="display-4">Fill-Up The Form</h2>

					<div class="form-group">
						<input type="text" placeholder="First Name" name="f_name" v-model="f_name" class="form-control">
						<!-- <span :class="{'text-danger' : error}" v-text="txt"></span> -->
					</div>


					<div class="form-group">
						<input type="text" name="l_name" v-model="l_name" placeholder="Last Name" class="form-control">
						<!-- <span :class="{'text-danger' : error}" v-text="txt"></span> -->
					</div>


					<div class="form-group">
						<input type="email" placeholder="Email" name="email" v-model="email" class="form-control">
					</div>


					<div class="form-group">
						<input type="text" placeholder="Class" name="class" v-model="cls" class="form-control">
					</div>


					<div class="form-group">
						<input type="date" placeholder="Date Of Birth" name="dob" v-model="dob" class="form-control">
					</div>


					<div>
						<input type="submit" value="Submit" class="btn btn-secondary">
					</div>


				</form>
			</div>
		</div>
	</div>
</template>

<script>

/*
class Errors {

	constructor() {

		this.errors = {};
	}

	get(field) {

		if (this.errors[field]) {
			console.log(this.errors[field][0]);
			return this.errors[field][0];

		}
	}
 
	record(errors) {

		this.errors = errors;
	}
} 
*/

export default {

	data() {

		return {

			f_name: '',
			l_name: '',
			email: '',
			cls: '',
			dob: '',
			//errors: new Errors()
			infos: []
			// errors : false,
			// txt: ''
			
		}
	},

	methods: {

		onSubmit() {

			const baseURL = 'http://127.0.0.1:8000/api/store'
			axios.post(baseURL,{

				f_name: this.f_name,
				l_name: this.l_name,
				email: this.email,
				cls: this.cls,
				dob: this.dob

			});
		}

	}

}


</script>


<style>


</style>



