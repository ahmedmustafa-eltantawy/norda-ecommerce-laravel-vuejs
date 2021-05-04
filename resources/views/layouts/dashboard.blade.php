@include('partials.dashboard.head')
<body class="authentication-bg">
    <div class="app" id="dashboard">
        @include('partials.dashboard.header')
        @include('partials.dashboard.sidenav')
        <div class="page-container">
            @include('partials.dashboard.page-header')
            @yield('content')
        </div>
    </div>
    @include('partials.dashboard.footer')
    @yield('script')
</body>
</html>
