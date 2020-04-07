<template>
	
	<div >
		<h1 :class="classObject">Error</h1>
		<h2 :style="{ fontSize: (value * 5) + 'px' }"> {{ value }} </h2>
		<button type="button" @click="value++">+</button>
		<button type="button" @click="value--">-</button>
		<button @click="error = ! error">Click</button>
		<button type="button" @click="warning = ! warning">Warning</button>
		<button type="button" @click="bold = ! bold">Bold Text</button>
	</div>

</template>


<script>
	export default {

		data() {

			return {

				error: false,
				warning: false,
				bold: false,
				value: 1
			}
		},

		computed: {

			classObject() {

				return {

					'red-error' : this.value > 5 || this.value < 0, 
					'yellow-warning' : this.warning ,
					'font-weight-bold' : this.bold 
				}
				
			}
		}
	}

</script>

<style>
	
	.red-error {

		background-color: darkred;
	}
	.yellow-warning {

		text-decoration : underline
	}
	.bold-text {

		font-style : bold
	}

</style>
