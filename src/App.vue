<template>
  <div id="app">
    <navbar></navbar>
    <div class="container">
      <router-view></router-view>  
    </div>
    
  </div>
</template>

<script>
import Navbar from './components/views/Navbar/Navbar'
import Getdata from './components/views/Getdata'
import Postdata from './components/views/Postdata'

export default {
	
  components: {
  	Navbar,
    Getdata,
    Postdata
   
  }
}
</script>

<style>

</style>
