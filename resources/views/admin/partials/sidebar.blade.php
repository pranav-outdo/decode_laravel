<aside class="main-sidebar sidebar-dark-primary elevation-4">
    @php
        $segment1 = request()->segment(1);
        $segment2 = request()->segment(2);
    @endphp

    <!-- Brand Logo -->
    <a href="{{url('/')}}" class="brand-link">
        <img src="{{ asset('img/navbar-brand.png') }}" alt="Admin Logo" class="brand-image"  />
        <span class="brand-text font-weight-light">&nbsp;</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item {{ ($segment2 == 'integration') ? 'menu-is-opening menu-open' : '' }} {{ ($segment2 == 'category') ? 'menu-is-opening menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <img src="{{ asset('/')}}/admin/icons/integrations.svg" height="18px"/> &nbsp;
                        <p>{{ __('Integrations')}}
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item {{ ( Route::currentRouteName() == 'admin.category.index' ) ? 'active' : '' }}">
                            <a href="{{route('admin.category.index')}}" class="nav-link {{ ( Route::currentRouteName() == 'admin.category.index' ) ? 'active' : '' }}">
                                <img src="{{ asset('/')}}/admin/icons/category.svg" height="18px"/> &nbsp;
                                <p>{{ __('Category')}}</p>
                            </a>
                        </li>
                        <li class="nav-item {{ ($segment2 == 'integration') ? 'active' : '' }}">
                            <a href="{{route('admin.integration.index')}}" class="nav-link {{ ($segment2 == 'integration')  ? 'active' : '' }}">
                                <img src="{{ asset('/')}}/admin/icons/integration.svg" height="18px"/> &nbsp;
                                <p>{{ __('Integration')}}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ ($segment2 == 'resources') ? 'menu-is-opening menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <img src="{{ asset('/')}}/admin/icons/resource.svg" height="18px"/> &nbsp;
                        <p>{{ __('Resources')}}
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item {{ ( Route::currentRouteName() == 'admin.resource-type.index' ) ? 'active' : '' }}">
                            <a href="{{route('admin.resource-type.index')}}" class="nav-link {{ ( Route::currentRouteName() == 'admin.resource-type.index' ) ? 'active' : '' }}">
                                <img src="{{ asset('/')}}/admin/icons/type.svg" height="18px"/> &nbsp;
                                <p>{{ __('Type')}}</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item {{ ( Route::currentRouteName() == 'admin.resource-topic.index' ) ? 'active' : '' }}">
                            <a href="{{route('admin.resource-topic.index')}}" class="nav-link {{ ( Route::currentRouteName() == 'admin.resource-topic.index' ) ? 'active' : '' }}">
                                <img src="{{ asset('/')}}/admin/icons/topic.svg" height="18px"/> &nbsp;
                                <p>{{ __('Topic')}}</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item {{ ( Route::currentRouteName() == 'admin.content-vault.index' ) ? 'active' : '' }}">
                            <a href="{{route('admin.content-vault.index')}}" class="nav-link {{ ( Route::currentRouteName() == 'admin.content-vault.index' ) ? 'active' : '' }}">
                                <i class='fas fa-external-link-alt'></i>
                                <p>{{ __('Content Vault')}}</p>
                            </a>
                        </li>
                        <li class="nav-item {{ ( Route::currentRouteName() == 'admin.resource-books.index' ) ? 'active' : '' }}">
                            <a href="{{route('admin.resource-books.index')}}" class="nav-link {{ ( Route::currentRouteName() == 'admin.resource-books.index' ) ? 'active' : '' }}">
                                <i class='fas fa-book-open' style='color:white'></i>
                                <p>{{ __('E-Books')}}</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
