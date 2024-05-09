<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="navigation-header"><span>General</span><i class="feather icon-minus" data-toggle="tooltip"
                    data-placement="right" data-original-title="General"></i></li>

            @php
                $active = Session::get('page') == 'dashboard' ? 'active' : '';
            @endphp

            <li class="nav-item {{ $active }}"><a href="{{ url('admin/dashboard') }}"><i
                        class="feather icon-home"></i><span class="menu-title"
                        data-i18n="Dashboard">Dashboard</span></a></li>

        
            @php
                $active = Session::get('page') == 'cms-page' ? 'active' : '';
            @endphp
            <li class="nav-item {{ $active }}"><a href="{{ url('admin/cms-page') }}"><i
                        class="feather icon-home"></i><span class="menu-title"
                        data-i18n="CmsPage">CMS PAGE</span></a></li>

            @if(Auth::guard('admin')->user()->type=="admin")
            @php
            $active = Session::get('page') == 'subadmins' || Session::get('page') == 'add_subadmin' ? 'active' : '';         
            @endphp

            <li class="nav-item {{ $active }}"><a href="#"><i
                    class="feather icon-users"></i><span class="menu-title"
                    data-i18n="SubAdmins">Sub-Admins</span></a>
                <ul class="menu-content">
                    @php
                    $active = Session::get('page') == 'subadmins' ? 'active' : '';
                    @endphp
                    <li class="{{ $active }}">
                        <a class="menu-item" href="{{ url("admin/subadmins") }}" data-i18n="Vertical">Manage Sub-Admin</a>
                    </li>

                    @php
                    $active = Session::get('page') == 'add_subadmin' ? 'active' : '';
                    @endphp
                    <li class="{{ $active }}">
                        <a class="menu-item" href="{{ url('admin/add-edit-subadmin') }}" data-i18n="Vertical">Add Sub-Admin</a>
                    </li>
                </ul>
            </li>
            @endif
            @php
            $active = Session::get('page') == 'users' || Session::get('page') == 'add_users' ? 'active' : '';              
            @endphp
            <li class="nav-item {{ $active }}"><a href="#"><i class="feather icon-users"></i><span class="menu-title"
                        data-i18n="Users">Users</span></a>
                <ul class="menu-content">
                    @php
                    $active = Session::get('page') == 'users' ? 'active' : '';
                    @endphp
                    <li class="{{ $active }}">
                        <a class="menu-item" href="{{ url("admin/users") }}" data-i18n="Vertical">Manage Users</a>
                    </li>
                    
                    @php
                    $active = Session::get('page') == 'add_users' ? 'active' : '';
                    @endphp
                    <li class="{{ $active }}">
                        <a class="menu-item" href="{{ url('admin/add-edit-user') }}" data-i18n="Vertical">Add User</a>
                    </li>
                </ul>
            </li>
            
            @php
                $active = Session::get('page') == 'project' ? 'active' : '';
            @endphp
            <li class="nav-item {{ $active }}"><a href="{{ url('admin/project') }}"><i
                        class="feather icon-slack"></i><span class="menu-title"
                        data-i18n="CmsPage">Project Request</span></a></li>



            @php
            $active = Session::get('page') == 'services' || Session::get('page') == 'add_services' ? 'active' : '';              
            @endphp
            <li class="nav-item {{ $active }}"><a href="#"><i class="feather icon-activity"></i><span class="menu-title"
                        data-i18n="Service">Services</span></a>
                <ul class="menu-content">
                    @php
                    $active = Session::get('page') == 'services' ? 'active' : '';
                    @endphp
                    <li class="{{ $active }}">
                        <a class="menu-item" href="{{ url("admin/services") }}" data-i18n="Vertical">Manage Services</a>
                    </li>
                    
                    @php
                    $active = Session::get('page') == 'add_services' ? 'active' : '';
                    @endphp
                    <li class="{{ $active }}">
                        <a class="menu-item" href="{{ url('admin/add-edit-service') }}" data-i18n="Vertical">Add Service</a>
                    </li>
                </ul>
            </li>

             @php
            $active = Session::get('page') == 'category' || Session::get('page') == 'add_category' ? 'active' : '';              
            @endphp
            <li class="nav-item {{ $active }}"><a href="#"><i class="feather icon-wind"></i><span class="menu-title"
                        data-i18n="Categories">Categories</span></a>
                <ul class="menu-content">
                    @php
                    $active = Session::get('page') == 'category' ? 'active' : '';
                    @endphp
                    <li class="{{ $active }}">
                        <a class="menu-item" href="{{ url("admin/categories") }}" data-i18n="Vertical">Manage Category</a>
                    </li>
                    
                    @php
                    $active = Session::get('page') == 'add_category' ? 'active' : '';
                    @endphp
                    <li class="{{ $active }}">
                        <a class="menu-item" href="{{ url('admin/add-edit-category') }}" data-i18n="Vertical">Add Category</a>
                    </li>
                </ul>
            </li>

            @php
            $active = Session::get('page') == 'books' || Session::get('page') == 'add_book' ? 'active' : '';              
            @endphp
            <li class="nav-item {{ $active }}"><a href="#"><i class="feather icon-wind"></i><span class="menu-title"
                        data-i18n="books">BOOKS</span></a>
                <ul class="menu-content">
                    @php
                    $active = Session::get('page') == 'books' ? 'active' : '';
                    @endphp
                    <li class="{{ $active }}">
                        <a class="menu-item" href="{{ url("admin/books") }}" data-i18n="Vertical">Manage Books</a>
                    </li>
                    
                    @php
                    $active = Session::get('page') == 'add_book' ? 'active' : '';
                    @endphp
                    <li class="{{ $active }}">
                        <a class="menu-item" href="{{ url('admin/add-edit-book') }}" data-i18n="Vertical">Add Book</a>
                    </li>
                </ul>
            </li>
            
        </ul>
    </div>
</div>
