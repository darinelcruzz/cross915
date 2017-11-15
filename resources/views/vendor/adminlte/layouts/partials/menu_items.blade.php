<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MENÚ</li>
    @foreach ($items as $item)
        @if (empty($item['submenu']))
            <li @if (!empty($item['class'])) class="{{ $item['class'] }}" @endif>
                <a href="{{ route($item['route']) }}">
                    <i class="{{ $item['icon'] }}"></i> <span>{{ $item['title'] }}</span>
                </a>
            </li>
        @else
            <li class="treeview">
                <a href="#">
                    <i class="{{ $item['icon'] }}"></i> <span>{{ $item['title'] }}</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @foreach ($item['submenu'] as $subitem)
                        <li>
                            <a href="{{ route($subitem['route']) }}">{{ $subitem['title'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
        @endif
    @endforeach
</ul>
