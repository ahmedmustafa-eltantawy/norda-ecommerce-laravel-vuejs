<template>
    <div class="container">
        <div class="row">
            <shop-single-product
                v-for="(product, index) in relatedProducts"
                :key="index"
                :product="product"
            ></shop-single-product>
        </div>
    </div>
</template>

<script>
import axios from "axios";
import ShopSingleProduct from "../shop/ShopSingleProduct";
export default {
    name: "SingleProductRelatedByCategory",
    components: {
        ShopSingleProduct
    },
    data() {
        return {
            id: "",
            relatedProducts: []
        };
    },

    methods: {
        getId() {
            this.id = window.location.pathname.match(/([0-9]+)$/g)[0];
            return this.id;
        },

        loadRelatedProducts(id) {
            axios.get(`/api/v1/products/${id}/related-products/`).then(res => {
                this.relatedProducts = res.data.products;

                console.log(this.relatedProducts);
            });
        }
    },

    mounted() {
        this.loadRelatedProducts(this.getId());
    }
};
</script>
