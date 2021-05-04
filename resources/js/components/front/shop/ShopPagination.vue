<template>
    <div class="pro-pagination-style text-center mt-10">
        <ul>
            <li v-for="(link, index) in links" :key="index">
                <a
                    @click.prevent="changePage(link.url)"
                    :class="{ active: link.active }"
                    :href="link.url"
                >
                    <span v-if="/[0-9]+/.test(link.label)">{{
                        link.label
                    }}</span>
                    <span
                        class="icon-arrow-left"
                        v-else-if="/&laquo;/.test(link.label)"
                    ></span>
                    <span
                        class="icon-arrow-right"
                        v-else-if="/&raquo;/.test(link.label)"
                    ></span>

                    <span v-else>{{ link.label }}</span>
                </a>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: "ShopPagination",
    props: ["paginationData"],
    data() {
        return {
            links: []
        };
    },

    methods: {
        changePage(page_url) {
            this.$emit("changePage", page_url);
        }
    },
    watch: {
        paginationData(val, oldVal) {
            let { links } = val;
            this.links = links;
        }
    }
};
</script>
