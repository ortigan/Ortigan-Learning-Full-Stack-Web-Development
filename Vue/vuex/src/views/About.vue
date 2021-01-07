<template>
  <div class="about">
    <h1>This is an about page</h1>
    <h1>Counter Value is: {{ count }}</h1>
  </div>
</template>
<script>
export default {
  data(){
    return {
      count: ''
    }
  },
  created(){
    //Way 1
    // this.count = this.$store.getters['getCounterValue']
    //Way 2
    this.count = this.$store.state.globalCounter
  }
}
</script>
