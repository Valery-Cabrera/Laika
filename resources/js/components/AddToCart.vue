<template>
    <div>
        <hr>
        <button class="add-product" v-on:click.prevent="addProductToCart()"><i class="fa fa-cart-plus"></i>Añadir al carrito</button>  
        
        
    </div>
</template>

<script>
    export default {
        data(){
            return {
                
            }
        },
        props:['productId', 'userId'],
        methods:{
            async addProductToCart(){

                // Verificar que el usuario tenga iniciada sesión
                if(this.userId == 0){
                    this.$toastr.e('Debes iniciar sesión para añadir un producto al carro de compras');
                    return;
                }
                


                //Si el usuario tiene iniciada sesión, agregar producto
                let response = await axios.post('/cart', {
                    'product_id': this.productId
                });

                this.$root.$emit('changeInCart', response.data.items);



//                this.$root.$emit('changeInCart', response.data.items)

            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
