<template>
    <div class="sidebar-widget shop-sidebar-border mb-40 pt-40">
        <h4 class="sidebar-widget-title">Price Filter</h4>
        <div class="price-filter">
            <span>Range: $100.00 - 1.300.00 </span>
            <div id="slider-range"></div>
            <div class="price-slider-amount">
                <div class="label-input">
                    <input
                        type="text"
                        id="amount"
                        name="price"
                        placeholder="Add Your Price"
                    />
                </div>
                <button type="button">Filter</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "ShopSidebarPriceFilter",
    data() {
        return {};
    }
};
</script>
