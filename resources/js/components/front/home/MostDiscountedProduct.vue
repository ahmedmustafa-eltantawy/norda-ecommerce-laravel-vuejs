<template>
    <div class="col-lg-4 col-md-6 col-12">
        <div class="banner-wrap mb-10">
            <div class="banner-img banner-img-border banner-img-zoom">
                <a href="product-details.html"
                    ><img src="assets/images/banner/banner-3.jpg" alt=""
                /></a>
            </div>
            <div class="banner-content-3">
                <h2>{{ product.name }}</h2>
                <span>{{ product.categories }}</span>
                <div class="pro-price-action-wrap">
                    <div class="product-price-3">
                        <span class="new-price">{{
                            product.discounted_price
                        }}</span>
                        <span class="old-price">{{ product.price }}</span>
                    </div>
                </div>
                <h3>{{ product.discounted_price }}</h3>
                <div class="btn-style-4">
                    <a href="product-details.html"
                        >Shop now <i class="icon-arrow-right"></i
                    ></a>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "MostDiscountedProduct",
    props: {
        product: Object,
        require: true
    },
    data() {
        return {};
    }
};
</script>
