<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        @if (!Auth::check())
            @include('adminlte::layouts.partials.menu_items', ['items' => trans('menus/one')])
        @endif
    </section>
    <!-- /.sidebar -->
</aside>
