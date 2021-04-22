<template>
    <div class="product-area pt-115 pb-110">
        <div class="container">
            <div class="section-title-2 text-center mb-45">
                <h2><span>New</span> Arrivals</h2>
                <p>We alway up to date new arrivals follows trending</p>
            </div>

            <new-arrivals-product></new-arrivals-product>
        </div>
    </div>
</template>

<script>
import NewArrivalsProduct from "./NewArrivalsProduct";
export default {
    components: {
        NewArrivalsProduct
    },
    name: "NewArrivals",
    data() {
        return {};
    }
};
</script>
