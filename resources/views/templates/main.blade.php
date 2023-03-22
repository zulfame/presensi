@include('templates.header')

<!-- Start Content -->
<div id="appCapsule">
    @yield('content')
</div>
<!-- End Content -->

@include('templates.bottomNav')

@include('templates.footer')