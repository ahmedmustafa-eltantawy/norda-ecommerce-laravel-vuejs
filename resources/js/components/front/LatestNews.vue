<template>
    <div class="blog-area bg-gray-3 pt-115 pb-80">
        <div class="container">
            <div class="section-title-tab-wrap mb-35">
                <div class="section-title-3">
                    <h2>The Latest News</h2>
                </div>
                <div class="btn-style-5">
                    <a href="blog.html"
                        >View All News <i class="icon-arrow-right"></i
                    ></a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <latest-news-post></latest-news-post>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import LatestNewsPost from "./LatestNewsPost.vue";
export default {
    components: { LatestNewsPost },
    name: "LatestNews",
    data() {
        return {};
    }
};
</script>
