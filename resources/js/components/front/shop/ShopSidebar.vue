<template>
    <div class="sidebar-wrapper sidebar-wrapper-mrg-right">
        <shop-sidebar-search></shop-sidebar-search>
        <shop-sidebar-price-filter></shop-sidebar-price-filter>
        <shop-sidebar-color-filter></shop-sidebar-color-filter>
        <shop-sidebar-refine-by></shop-sidebar-refine-by>
        <shop-sidebar-size-filter></shop-sidebar-size-filter>
    </div>
</template>

<script>
import ShopSidebarSearch from "./ShopSidebarSearch";
import ShopSidebarCategory from "./ShopSidebarCategory";
import ShopSidebarColorFilter from "./ShopSidebarColorFilter";
import ShopSidebarPriceFilter from "./ShopSidebarPriceFilter";
import ShopSidebarRefineBy from "./ShopSidebarRefineBy";
import ShopSidebarSizeFilter from "./ShopSidebarSizeFilter";
export default {
    name: "ShopSidebar",
    components: {
        ShopSidebarSearch,
        ShopSidebarCategory,
        ShopSidebarColorFilter,
        ShopSidebarPriceFilter,
        ShopSidebarRefineBy,
        ShopSidebarSizeFilter
    },
    data() {
        return {};
    }
};
</script>
