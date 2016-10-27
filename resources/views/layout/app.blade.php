<!DOCTYPE html>
<html lang="en">

@section('htmlheader')
    @include('partials.htmlheader')
@show

<body class="hold-transition skin-blue sidebar-mini">

@include('partials.mainheader')

@include('partials.sidebar')

<div id="app" class="wrapper">

    <div class="content-wrappep">

        @include('partials.contentheader')

        <section class="content">
            @yield('content')
        </section>

        @include('partials.contentsidebar')

    </div>

    @include('partials.footer')

    <div class="control-sidebar-bg"></div>

</div>


@section('scripts')
    @include('partials.scripts')
@show

</body>
</html>