<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li>
                <a href="{{route('admin')}}">
                    <i class="nav-icon fa fa-tachometer" aria-hidden="true"></i>
                    <span>Home</span>
                </a>
            </li>
            @can('categories-list')
            <li>
                <a href="{{route('admin-categories')}}">
                    <i class="nav-icon fa fa-list-alt " aria-hidden="true"></i>
                    <span> Categories</span>
                </a>
            </li>
            @endcan
            @can('products-list')
            <li>
                <a href="{{route('admin-products')}}">
                    <i class="nav-icon fa fa-product-hunt" aria-hidden="true"></i>
                    <span>Products</span>
                </a>
            </li>
            @endcan
            @can('roles-list')
            <li>
                <a href="{{route('admin-roles')}}">
                    <i class="nav-icon fa fa-sitemap" aria-hidden="true"></i>
                    <span>List of Roles</span>
                </a>
            </li>
            @endcan
            @can('employees-list')
            <li>
                <a href="{{route('admin-employees')}}">
                    <i class="nav-icon fa fa-user-md" aria-hidden="true"></i>
                    <span>List of employee</span>
                </a>
            </li>
            @endcan
            @can('orders-list')
            <li>
                <a href="{{route('admin-orders',['action'=>'wait_for_approval'])}}">
                    <i class="nav-icon fa fa-user-md" aria-hidden="true"></i>
                    <span>Orders</span>
                </a>
            </li>
            @endcan
            @can('permission-add')
            <li>
                <a href="{{route('admin-permission')}}">
                    <i class="nav-icon fa fa-plus-square" aria-hidden="true"></i>
                    <span>Add data permission</span>
                </a>
            </li>
            @endcan
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>