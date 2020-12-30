<template>
  <div>
  <b-card
    :title="laptopData.name"
    :img-src="laptopData.image"
    img-alt="Image"
    img-top
    tag="article"
    style="max-width: 20rem;"
    class="mb-2"
  >
    <b-card-text>
      {{ laptopData.specs }}
    </b-card-text>

    <b-badge v-if="laptopData.stock >= 5" variant="success">In Stock</b-badge> 
    <b-badge v-else-if="laptopData.stock > 0 && laptopData.stock < 5" variant="warning">Very Few Remaining</b-badge>
    <b-badge v-else variant="danger">Out Of Stock</b-badge>
  </b-card>
</div>
</template>

<script>
export default {
    name: 'ProductCard',
    props:['laptopData'],
    created(){
      var data = `Hello From Child Component. Laptop Name is: ${this.laptopData.name}`
      this.$emit('childEvent', data)
    }
}
</script>

<style>

</style>