<template>
    <div class="banner-area padding-10-row-col pb-105">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <current-discount-product></current-discount-product>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import CurrentDiscountProduct from "./CurrentDiscountProduct";
export default {
    components: {
        CurrentDiscountProduct
    },
    name: "CurrentDiscount",
    data() {
        return {};
    }
};
</script>
