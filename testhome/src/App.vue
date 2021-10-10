<template>
  <div id="app">
    <Header/>
    <HOME/>
    <Buttom/>
  </div>
</template>

<script>
import Header from './components/header.vue'
import HOME from './components/home.vue'
import Buttom from './components/buttom.vue'

export default {
  name: 'App',
  components: {
    HOME,
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
