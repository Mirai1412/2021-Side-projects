<template>
  <div id="app">
    <Header/>
      <router-view/> 
    <Buttom/>

  </div>
</template>

<script>
import Header from './components/header.vue'
import Buttom from './components/buttom.vue'


export default {
  name: 'App',
  components: {
    Header,
    Buttom,
  }
}
</script>

<style>
#app{
  width: 100%;
  margin: 0 auto;
}
</style>
<style lang="scss">
body{
  width: 100%;
  margin: 0 auto;
  
}
</style>

