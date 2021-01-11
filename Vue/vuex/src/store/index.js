import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'

Vue.use(Vuex)

export default new Vuex.Store({
    //This is where all the global variables are available and declared. 
    state: {
        globalCounter: 0,
        globalUsers: ''
    },

    getters: {
        getCounterValue(state) {
            return state.globalCounter
        },
        getAllUsers(state) {
            return state.globalUsers
        }
    },
    //Updation - Adding/Removing/Updating
    mutations: {
        //Best practice - eg: NEW_FUNCTION(){}
        //IT TAKES TWO AGRUMENTS ALWAYS 
        ADD_COUNTER(state, data) {
            state.globalCounter = data
        },

        RESET_COUNTER(state) {
            state.globalCounter = 0
        },

        ADD_USERS(state, data) {
            state.globalUsers = data
        }
    },
    actions: {
        getAllUsers(context) {
            console.log('In Action')
            return new Promise((resolve, reject) => {
                axios.get('https://reqres.in/api/users')
                    .then(response => {
                        console.log('Actions Called')
                        console.log(response)
                        context.commit('ADD_USERS', response.data.data)
                        resolve(response.data.data)
                            // this.$store.commit('ADD_USERS', response.data.data)
                    })
                    .catch(err => {
                        console.log(err)
                        reject(err)
                    })
            })
        },

        deleteUser(context, id) {
            return new Promise((resolve, reject) => {
                axios.get(`https://reqres.in/api/users/delete/${id}`)
                    .then(response => {
                        console.log('Actions Called')
                        console.log(response)
                        context.commit('ADD_USERS', response.data.data)
                        resolve(response.data.data)
                            // this.$store.commit('ADD_USERS', response.data.data)
                    })
                    .catch(err => {
                        console.log(err)
                        reject(err)
                    })
            })
        }
    },
    // modules: {
    // }
})