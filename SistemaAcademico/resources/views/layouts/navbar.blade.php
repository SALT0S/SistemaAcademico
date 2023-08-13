<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Calidad de Software <sup>Grupo 6</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    @foreach ($siteData as $menu)

        @if($menu->es_dashboard == 1)
            <li class="nav-item active">
                <a class="nav-link" href="{{$menu->link}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
        @else

            <li class="nav-item">
                @if($menu->es_menu_padre == 1)
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#{{$menu->nombre}}"
                       aria-expanded="true" aria-controls="collapseTwo">
                        <i class="{{$menu->icono}}"></i>
                        <span>{{$menu->nombre}}</span>
                    </a>
                    <div id="{{$menu->nombre}}" class="collapse" aria-labelledby="headingTwo"
                         data-parent="#accordionSidebar">
                        <div class="bg-white collapse-inner rounded">
                            @foreach($siteDataHijos as $menuHijo)
                                @if($menuHijo->id_menu_padre == $menu->id)
                                    <a class="collapse-item"
                                       href="{{ url($menuHijo->link) }}">{{ $menuHijo->nombre }}</a>

                                @endif

                            @endforeach
                        </div>
                    </div>
                @endif

            </li>
            <!-- Divider -->

        @endif
    @endforeach
    <hr class="sidebar-divider">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
