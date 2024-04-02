<template>
  <div id="App">
    <NavBar/>
    <RouterView></RouterView>
    <FooterContent/>
  </div>
</template>

<script>
import NavBar from './components/NavBar.vue'; 
import FooterContent from './components/FooterContent.vue';


export default {
  components: {
    NavBar, 
    FooterContent,
    
  },
}  
</script>

<style>
/* Your existing styles */
</style>