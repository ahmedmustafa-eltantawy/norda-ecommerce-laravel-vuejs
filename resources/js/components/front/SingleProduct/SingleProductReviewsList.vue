<template>
    <div class="dec-review-bottom">
        <div class="review-wrapper">
            <!-- <h2>1 review for Sleeve Button Cowl Neck</h2> -->
            <div
                class="single-review"
                v-for="(review, index) in reviews"
                :key="index"
            >
                <!-- <div class="review-img">
                    <img src="" alt="" />
                </div> -->
                <div class="review-content">
                    <div class="review-top-wrap">
                        <div class="review-name">
                            <h5>
                                <span>{{ review.reviewer }}</span> -
                                {{ review.created_at }}
                            </h5>
                        </div>
                        <div
                            class="review-rating"
                            v-html="reviewRate(review.rate)"
                        ></div>
                    </div>
                    <p>
                        {{ review.review }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from "axios";
export default {
    name: "SingleProductReviewsList",
    data() {
        return {
            id: null,
            reviews: []
        };
    },

    methods: {
        loadProductReviews(id) {
            axios
                .get(`/api/v1/products/${id}/review`)
                .then(res => {
                    this.reviews = res.data.data.reviews;
                    console.log(this.reviews);
                })
                .catch(err => {
                    console.log(err);
                });
        },

        getId() {
            this.id = window.location.pathname.match(/([0-9]+)$/g)[0];
            return this.id;
        },

        reviewRate(rate) {
            let review_template = "";
            for (let i = 1; i <= 5; i++) {
                if (rate >= i) {
                    review_template += `<i class="yellow icon_star"></i>`;
                } else {
                    review_template += `<i class="icon_star"></i>`;
                }
            }

            return review_template;
        }
    },

    mounted() {
        this.loadProductReviews(this.getId());
    }
};
</script>
