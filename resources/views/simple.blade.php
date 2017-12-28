<!DOCTYPE html>
<html lang="es">

@section('htmlheader')
    @include('adminlte::layouts.partials.htmlheader')
@show

<body class="skin-red sidebar-collapse">
<div id="app" v-cloak>
    <div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                @yield('content-header', 'encabezado' )
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            @yield('main-content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

</div><!-- ./wrapper -->
</div>
@section('scripts')
    @include('adminlte::layouts.partials.scripts')
@show

</body>
</html>
