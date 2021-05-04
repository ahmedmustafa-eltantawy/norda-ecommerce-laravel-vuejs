<template>
    <div class="product-details-content pro-details-content-mrg">
        <h2>{{ productName }}</h2>
        <div class="product-ratting-review-wrap">
            <div class="product-ratting-digit-wrap">
                <div class="product-ratting">
                    <i class="icon_star"></i>
                    <i class="icon_star"></i>
                    <i class="icon_star"></i>
                    <i class="icon_star"></i>
                    <i class="icon_star"></i>
                </div>
                <div class="product-digit">
                    <span>5.0</span>
                </div>
            </div>
            <div class="product-review-order">
                <span>62 Reviews</span>
            </div>
        </div>
        <p>{{ productDescription }}</p>
        <div class="pro-details-price">
            <span class="new-price">$75.72</span>
            <span class="old-price">{{ productPrice }}</span>
        </div>
        <div class="pro-details-color-wrap">
            <span>Color:</span>
            <div class="pro-details-color-content">
                <ul>
                    <li v-for="(color, index) in productColors" :key="index">
                        <a :class="color">{{ color }}</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="pro-details-size">
            <span>Size:</span>
            <div class="pro-details-size-content">
                <ul>
                    <li v-for="(size, index) in productSizes" :key="index">
                        <a>{{ size }}</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="pro-details-quality">
            <span>Quantity:</span>
            <div class="cart-plus-minus">
                <input
                    class="cart-plus-minus-box"
                    type="text"
                    name="qtybutton"
                    value="1"
                    min="1"
                    :max="productStockQuantity"
                />
            </div>
        </div>
        <div class="product-details-meta">
            <ul>
                <li>
                    <span>Categories:</span>
                    <a
                        v-for="(category, index) in productCategories"
                        :key="index"
                        >{{ category }}</a
                    >
                </li>
            </ul>
        </div>
        <div class="pro-details-action-wrap">
            <div class="pro-details-add-to-cart">
                <a title="Add to Cart" href="#">Add To Cart </a>
            </div>
            <div class="pro-details-action">
                <a title="Add to Wishlist" href="#"
                    ><i class="icon-heart"></i
                ></a>
                <a title="Add to Compare" href="#"
                    ><i class="icon-refresh"></i
                ></a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "SingleProductDetails",
    props: ["productDetails"],
    computed: {
        productColors() {
            let { colors } = this.productDetails;
            return colors;
        },

        productSizes() {
            let { sizes } = this.productDetails;
            return sizes;
        },

        productCategories() {
            let { categories } = this.productDetails;
            return categories;
        },

        productName() {
            let { name } = this.productDetails;
            return name;
        },

        productPrice() {
            let { price } = this.productDetails;
            return price;
        },

        productStockQuantity() {
            let { stock_quantity } = this.productDetails;
            return stock_quantity;
        },

        productDescription() {
            let { description } = this.productDetails;
            return description;
        }
    },

    mounted() {},

    watch: {
        productDetails(val, oldVal) {
            this.productDetails = val;
        }
    }
};
</script>
