<template>
  <div>
    <p>Cart</p>
    <b-container class="bv-example-row">
        <div class="row">
            <div class="col-4" v-for="(laptop, index) in laptops" :key="index">
                <ProductCard :laptopData="laptop"  @childEvent="childEventListeningMethod"/> 
            </div>
        </div>
    </b-container>
    <div></div>
  </div>
</template>

<script>
import ProductCard from './ProductCrad'
export default {
    components:{
        ProductCard
    },
    data(){
        return{
            laptops:[
                {
                    id:1,
                    name: 'MAcbbok Air',
                    specs: 'Some Specs',
                    stock: 10,
                    image:'https://images.unsplash.com/photo-1585643392923-c3718fc95947?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=872&q=80'
                },
                {
                    id:2,
                    name: 'Macbbok Pro',
                    specs: 'Some Specs',
                    stock: 0,
                    image:'https://images.unsplash.com/photo-1477327070293-75f15e291bb0?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80'
                },
            ]
        }
    },
    methods:{
        childEventListeningMethod(a){
            alert(a)
        }
    }
};
</script>

<style>
</style>