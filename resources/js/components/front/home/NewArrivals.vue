<template>
    <div class="product-area pt-115 pb-110">
        <div class="container">
            <div class="section-title-2 text-center mb-45">
                <h2><span>New</span> Arrivals</h2>
                <p>We alway up to date new arrivals follows trending</p>
            </div>
            <div
                class="product-slider-active dot-style-2 dot-style-2-position-static dot-style-2-mrg-1 dot-style-2-active-black"
            >
                <NewArrivalsProduct
                    @newArrivalsMounted="initSlickSlider"
                    v-for="(product, index) in products"
                    :key="product.id"
                    :index="index + 1"
                    :product="product"
                    :productsCount="products.length"
                />
            </div>
        </div>
    </div>
</template>

<script>
import $ from "jquery";
import slick from "slick-carousel";
import axios from "axios";
import NewArrivalsProduct from "./NewArrivalsProduct";
export default {
    components: {
        NewArrivalsProduct
    },
    name: "NewArrivals",
    data() {
        return {
            products: []
        };
    },

    methods: {
        loadNewArrivalsProducts() {
            axios
                .get("/api/v1/products/new-arrivals")
                .then(res => {
                    this.products = res.data.data.products;
                })
                .catch(err => {
                    console.log(err.response);
                });
        },

        initSlickSlider() {
            $(".product-slider-active").slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3,
                fade: false,
                loop: true,
                dots: true,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 1199,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 575,
                        settings: {
                            slidesToShow: 1,
                            dots: false
                        }
                    }
                ]
            });
        }
    },

    mounted() {
        this.loadNewArrivalsProducts();
    }
};
</script>
