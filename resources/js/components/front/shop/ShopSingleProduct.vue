<template>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="single-product-wrap mb-35">
            <div class="product-img product-img-zoom mb-15">
                <a :href="product.web_route">
                    <img src="assets/images/product/product-13.jpg" alt="" />
                </a>
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
                    <div
                        class="product-rating"
                        v-html="reviewRate(product.reviews_avg_rate)"
                    ></div>
                </div>
                <h3>
                    <a :href="product.web_route">{{ product.name }}</a>
                </h3>
                <div class="product-price-2">
                    <span>{{ product.price }}</span>
                </div>
            </div>
            <div
                class="product-content-wrap-2 product-content-position text-center"
            >
                <div class="product-rating-wrap">
                    <div
                        class="product-rating"
                        v-html="reviewRate(product.reviews_avg_rate)"
                    ></div>
                </div>
                <h3>
                    <a :href="product.web_route">{{ product.name }}</a>
                </h3>
                <div class="product-price-2">
                    <span>{{ product.price }}</span>
                </div>
                <div class="pro-add-to-cart">
                    <a :href="product.web_route" class="btn btn-primary"
                        >More Details</a
                    >
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "ShopSingleProduct",
    props: {
        product: {
            require: true
        }
    },
    data() {
        return {};
    },

    methods: {
        reviewRate(rate) {
            let review_template = "";
            for (let i = 1; i <= 5; i++) {
                if (rate >= i) {
                    review_template += `<i class="icon_star"></i>`;
                } else {
                    review_template += `<i class="icon_star gray"></i>`;
                }
            }

            return review_template;
        }
    }
};
</script>
