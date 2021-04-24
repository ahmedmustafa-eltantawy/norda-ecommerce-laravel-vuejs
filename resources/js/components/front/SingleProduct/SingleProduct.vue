<template>
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="product-details-tab">
                <single-product-gallery></single-product-gallery>
                <single-product-gallery-thumbnails></single-product-gallery-thumbnails>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <single-product-Details></single-product-Details>
        </div>
    </div>
</template>

<script>
import SingleProductGallery from "./SingleProductGallery";
import SingleProductGalleryThumbnails from "./SingleProductGalleryThumbnails";
import SingleProductDetails from "./SingleProductDetails";
export default {
    name: "SingleProduct",
    components: {
        SingleProductDetails,
        SingleProductGallery,
        SingleProductGalleryThumbnails
    },
    data() {
        return {};
    }
};
</script>
