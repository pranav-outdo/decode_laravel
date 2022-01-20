<nav class="sidebar sidebar-offcanvas" id="sidebar">
<ul class="nav">
    <li class="nav-item">
    <a class="nav-link" href="{{route('dashboard')}}">
        <i class="ti-shield menu-icon"></i>
        <span class="menu-title">Dashboard</span>
    </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="javascript:void(0)" aria-expanded="true" aria-controls="ui-basic">
            <i class="ti-palette menu-icon"></i>
            <span class="menu-title">Integration</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse show" id="ui-basic" style="">
            <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('category.index')}}"><i class="ti-palette menu-icon"></i>Category</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('integration.index')}}"><i class="ti-palette menu-icon"></i><span class="menu-title">Integration</span></a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="javascript:void(0)" aria-expanded="true" aria-controls="ui-basic">
            <i class="ti-palette menu-icon"></i>
            <span class="menu-title">Resources</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse show" id="ui-basic" style="">
            <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('resource-type.index')}}"><i class="ti-palette menu-icon"></i>Type</a></li>
            </ul>
        </div>
    </li>
</ul>
</nav>
