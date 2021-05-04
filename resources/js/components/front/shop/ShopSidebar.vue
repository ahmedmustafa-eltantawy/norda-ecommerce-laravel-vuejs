<template>
    <div class="sidebar-wrapper sidebar-wrapper-mrg-right">
        <form action="" @submit.prevent>
            <shop-sidebar-search></shop-sidebar-search>
            <shop-sidebar-color-filter
                @colorsChanged="filterColorsStrings"
            ></shop-sidebar-color-filter>
            <shop-sidebar-refine-by
                @refineByChanged="filterRefineByStrings"
            ></shop-sidebar-refine-by>
            <shop-sidebar-size-filter
                @sizesChanged="filterSizesStrings"
            ></shop-sidebar-size-filter>

            <button
                type="submit"
                class="btn btn-success btn-block"
                @click="loadFilteredProducts"
            >
                Filter
            </button>
        </form>
    </div>
</template>

<script>
import ShopSidebarSearch from "./ShopSidebarSearch";
import ShopSidebarCategory from "./ShopSidebarCategory";
import ShopSidebarColorFilter from "./ShopSidebarColorFilter";
import ShopSidebarRefineBy from "./ShopSidebarRefineBy";
import ShopSidebarSizeFilter from "./ShopSidebarSizeFilter";
export default {
    name: "ShopSidebar",
    components: {
        ShopSidebarSearch,
        ShopSidebarCategory,
        ShopSidebarColorFilter,
        ShopSidebarRefineBy,
        ShopSidebarSizeFilter
    },
    data() {
        return {
            params: {
                colors: "",
                refine_by: "",
                sizes: ""
            },

            queryString: ""
        };
    },

    methods: {
        loadFilteredProducts() {
            this.$emit("updateShopProducts", this.generateQueryString());
        },

        filterColorsStrings(colors) {
            this.params.colors = "";
            return (this.params.colors = this.queryStrings(colors));
        },

        filterRefineByStrings(refine_by) {
            this.params.refine_by = "";
            return (this.params.refine_by = this.queryStrings(refine_by));
        },

        filterSizesStrings(sizes) {
            this.params.sizes = sizes;
            return (this.params.sizes = this.queryStrings(sizes));
        },

        queryStrings(queryString) {
            let colorsQueryString = "";
            for (let i = 0; i < queryString.length; i++) {
                if (i == 0) {
                    colorsQueryString += `${queryString[i]}`;
                } else {
                    colorsQueryString += `,${queryString[i]}`;
                }
            }

            return colorsQueryString;
        },

        generateQueryString() {
            this.queryString = "";

            if (this.params.colors.length) {
                this.queryString += `?color=${this.params.colors.toLowerCase()}`;
            }

            if (this.params.sizes.length) {
                let colorReg = /\?color=[a-z,]+/;
                if (colorReg.test(this.queryString)) {
                    this.queryString += `&size=${this.params.sizes.toLowerCase()}`;
                } else {
                    this.queryString += `?size=${this.params.sizes.toLowerCase()}`;
                }
            }

            if (this.params.refine_by.length) {
                let colorSizeReg = /\?(color|size)=[a-z,]+/;
                if (colorSizeReg.test(this.queryString)) {
                    this.queryString += `&refine_by=${this.params.refine_by.toLowerCase()}`;
                } else {
                    this.queryString += `?refine_by=${this.params.refine_by.toLowerCase()}`;
                }
            }

            return this.queryString.toLowerCase();
        }
    }
};
</script>
