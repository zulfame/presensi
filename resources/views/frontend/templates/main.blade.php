@include('frontend.templates.header')

<!-- Start Content -->
<div id="appCapsule">
    @yield('content')
</div>
<!-- End Content -->

@include('frontend.templates.bottomNav')

@include('frontend.templates.footer')