<div class="sidebar border border-right col-md-3 col-lg-2 p-0">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">املاک جرقه</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="بستن"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" disabled>
                        <img src="{{ Voyager::image(Auth::user()->avatar) }}" class="rounded" width="40px" alt="{{ Auth::user()->name }}">
                        {{ Auth::user()->name }}
                    </a>
                </li>
            </ul>
            <hr>
            <ul class="nav flex-column">
                @can('browse_admin')
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2" aria-current="page" href="{{ route('voyager.dashboard') }}" target="_blank">
                            <svg class="bi"><use xlink:href="#gear-wide-connected"/></svg>
                            پنل اصلی
                        </a>
                    </li>
                @endcan
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" aria-current="page" href="{{ route('home') }}">
                        <svg class="bi"><use xlink:href="#house-fill"/></svg>
                        داشبورد
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{ route('file.index') }}">
                        <svg class="bi"><use xlink:href="#file-earmark"/></svg>
                        فایل ها
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{ route('user') }}">
                        <svg class="bi"><use xlink:href="#people"></use></svg>
                        کاربران
                    </a>
                </li>
            </ul>
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
                <span>ویژگی ها</span>
            </h6>
            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{ route('search') }}">
                        <svg class="bi"><use xlink:href="#search"/></svg>
                        جستجو
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{ route('comision') }}">
                        <svg class="bi"><use xlink:href="#file-earmark-text"/></svg>
                        درباره ما
                    </a>
                </li>
            </ul>
            <hr>
            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="#"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <svg class="bi"><use xlink:href="#door-closed"/></svg>
                        خروج
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
            <br>
        </div>
    </div>
</div>
