<template>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="single-product-wrap mb-35">
            <div class="product-img product-img-zoom mb-15">
                <a href="product-details.html">
                    <img src="assets/images/product/product-14.jpg" alt="" />
                </a>
                <span class="pro-badge left bg-red">{{
                    product.discount_percentage
                }}</span>
                <div class="product-action-2 tooltip-style-2">
                    <button title="Wishlist"><i class="icon-heart"></i></button>
                    <button
                        title="Quick View"
                        data-toggle="modal"
                        data-target="#exampleModal"
                    >
                        <i class="icon-size-fullscreen icons"></i>
                    </button>
                    <button title="Compare">
                        <i class="icon-refresh"></i>
                    </button>
                </div>
            </div>
            <div class="product-content-wrap-2 text-center">
                <div class="product-rating-wrap">
                    <div class="product-rating">
                        <i class="icon_star"></i>
                        <i class="icon_star"></i>
                        <i class="icon_star"></i>
                        <i class="icon_star"></i>
                        <i class="icon_star gray"></i>
                    </div>
                    <span>(2)</span>
                </div>
                <h3>
                    <a href="product-details.html">{{ product.name }}</a>
                </h3>
                <div class="product-price-2">
                    <span class="new-price">{{
                        product.discounted_price
                    }}</span>
                    <span class="old-price">{{ product.price }}</span>
                </div>
            </div>
            <div
                class="product-content-wrap-2 product-content-position text-center"
            >
                <div class="product-rating-wrap">
                    <div class="product-rating">
                        <i class="icon_star"></i>
                        <i class="icon_star"></i>
                        <i class="icon_star"></i>
                        <i class="icon_star"></i>
                        <i class="icon_star gray"></i>
                    </div>
                    <span>(2)</span>
                </div>
                <h3>
                    <a href="product-details.html">{{ product.name }}</a>
                </h3>
                <div class="product-price-2">
                    <span class="new-price">{{
                        product.discounted_price
                    }}</span>
                    <span class="old-price">{{ product.price }}</span>
                </div>
                <div class="pro-add-to-cart">
                    <button title="Add to Cart">Add To Cart</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "BestSellerProduct",
    props: {
        product: {
            type: Object,
            require: true
        }
    },
    data() {
        return {};
    }
};
</script>
