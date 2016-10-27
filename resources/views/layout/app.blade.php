<!DOCTYPE html>
<html lang="en">

@section('htmlheader')
    @include('partials.htmlheader')
@show

<body class="hold-transition skin-blue sidebar-mini">

<div id="app" class="wrapper">

    @yield('content')

    @include('partials.footer')

</div>

@section('scripts')
    @include('partials.scripts')
@show

</body>
</html>