<template>
    <div>
        <best-seller-tab></best-seller-tab>
        <div class="tab-content jump">
            <best-seller-product></best-seller-product>
        </div>
    </div>
</template>

<script>
import BestSellerTab from "./BestSellerTab";
import BestSellerProduct from "./BestSellerProduct";
export default {
    components: {
        BestSellerTab,
        BestSellerProduct
    },
    name: "BestSeller"
};
</script>
