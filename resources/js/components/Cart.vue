<template>
    
        <a href="" class="btn cart">
            <i class="fa fa-shopping-cart fa-2x"></i>
            <span class="badge rounded-circle">{{itemCount}}</span>
        </a>
    
</template>

<script>
    export default {
        data(){
            return {
                itemCount: '',
            }
        },
        mounted() {
            this.$root.$on('changeInCart', (item) => {
                this.itemCount = item;
            })
        },
        methods:{
            async getCartItemsOnPageLoad(){
                let response = await axios.post('/cart');
                this.itemCount =response.data.items
                //alert(this.itemCount);
            }
        },
        created(){
            this.getCartItemsOnPageLoad();
        }
    }
</script>
