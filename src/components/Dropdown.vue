<template>
	<div>
		<h2>Dropdown menues</h2>
		<select name="dropdown" v-on:change="optionChanged">
			<option value="0">Value 1</option>
			<option value="1">Value 2</option>
			<option value="2">Value 3</option>
			<option value="3">Value 4</option>
		</select>
	</div>
</template>


<script>
	export default {

		data() {

			return {


			}
		},

		methods: {

			optionChanged() {

				this.$emit('updateOption',value)
			}
		}
	}

</script>


<style>
	

</style>