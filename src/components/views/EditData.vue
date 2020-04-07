<template>
	
	<div class="row offset-3">

		<div class="col-md-6">
			
			<form @submit.prevent="updateData(items.id)">
				<h3 class="text-muted">Edit Employee Details Info</h3>
				<div class="form-group">
					<input type="text" v-model="items.f_name" class="form-control" value="text">
				</div>
				<div class="form-group">
					<input  value="fahad" type="text" v-model="items.l_name" class="form-control">
				</div>
				<div class="form-group">
					<input type="email" :placeholder="items.email" v-model="items.email" class="form-control">
				</div>
				<div class="form-group">
					<input :placeholder="items.class" type="text" v-model="items.class" class="form-control">
				</div>
				<div class="form-group">
					<input :placeholder="items.dob" type="date" v-model="items.dob" class="form-control">
				</div>
				
				<div>
					<input type="submit" value="Edit" class="btn btn-secondary">
				</div>
			</form>
		</div>
	</div>
</template>



<script>
export default {

	data() {

		return {
			f_name: '',
			l_name: '',
			email: '',
			class: '',
			dob: '',
			items: []
		}
	},
	methods: {

		updateData(id) {

			axios.post('http://127.0.0.1:8000/api/update/'+ this.$route.params.id,{

				f_name: this.f_name,
				l_name: this.l_name,
				email: this.email,
				class: this.class,
				dob: this.dob
			}).then(response => {
					console.log('edited successfully');
			})

		}
	},

	mounted() { 

		axios.get('http://127.0.0.1:8000/api/edit/'+ this.$route.params.id)
		.then(response => {
			console.log(response);
			this.items = response.data
		});
	}
};

</script>