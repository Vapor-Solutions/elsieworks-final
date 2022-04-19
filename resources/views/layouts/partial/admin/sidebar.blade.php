<header class="main-nav">
    <div class="sidebar-user text-center">
        <a class="setting-primary" href="{{ route('profile.show') }}"><i data-feather="settings"></i></a>
        <img class="img-90 rounded-circle"
            src="{{ auth()->user()->profile_photo_path ?? auth()->user()->profile_photo_url }}" alt="" />
        {{-- <div class="badge-bottom"><span class="badge badge-primary">New</span></div> --}}
        <a href="user-profile">
            <h6 class="mt-3 f-14 f-w-600">{{ auth()->user()->name }}</h6>
        </a>

        {{-- @foreach (auth()->user()->roles as $role)
            <p class="mb-0 font-roboto">
                {{ $role->title }}
            </p>

        @endforeach --}}
        {{-- <ul>
            <li>
                <span><span class="counter">19.8</span>k</span>
                <p>Follow</p>
            </li>
            <li>
                <span>2 year</span>
                <p>Experince</p>
            </li>
            <li>
                <span><span class="counter">95.2</span>k</span>
                <p>Follower</p>
            </li>
        </ul> --}}
    </div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                @if (auth()->user()->is_admin && Route::is('admin*'))
                    <x-admin-links></x-admin-links>
                @endif
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
