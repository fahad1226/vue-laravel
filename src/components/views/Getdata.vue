<template>
	<div>
		<h1>Get data</h1>
		<table class="table table-dark">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">First Name</th>
					<th scope="col">Last Name</th>
					<th scope="col">Email</th>
					<th scope="col">Class</th>
					<th scope="col">Date Of Birth</th>
					<th scope="col">Actions</th>
					
				</tr>
			</thead>
			<tbody>
				<tr v-for="item in items":key="index">
					<th scope="row"> {{ item.id }} </th>
					<td> {{ item.f_name }} </td>
					<td> {{ item.l_name }} </td>
					<td> {{ item.email }} </td>
					<td> {{ item.class }} </td>
					<td> {{ item.dob }} </td>
					<router-link :to="{ path: '/edit/'+item.id }">
						<span>Edit</span>
					</router-link>
					<td class="btn btn-danger">Delete</td>
				</tr>
			</tbody>
		</table>
	</div>
</template>


<script>


export default {
	data() {

		return {
			items : null,
		}
	},

	mounted: function() {
		const baseURI = 'http://127.0.0.1:8000/api/employee'
		axios.get(baseURI)
		.then(response => {
			console.log(response)
			this.items = response.data
			
		}).catch(error => {
			console.log(error)
		}).finally(console.log('data loaded complete'));
	}

};
</script>


<style>


</style>