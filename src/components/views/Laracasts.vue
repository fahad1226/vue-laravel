<template>
	<div>
		<h1>Laracasts Tutorial</h1>
		<h3> {{ reversedMessage }} </h3>
		<h2>All Tasks</h2>
		<ul>
			<li v-for="task in tasks"> {{ task.description }} </li>
		</ul>

		<h2>Incomplete Tasks</h2>
		<ul>
			<li v-for="task in incompleteTasks"> {{ task.description }}
				<button @click="complteTask(task)" class="btn btn-primary btn-sm mt-2">Complete</button>
			</li>

		</ul>
		<button @click="getTools" class="btn btn-secondary btn-lg">Tools</button>
	</div>	
</template>


<script>
export default {

	data() {

		return {

			name : 'Hello world',

			tasks: [

			{ description: 'about grocersy', completed: true },
			{ description: 'about history', completed: false },
			{ description: 'about Drama', completed: false },
			{ description: 'about Series', completed: true },
			{ description: 'about Movies', completed: false },
			]
		}
	},

	computed: {
		reversedMessage() {

			return this.name.split('').reverse().join('');
		},

		incompleteTasks() {

			return this.tasks.filter(task => ! task.completed)
		}

	},

	methods: {

		complteTask(task) {

			task.completed = true

		},

		getTools() {
			axios.get('http://127.0.0.1:8000/api/tools')
			.then(response => {
				console.log(response.data)

			})

		}


	},

	mounted() {

	}

}

</script>


<style>


</style>

