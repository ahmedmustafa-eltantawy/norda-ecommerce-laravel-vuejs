@include('partials.front.head')
<body>
    <main  class="main-wrapper" id="front">
        <the-header></the-header>
        <the-sidebar></the-sidebar>
        <the-header-mobile></the-header-mobile>
        @yield('front')
    </main>
    @include('partials.front.footer')
    @yield('script')
</body>
</html>
