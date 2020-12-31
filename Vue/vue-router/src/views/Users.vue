<template>
  <div>
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
import axios from 'axios'
export default {
    data(){
        return {
            users: []
        }
    },
    created(){
        this.getUsers()
    },
    methods:{
        getUsers(){
            axios.get('https://reqres.in/api/users')
            .then(response => {
                console.log(response.data.data)
                this.users = response.data.data
            })
            .catch(err => {
                console.log(err)
            })
        }
    }
};
</script>

<style></style>