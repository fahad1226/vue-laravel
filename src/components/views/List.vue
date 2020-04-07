<template>
	<div>
		<h2>List OF Items</h2>
		<dropdown @updateOption="optionUpdate"></dropdown>
		<getdata></getdata>
	</div>
</template>


<script>

import Dropdown from '../Dropdown'
import Getdata from './Getdata'
	export default {

		components: {

			Dropdown,
			Getdata
		},

		data() {

			return {


			}
		},

		mounted: {

			props: ['value']
		},

		methods: {

			optionUpdate(value) {

				console.log(value)
			}
		}
	}

</script>


<style>
	

</style>