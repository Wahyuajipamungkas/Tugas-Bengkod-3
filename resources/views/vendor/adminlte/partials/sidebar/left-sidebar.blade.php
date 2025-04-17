<aside class="main-sidebar {{ config('adminlte.classes_sidebar', 'sidebar-dark-primary elevation-4') }}">

    {{-- Sidebar brand logo --}}
    @if(config('adminlte.logo_img_xl'))
        @include('adminlte::partials.common.brand-logo-xl')
    @else
        @include('adminlte::partials.common.brand-logo-xs')
    @endif

    {{-- Sidebar menu --}}
    <div class="sidebar">
        <nav class="pt-2">
            <ul class="nav nav-pills nav-sidebar flex-column {{ config('adminlte.classes_sidebar_nav', '') }}"
                data-widget="treeview" role="menu"
                @if(config('adminlte.sidebar_nav_animation_speed') != 300)
                    data-animation-speed="{{ config('adminlte.sidebar_nav_animation_speed') }}"
                @endif
                @if(!config('adminlte.sidebar_nav_accordion'))
                    data-accordion="false"
                @endif>
                {{-- Configured sidebar links --}}
                <!-- @each('adminlte::partials.sidebar.menu-item', $adminlte->menu('sidebar'), 'item') -->
                 @if (request()->is('docter*'))
                    <li class="nav-item">
                        <a href="/docter/periksa" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Periksa</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/docter/obat" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Obat</p>
                        </a>
                    </li>
                @else
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Periksa</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Riwayat</p>
                    </a>
                </li>
                 @endif
            </ul>
        </nav>
    </div>

</aside>
