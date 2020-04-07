<template>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">
			 <img v-bind:src="navbar" width="30" height="30" class="d-inline-block align-top" alt="">
    			Vue-Laravel
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<router-link :to="{ path:'/getdata' }" class="nav-link">Get Data</router-link>
					
				</li>
				<li class="nav-item">
					<router-link :to="{ path:'/postdata' }" class="nav-link">Post Data</router-link>
				</li>
				<li class="nav-item">
					<router-link :to="{ path:'/laracasts' }" class="nav-link">Laracasts</router-link>
				</li>
				
			</ul>
		</div>
	</nav>
</template>

<script>
export default {

	data() {

		return {

			navbar: '../static/assets/navbar.jpg'
		}
	}
}

</script>


<style>


</style>