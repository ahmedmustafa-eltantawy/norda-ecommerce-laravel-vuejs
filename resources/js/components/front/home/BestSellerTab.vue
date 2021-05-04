<template>
    <div class="tab-btn-wrap mb-40">
        <div class="tab-style-2 nav">
            <a class="" href="#product-1" data-toggle="tab">All Products</a>
            <a
                href="#"
                v-for="(category, index) in categories"
                :key="index"
                data-toggle="tab"
                @click="setCategory(category)"
            >
                {{ category }}
            </a>
        </div>
        <div class="btn-style-2">
            <a class="animated" href="shop.html"
                >see all product <i class="icon-arrow-right"></i
            ></a>
        </div>
    </div>
</template>

<script>
import axios from "axios";
export default {
    name: "",
    emits: ["getbestSellerInCategory"],
    data() {
        return {
            categories: []
        };
    },
    methods: {
        loadCategories() {
            axios
                .get("api/categories")
                .then(res => {
                    this.categories = res.data;
                })
                .catch(err => {
                    console.log(err.response);
                });
        },

        setCategory(category) {
            this.$emit("getbestSellerInCategory", category);
        }
    },

    mounted() {
        this.loadCategories();
    }
};
</script>
