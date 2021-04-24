<template>
    <div class="sidebar-widget shop-sidebar-border mb-40 pt-40">
        <h4 class="sidebar-widget-title">Refine By</h4>
        <div class="sidebar-widget-list">
            <ul>
                <li>
                    <div class="sidebar-widget-list-left">
                        <input type="checkbox" />
                        <a href="#">On Sale <span>4</span> </a>
                        <span class="checkmark"></span>
                    </div>
                </li>
                <li>
                    <div class="sidebar-widget-list-left">
                        <input type="checkbox" value="" />
                        <a href="#">New <span>5</span></a>
                        <span class="checkmark"></span>
                    </div>
                </li>
                <li>
                    <div class="sidebar-widget-list-left">
                        <input type="checkbox" value="" />
                        <a href="#">In Stock <span>6</span> </a>
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
        return {};
    }
};
</script>
