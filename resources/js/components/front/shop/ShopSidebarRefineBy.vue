<template>
    <div class="sidebar-widget shop-sidebar-border mb-40 pt-40">
        <h4 class="sidebar-widget-title">Refine By</h4>
        <div class="sidebar-widget-list">
            <ul>
                <li>
                    <div class="sidebar-widget-list-left">
                        <input
                            type="checkbox"
                            value="on_sale"
                            v-model="refine_by"
                        />
                        <a href="#">On Sale</a>
                        <span class="checkmark"></span>
                    </div>
                </li>
                <li>
                    <div class="sidebar-widget-list-left">
                        <input
                            type="checkbox"
                            value="new"
                            v-model="refine_by"
                        />
                        <a href="#">New </a>
                        <span class="checkmark"></span>
                    </div>
                </li>
                <li>
                    <div class="sidebar-widget-list-left">
                        <input
                            type="checkbox"
                            value="in_stock"
                            v-model="refine_by"
                        />
                        <a href="#">In Stock </a>
                        <span class="checkmark"></span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    name: "ShopSidebarRefineBy",
    data() {
        return {
            refine_by: []
        };
    },

    watch: {
        refine_by(val) {
            this.$emit("refineByChanged", val);
        }
    }
};
</script>
