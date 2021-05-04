<template>
    <div class="sidebar-widget shop-sidebar-border mb-40 pt-40">
        <h4 class="sidebar-widget-title">Color</h4>
        <div class="sidebar-widget-list">
            <ul>
                <li>
                    <div class="sidebar-widget-list-left">
                        <input
                            type="checkbox"
                            id="Green"
                            value="Green"
                            v-model="colors"
                        />
                        <a href="#">Green </a>
                        <span class="checkmark"></span>
                    </div>
                </li>
                <li>
                    <div class="sidebar-widget-list-left">
                        <input
                            type="checkbox"
                            id="Cream"
                            value="Cream"
                            v-model="colors"
                        />
                        <a href="#">Cream </a>
                        <span class="checkmark"></span>
                    </div>
                </li>
                <li>
                    <div class="sidebar-widget-list-left">
                        <input
                            type="checkbox"
                            id="Blue"
                            value="Blue"
                            v-model="colors"
                        />
                        <a href="#">Blue </a>
                        <span class="checkmark"></span>
                    </div>
                </li>
                <li>
                    <div class="sidebar-widget-list-left">
                        <input
                            type="checkbox"
                            id="Black"
                            value="Black"
                            v-model="colors"
                        />
                        <a href="#">Black</a>
                        <span class="checkmark"></span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    name: "ShopSidebarColorFilter",
    data() {
        return {
            colors: []
        };
    },

    methods: {},

    watch: {
        colors(val) {
            this.$emit("colorsChanged", val);
        }
    },

    mounted() {}
};
</script>
