<!DOCTYPE html>
<html lang="en">

@section('htmlheader')
    @include('partials.htmlheader')
@show

<body class="hold-transition skin-blue sidebar-mini">

<div id="app" class="wrapper">

    @include('partials.mainheader')

    @include('partials.sidebar')

    <div class="content-wrappep">

        @include('partials.contentheader')

        <section class="content">
            @yield('content')
        </section>

        @include('partials.contentsidebar')

    </div>

    @include('partials.footer')

</div>

@section('scripts')
    @include('partials.scripts')
@show

</body>
</html>