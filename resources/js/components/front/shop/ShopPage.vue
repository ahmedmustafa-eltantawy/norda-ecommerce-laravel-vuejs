<template>
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                <div class="shop-bottom-area">
                    <div class="tab-content jump">
                        <div id="shop-1" class="tab-pane active">
                            <div class="row">
                                <shop-single-product
                                    v-for="(product, index) in products"
                                    :key="index"
                                    :product="product"
                                ></shop-single-product>
                            </div>
                        </div>
                    </div>
                    <shop-pagination
                        :pagination-data="paginationData"
                        @changePage="loadShopProducts"
                    ></shop-pagination>
                </div>
            </div>
            <div class="col-lg-3">
                <shop-sidebar
                    @updateShopProducts="loadShopProducts"
                ></shop-sidebar>
            </div>
        </div>
    </div>
</template>

<script>
import ShopSidebar from "./ShopSidebar";
import ShopPagination from "./ShopPagination";
import ShopSingleProduct from "./ShopSingleProduct";

import axios from "axios";
export default {
    name: "ShopPage",
    components: {
        ShopSidebar,
        ShopPagination,
        ShopSingleProduct
    },
    data() {
        return {
            products: [],
            paginationData: {}
        };
    },
    methods: {
        urlShopProducts(url = null) {
            if (url === null) {
                return `/api/v1/shop/filter-products`;
            }
            if (/\/api\/v1\/shop\/filter-products\?/.test(url)) {
                return url;
            }
            return `/api/v1/shop/filter-products${url}`;
        },

        loadShopProducts(query_string = null) {
            axios
                .get(this.urlShopProducts(query_string))
                .then(res => {
                    this.paginationData = res.data.meta;
                    this.products = res.data.data.products;
                })
                .catch(err => {
                    console.log(err.resposne);
                });
        }
    },

    mounted() {
        this.loadShopProducts();
    }
};
</script>
