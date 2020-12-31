<template>
  <div class="container mt-4">
      <h1>Hello User {{ userID }}</h1>
      <h2>Yo! {{ user.first_name + ' ' + user.last_name + ':)'}}</h2>
      <img :src="user.avatar" alt="">
  </div>
</template>

<script>
import axios from 'axios'

export default {
    data(){
        return{
            userID: '',
            user: ''
        }
    },
    created(){
        //To get the dynamic id from the URL
        this.userID = this.$route.params.id
        // console.log(this.$route.params.id)
        axios.get(`https://reqres.in/api/users/${this.userID}`)
            .then(response => {
                console.log(response)
                this.user = response.data.data
            })
            .catch(err => {
                console.log(err)
            })
    }
}
</script>

<style>

</style>