<aside class="bg-black main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/admin/dashboard') }}" class="text-white bg-pink-700 brand-link">
        <span class="brand-text font-weight-bold">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-3">
            <ul class="text-sm nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <!-- Post New Escort Ad -->
                <li class="nav-item">
                    <a href="{{ route('escorts.create') }}" class="text-white nav-link hover:bg-pink-700">
                        <i class="text-pink-400 nav-icon fas fa-plus-circle"></i>
                        <p>Post New Escort Ad</p>
                    </a>
                </li>



                <li class="nav-item">
                    <a href="{{ route('beaches.index') }}" class="text-white nav-link hover:bg-pink-700">
                        <i class="text-blue-400 nav-icon fas fa-umbrella-beach"></i>
                        <p>City List</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('beaches.create') }}" class="text-white nav-link hover:bg-pink-700">
                        <i class="text-green-400 nav-icon fas fa-plus-circle"></i>
                        <p>Add City </p>
                    </a>
                </li>


                <!-- All Escorts -->
                <li class="nav-item">
                    <a href="{{ route('admin.escorts.index') }}" class="text-white nav-link hover:bg-pink-700">
                        <i class="text-pink-400 nav-icon fas fa-list"></i>
                        <p>All Escorts</p>
                    </a>
                </li>

                <!-- Add VIP Escort -->
                <li class="nav-item">
                    <a href="{{ route('escorts.create', ['vip' => true]) }}"
                        class="text-white nav-link hover:bg-pink-700">
                        <i class="text-yellow-400 nav-icon fas fa-star"></i>
                        <p>Add VIP Escort</p>
                    </a>
                </li>

  <!-- Pages Menu Accordion -->
                <li class="nav-item has-treeview">
                    <a href="#" class="text-white nav-link">
                        <i class="text-yellow-400 nav-icon fas fa-copy"></i>
                        <p>
                       Blogs Page
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('blogss.create') }}" class="text-white nav-link">
                                <i class="nav-icon fas fa-list text-cyan-400"></i>
                                <p>Blog Create</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <!-- Pages Menu Accordion -->
                <li class="nav-item has-treeview">
                    <a href="#" class="text-white nav-link">
                        <i class="text-yellow-400 nav-icon fas fa-copy"></i>
                        <p>
                            Pages
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('pages.index') }}" class="text-white nav-link">
                                <i class="nav-icon fas fa-list text-cyan-400"></i>
                                <p>View All Pages</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.create') }}" class="text-white nav-link">
                                <i class="text-green-400 nav-icon fas fa-plus-circle"></i>
                                <p>Add New Page</p>
                            </a>
                        </li>
                    </ul>
                </li>



                <!-- Logout -->
                <li class="mt-4 nav-item">
                    <form action="{{ route('logout') }}" method="POST" class="p-0 nav-link">
                        @csrf
                        <button type="submit"
                            class="text-left text-red-500 btn btn-block hover:bg-red-600 hover:text-white">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p class="ml-2 d-inline">Logout</p>
                        </button>
                    </form>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
