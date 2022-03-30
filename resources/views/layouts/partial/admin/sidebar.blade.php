<div class="sidebar">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
  -->
    <div class="sidebar-wrapper">
        <div class="logo">
            <x-jet-application-mark width="20" />
        </div>
        <ul class="nav">
            <li class="@if (Route::is('admin.dashboard')) active @endif ">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="@if (Route::is('admin.admins.*')) active @endif ">
                <a href="{{ route('admin.admins.index') }}">
                    <i class="tim-icons icon-molecule-40"></i>
                    <p>Administrators</p>
                </a>
            </li>
            <li class="@if (Route::is('admin.clients.*')) active @endif ">
                <a href="{{ route('admin.clients.index') }}">
                    <i class="tim-icons icon-satisfied"></i>
                    <p>Clients</p>
                </a>
            </li>
            <li class="@if (Route::is('admin.testimonials.*')) active @endif ">
                <a href="{{ route('admin.testimonials.index') }}">
                    <i class="tim-icons icon-paper"></i>
                    <p>Client's Testimonials</p>
                </a>
            </li>
            <li class="@if (Route::is('admin.skills.*')) active @endif ">
                <a href="{{ route('admin.skills.index') }}">
                    <i class="tim-icons icon-pencil"></i>
                    <p>Skills</p>
                </a>
            </li>
            <li class="@if (Route::is('admin.services.*')) active @endif ">
                <a href="{{ route('admin.services.index') }}">
                    <i class="tim-icons icon-paper"></i>
                    <p>Service Types</p>
                </a>
            </li>
            <li class="@if (Route::is('admin.projects.*')) active @endif ">
                <a href="{{ route('admin.projects.index') }}">
                    <i class="tim-icons icon-palette"></i>
                    <p>Projects</p>
                </a>
            </li>
            <li class="@if (Route::is('admin.blogs.*')) active @endif ">
                <a href="{{ route('admin.blogs.index') }}">
                    <i class="tim-icons icon-caps-small

                    "></i>
                    <p>Blog</p>
                </a>
            </li>


        </ul>
    </div>
</div>
