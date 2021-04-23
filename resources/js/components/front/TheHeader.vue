<template>
    <header class="header-area">
        <div class="container">
            <div class="header-large-device">
                <div class="header-top header-top-ptb-2 border-bottom-1">
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-5">
                            <header-search></header-search>
                        </div>
                        <div class="col-xl-4 col-lg-2">
                            <header-logo-full-screen></header-logo-full-screen>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <header-auth-links></header-auth-links>
                        </div>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <header-menu-links></header-menu-links>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-small-device small-device-ptb-1">
                <header-small-device></header-small-device>
            </div>
        </div>
    </header>
</template>

<script>
import HeaderSearch from "./HeaderSearch.vue";
import HeaderMenuLinks from "./HeaderMenuLinks";
import HeaderAuthLinks from "./HeaderAuthLinks";
import HeaderSmallDevice from "./HeaderSmallDevice";
import HeaderLogoFullScreen from "./HeaderLogoFullScreen";
import TheHeaderSmallDevice from "./HeaderSmallDevice.vue";
export default {
    components: {
        HeaderSearch,
        HeaderAuthLinks,
        HeaderMenuLinks,
        HeaderSmallDevice,
        TheHeaderSmallDevice,
        HeaderLogoFullScreen
    },
    name: "TheHeader",
    data() {
        return {};
    }
};
</script>
