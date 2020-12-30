<template>
  <div id="app">
    <!-- <List/> -->
    <!-- <Cart/> -->
    <Users/>
  </div>
</template>

<script>
// import List from './components/List.vue'
// import Cart from './components/Cart'
import Users from './components/Users'

export default {
  name: 'App',
  components: {
    // List,
    // Cart
    Users
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
