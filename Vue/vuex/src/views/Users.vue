<template>
  <div>
    <h2>{{ usersCount }}</h2>
    <b-container class="bv-example-row">
      <div class="row">
        <div class="col-4" v-for="(user, index) in users" :key="index">
          <b-card
            :title="user.first_name +' ' + user.last_name"
            :img-src="user.avatar"
            img-alt="Image"
            img-top
            tag="article"
            style="max-width: 20rem;"
            class="mb-2"
          >
            <b-card-text>
                {{ user.id }} |  
                {{ user.email }}
                <router-link :to="`/users/${user.id}`">
                    <b-button variant="outline-primary">View Profile</b-button>
                </router-link>
            </b-card-text>
          </b-card>
        </div>
      </div>
    </b-container>
  </div>
</template>

<script>
// import axios from 'axios'
export default {
    data(){
        return {
            users: [],
            usersCount: ''
        }
    },
    created(){
        this.getUsers()
    },
    methods:{
        getUsers(){
            //Call API from Actions
            this.$store.dispatch('getAllUsers')
            .then(res => {
                this.users = res
            })
            .catch(err => {
                console.log(err)
            })
        },
        
        delete(){
            this.$store.dispatch('deleteUser', 2)
        }
       
    }
};
</script>

<style></style>