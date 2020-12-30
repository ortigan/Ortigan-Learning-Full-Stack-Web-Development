<template>
  <div class="container">
    <div class="text-center">
      <b-button variant="primary">
        List <b-badge variant="light">{{ countItems }}</b-badge>
      </b-button>
    </div>
     <b-form @submit.prevent="">
      <b-form-group
        id="input-group-1"
        label="Item name:"
        label-for="input-1"
      >
        <b-form-input
          id="input-1"
          type="text"
          v-model="newItem"
          placeholder="Enter items"
          required
          @keyup.enter="newItem == '' ? '' : addItem()"
        ></b-form-input>
        <!-- condition ? true : false -->
        <!-- newItem == '' ? '' : addItem() -->
      </b-form-group>
      <b-button variant="primary" :disabled="check" @click="addItem()">Add+</b-button>
     </b-form>
     <b-list-group class="mt-5">
        <b-list-group-item v-for="(item, index) in items" v-bind:key="index">
            {{ item }}
        </b-list-group-item>
    </b-list-group>
  </div>
</template>
<script>
export default {
  name: "List",
  data(){
      return {
          newItem: '',
          items:[]
      }
  },
  computed:{
      check(){
          if(this.newItem == '') {
              return true
          } else {
              return false
          }
      },
      countItems(){
          return this.items.length
      }
  },
  methods:{
      addItem(){
          this.items.push(this.newItem)
          this.newItem = ''
      }
  }
};
</script>
<style scoped></style>
