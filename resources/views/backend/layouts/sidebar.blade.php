<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="index.html">
                <img src="{{ asset('backend/assets/images/brand/logo.png') }}" class="header-brand-img desktop-logo"
                    alt="logo">
                <img src="{{ asset('backend/assets/images/brand/logo-1.png') }}" class="header-brand-img toggle-logo"
                    alt="logo">
                <img src="{{ asset('backend/assets/images/brand/logo-2.png') }}" class="header-brand-img light-logo"
                    alt="logo">
                <img src="{{ asset('backend/assets/images/brand/logo-3.png') }}" class="header-brand-img light-logo1"
                    alt="logo">
            </a><!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg>
            </div>
            <ul class="side-menu">
                <li>
                    <h3>Home Page</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ route('admin.dashboard') }}">
                        <i class="side-menu__icon fa-solid fa-house-user"></i>
                        <span class="side-menu__label">Dashboard</span>
                    </a>
                </li>
                @role('admin')
                    <li class="slide">
                        <a class="side-menu__item" data-bs-toggle="slide" href="#">
                            <i class="fa-solid fa-up-right-from-square side-menu__icon"></i>
                            <span class="side-menu__label">Social Media</span><i class="angle fa fa-angle-right"></i>
                        </a>
                        <ul class="slide-menu">
                            <li class="side-menu-label1"><a href="javascript:void(0)">Forms</a></li>
                            <li><a href="{{ route('view.social') }}" class="slide-item">Social Media Link</a></li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-bs-toggle="slide" href="#">
                            <i class="fa-solid fa-up-right-from-square side-menu__icon"></i>
                            <span class="side-menu__label">Category</span><i class="angle fa fa-angle-right"></i>
                        </a>
                        <ul class="slide-menu">
                            <li class="side-menu-label1"><a href="javascript:void(0)">Forms</a></li>
                            <li><a href="{{ route('category.view') }}" class="slide-item">All Category</a></li>
                            <li><a href="{{ route('create.category') }}" class="slide-item">Create Category</a></li>
                        </ul>
                    </li>
                @endrole
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <i class="fa-solid fa-up-right-from-square side-menu__icon"></i>
                        <span class="side-menu__label">Blog Posts</span><i class="angle fa fa-angle-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Forms</a></li>
                        <li><a href="{{ route('all.blogs') }}" class="slide-item">All Blog Posts</a></li>
                        <li><a href="{{ route('create.blogs') }}" class="slide-item">Create Blog Post</a></li>
                    </ul>
                </li>
                @role('admin')
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <i class="fa-solid fa-up-right-from-square side-menu__icon"></i>
                        <span class="side-menu__label">SubScriber</span><i class="angle fa fa-angle-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Forms</a></li>
                        <li><a href="{{ route('all.subscriber') }}" class="slide-item">All SubScriber</a></li>
                    </ul>
                </li>
                @endrole
            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg>
            </div>
        </div>
    </div>
</div>
