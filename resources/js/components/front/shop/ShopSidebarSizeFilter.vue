<template>
    <div class="sidebar-widget shop-sidebar-border mb-40 pt-40">
        <h4 class="sidebar-widget-title">Size</h4>
        <div class="sidebar-widget-list">
            <ul>
                <li>
                    <div class="sidebar-widget-list-left">
                        <input type="checkbox" value="xl" v-model="sizes" />
                        <a href="#">XL</a>
                        <span class="checkmark"></span>
                    </div>
                </li>
                <li>
                    <div class="sidebar-widget-list-left">
                        <input type="checkbox" value="l" v-model="sizes" />
                        <a href="#">L</a>
                        <span class="checkmark"></span>
                    </div>
                </li>
                <li>
                    <div class="sidebar-widget-list-left">
                        <input type="checkbox" value="sm" v-model="sizes" />
                        <a href="#">SM</a>
                        <span class="checkmark"></span>
                    </div>
                </li>
                <li>
                    <div class="sidebar-widget-list-left">
                        <input type="checkbox" value="xxl" v-model="sizes" />
                        <a href="#">XXL</a>
                        <span class="checkmark"></span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    name: "ShopSidebarSizeFilter",
    data() {
        return {
            sizes: []
        };
    },

    watch: {
        sizes(val) {
            this.$emit("sizesChanged", val);
        }
    }
};
</script>
