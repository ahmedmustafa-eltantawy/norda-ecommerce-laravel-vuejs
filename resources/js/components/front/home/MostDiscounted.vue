<template>
    <div class="banner-area padding-10-row-col pb-105">
        <div class="container">
            <div class="row">
                <most-discounted-product
                    v-for="product in products"
                    :key="product.id"
                    :product="product"
                ></most-discounted-product>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
import MostDiscountedProduct from "./MostDiscountedProduct";
export default {
    components: {
        MostDiscountedProduct
    },
    name: "MostDiscounted",
    data() {
        return {
            products: []
        };
    },

    methods: {
        loadMostDiscountedProducts() {
            axios
                .get("/api/v1/products/most-discounted")
                .then(res => {
                    this.products = res.data.products;
                })
                .catch(err => {
                    console.log(err.response);
                });
        }
    },

    mounted() {
        this.loadMostDiscountedProducts();
    }
};
</script>
