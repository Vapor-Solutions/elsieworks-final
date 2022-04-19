<div>
    <ul class="nav-menu custom-scrollbar">
        <li class="back-btn">
            <div class="mobile-back text-end"><span>Back</span><i class="fas fa-angle-right ps-2" aria-hidden="true"></i>
            </div>
        </li>
        <li class="sidebar-main-title">
            <div>
                <h6>General</h6>
            </div>
        </li>
        <li class="dropdown">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <i data-feather="home"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="dropdown  @if (Route::is('admin.admins.*')) active @endif ">
            <a class="nav-link menu-title" href="javascript:void(0)">
                <i data-feather="compass"></i>
                <span>Administrators</span>
            </a>
            <ul class="nav-submenu menu-content"
                style="display: {{ Request::is('admin/admins/*') ? 'block' : 'none' }}">
                <li>
                    <a href="{{ route('admin.admins.index') }}"
                        class="{{ Route::currentRouteName() == 'admin.admins.index' ? 'active' : '' }}">
                        List of Administrators
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.admins.create') }}"
                        class="{{ Route::currentRouteName() == 'admin.admins.create' ? 'active' : '' }}">
                        Add a new Administrator
                    </a>
                </li>
            </ul>
        </li>
        <li class="dropdown @if (Route::is('admin.clients.*')) active @endif ">
                <a class=" nav-link" href="{{ route('admin.clients.index') }}">
            <i data-feather="users"></i>
            <span>Clients</span>
            </a>
        </li>
        <li class="dropdown  @if (Route::is('admin.testimonials.*')) active @endif ">
            <a class="nav-link menu-title" href="javascript:void(0)">
                <i data-feather="compass"></i>
                <span>Clients' Testimonials</span>
            </a>
            <ul class="nav-submenu menu-content"
                style="display: {{ Request::is('admin/testimonials/*') ? 'block' : 'none' }}">
                <li>
                    <a href="{{ route('admin.testimonials.index') }}"
                        class="{{ Route::currentRouteName() == 'admin.testimonials.index' ? 'active' : '' }}">
                        List of Testimonials Made
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.testimonials.create') }}"
                        class="{{ Route::currentRouteName() == 'admin.testimonials.create' ? 'active' : '' }}">
                        Add a new Testimonial
                    </a>
                </li>
            </ul>
        </li>
        <li class="dropdown" class=" @if (Route::is('admin.services.*')) active @endif ">
                <a class=" nav-link" href="{{ route('admin.services.index') }}">
            <i data-feather="home"></i>
            <span>Services Offered</span>
            </a>
        </li>
        <li class="dropdown" class=" @if (Route::is('admin.service_categories.*')) active @endif ">
                <a class=" nav-link" href="{{ route('admin.service_categories.index') }}">
            <i data-feather="home"></i>
            <span>Service Categories</span>
            </a>
        </li>
        <li class="dropdown" class=" @if (Route::is('admin.rates.*')) active @endif ">
                <a class=" nav-link" href="{{ route('admin.rates.index') }}">
            <i data-feather="home"></i>
            <span>Rates and Packages</span>
            </a>
        </li>
        <li class="dropdown" class=" @if (Route::is('admin.projects.*')) active @endif ">
                <a class=" nav-link" href="{{ route('admin.projects.index') }}">
            <i data-feather="home"></i>
            <span>Projects</span>
            </a>
        </li>
        <li class="dropdown" class=" @if (Route::is('admin.payments.*')) active @endif ">
                <a class=" nav-link" href="{{ route('admin.payments.index') }}">
            <i data-feather="home"></i>
            <span>Payments<span class="badge rounded-pill bg-primary">coming soon</span></span>
            </a>
        </li>
        <li class="dropdown" class=" @if (Route::is('admin.blogs.*')) active @endif ">
                <a class=" nav-link" href="{{ route('admin.blogs.index') }}">
            <i data-feather="home"></i>
            <span>Blog Posts</span>
            </a>
        </li>
        <li class="dropdown" class=" @if (Route::is('admin.contacts.*')) active @endif ">
                <a class=" nav-link" href="{{ route('admin.contacts.index') }}">
            <i data-feather="home"></i>
            <span>Contacts</span>
            </a>
        </li>


    </ul>
</div>
