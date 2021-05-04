<template>
    <div>
        <best-seller-tab
            @getbestSellerInCategory="loadBestSellerInCategory"
        ></best-seller-tab>
        <div class="tab-content jump">
            <div id="" class="tab-pane active">
                <div class="row">
                    <best-seller-product
                        v-for="(product, index) in products"
                        :key="index"
                        :product="product"
                    ></best-seller-product>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
import BestSellerTab from "./BestSellerTab";
import BestSellerProduct from "./BestSellerProduct";
export default {
    components: {
        BestSellerTab,
        BestSellerProduct
    },
    name: "BestSeller",
    data() {
        return {
            products: [],
            category: ""
        };
    },

    methods: {
        urlBestSellerProducts(category) {
            if (!category) {
                return "api/v1/products/best-seller";
            }

            return (
                "api/v1/products/best-seller" + `?catetogry_name=${category}`
            );
        },

        loadBestSellerInCategory(category = null) {
            axios
                .get(this.urlBestSellerProducts(category))
                .then(res => {
                    this.products = res.data.products;
                })
                .catch(err => {
                    console.log(err.response);
                });
        }
    },
    mounted() {
        this.loadBestSellerInCategory();
    }
};
</script>
