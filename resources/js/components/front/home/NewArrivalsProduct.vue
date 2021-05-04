<template>
    <div class="product-plr-1">
        <div class="single-product-wrap mb-35">
            <div class="product-img product-img-zoom mb-20">
                <a href="product-details.html">
                    <img src="assets/images/product/product-9.jpg" alt="" />
                </a>
            </div>
            <div class="product-content-2 text-center">
                <h3>
                    <a href="product-details.html"
                        >{{ product.name }}
                        <span class="available-product">(56)</span></a
                    >
                </h3>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "NewArrivalsProduct",
    emits: ["newArrivalsMounted"],
    props: {
        product: {
            type: Object,
            require: true
        },

        productsCount: {
            type: Number,
            require: true
        },
        index: {
            type: Number
        }
    },
    data() {
        return {};
    },
    mounted() {
        if (this.productsCount == this.index) {
            this.$emit("newArrivalsMounted");
        }
    }
};
</script>
