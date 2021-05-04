<template>
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="product-details-tab">
                <single-product-gallery></single-product-gallery>
                <single-product-gallery-thumbnails></single-product-gallery-thumbnails>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <single-product-Details
                :product-details="productDetails"
            ></single-product-Details>
        </div>
    </div>
</template>

<script>
import SingleProductGallery from "./SingleProductGallery";
import SingleProductGalleryThumbnails from "./SingleProductGalleryThumbnails";
import SingleProductDetails from "./SingleProductDetails";
import axios from "axios";
export default {
    name: "SingleProduct",
    components: {
        SingleProductDetails,
        SingleProductGallery,
        SingleProductGalleryThumbnails
    },
    data() {
        return {
            id: "",
            productDetails: {},
            relatedProducts: {}
        };
    },

    methods: {
        getId() {
            this.id = window.location.pathname.match(/([0-9]+)$/g)[0];
            return this.id;
        },

        loadSingleProduct(id) {
            axios.get(`/api/v1/products/${id}`).then(res => {
                this.productDetails = res.data;
            });
        }
    },

    mounted() {
        this.loadSingleProduct(this.getId());
    }
};
</script>
