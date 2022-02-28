<div class="sidebar">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
  -->
    <div class="sidebar-wrapper">
        <div class="logo">
            <x-jet-application-mark width="20" />
        </div>
        <ul class="nav">
            <li class="@if (Route::is('admin.dashboard'))
        active
        @endif ">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="@if (Route::is('admin.admins.*'))
        active
        @endif ">
                <a href="{{ route('admin.admins.index') }}">
                    <i class="tim-icons icon-molecule-40"></i>
                    <p>Administrators</p>
                </a>
            </li>
            <li class="@if (Route::is('admin.clients.*'))
        active
        @endif ">
                <a href="{{ route('admin.clients.index') }}">
                    <i class="tim-icons icon-satisfied"></i>
                    <p>Clients</p>
                </a>
            </li>
            <li class="@if (Route::is('admin.portfolios.*'))
        active
        @endif ">
                <a href="{{ route('admin.portfolios.index') }}">
                    <i class="tim-icons icon-align-center"></i>
                    <p>Portfolio</p>
                </a>
            </li>
            <li class="@if (Route::is('admin.blogs.*'))
        active
        @endif ">
                <a href="{{ route('admin.blogs.index') }}">
                    <i class="tim-icons icon-caps-small

                    "></i>
                    <p>Blog</p>
                </a>
            </li>
             

        </ul>
    </div>
</div>
