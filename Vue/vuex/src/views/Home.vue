<template>
  <div class="home">
    <img alt="Vue logo" src="../assets/logo.png">
    <center>
      <button @click="increment()">Click Me</button>
      <button @click="resetValue()">Reset</button>
      <div>
        <h1>Count: {{ counter }}</h1>
        <h1>Value of Count From Global Store: {{ getCounterValueFromStore }}</h1>
      </div>
    </center>
  </div>
</template>

<script>
// @ is an alias to /src

export default {
  name: 'Home',
  components: {
  },
  data(){
      return{
        counter: 0
      }
    },
    computed:{
      getCounterValueFromStore() {
        return this.$store.getters['getCounterValue'];
      }
    },
    created(){
      this.counter = this.$store.state.globalCounter
    },
  methods:{
    increment(){
      this.counter++;
      //Data store in global vuex store
      //1.Whenever we need to add something in our store we 
      //must write a mutation function
      //2. To store data we store it using commit
      // console.log(this.$store)
      this.$store.commit('ADD_COUNTER', this.counter)
    },
    resetValue(){
      this.counter = 0
      this.$store.commit('RESET_COUNTER')
    }
  }
}
</script>
