<template>
  <div id="app">
    <Header/>
      <router-view/> 
    <Buttom/>
    <!-- <Control/> -->
  </div>
</template>

<script>
import Header from './components/header.vue'
import Buttom from './components/buttom.vue'
// import Control from '@/components/control.vue'

export default {
  name: 'App',
  components: {
    Header,
    Buttom, 
    // Control
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
html{
  scroll-behavior: smooth;
}
body{
  position: relative;
  height: 100%;
  width: 100%;
  margin: 0 auto;
  // background: linear-gradient(0deg, #FFAFBD 0%, #ffc3a0 50%, rgba(255,255,255,1) 60%);
}
</style>

