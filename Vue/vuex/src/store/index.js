import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
    //This is where all the global variables are available and declared. 
    state: {
        globalCounter: 0
    },

    getters: {
        getCounterValue(state) {
            return state.globalCounter
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
        }
    },
    actions: {

    },
    // modules: {
    // }
})