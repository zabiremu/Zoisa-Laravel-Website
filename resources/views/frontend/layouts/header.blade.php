@php
    $social = App\Models\Social::first();
@endphp
<header id="site-header"
    class="site-header logo-split-menu sticky-nav has-toggle-menu has-toggle-search has-primary-nav has-secondary-nav has-split-menu-left has-split-menu-right has-tfm-social-icons">
    <div class="mobile-header">
        <div class="header-section header-left">
            <div class="toggle toggle-menu mobile-toggle">
                <span><i class="fa-solid fa-bars"></i></span><span class="screen-reader-text">Menu</span>
            </div>
        </div>

        <div class="site-logo faux-heading">
            <a href="{{ route('home') }}" rel="home"><img
                    src="https://www.3forty.media/zosia/demo-2/wp-content/uploads/2022/09/zosia-logo.png" alt="Zosia"
                    class="custom-logo" width="120" /></a>
        </div>
        <div class="header-section header-right">
            <div class="toggle toggle-search mobile-toggle search">
                <span><i class="icon-tfm-search"></i></span><span class="screen-reader-text">Search</span>
            </div>
        </div>
    </div>

    <div class="header-layout-wrapper">
        <div class="header-section header-left">
            <div class="toggle toggle-menu">
                <span><i class="fa-solid fa-bars"></i></span><span class="screen-reader-text">Menu</span>
            </div>

            <div class="tfm-social-icons-wrapper header-social">
                <ul class="tfm-social-icons icon theme has-round-icons">
                    <li class="tfm-social-icon instagram">
                        <a href="{{ $social->instagram }}" class="tfm-social-url instagram" target="_blank"><span><i
                                    class="fa-brands fa-instagram"></i></span><span class="tfm-social-name"></span></a>
                    </li>
                    <li class="tfm-social-icon vkontakte">
                        <a href="{{ $social->facebook }}" class="tfm-social-url vkontakte" target="_blank"><span><i
                                    class="fa-brands fa-facebook-f"></i></span><span class="tfm-social-name"></span></a>
                    </li>
                    <li class="tfm-social-icon reddit">
                        <a href="{{ $social->twitter }}" class="tfm-social-url reddit" target="_blank"><span><i
                                    class="fa-brands fa-twitter"></i></span><span class="tfm-social-name"></span></a>
                    </li>
                    <li class="tfm-social-icon tiktok">
                        <a href="{{ $social->tiktok }}" class="tfm-social-url tiktok" target="_blank"><span><i
                                    class="fa-brands fa-tiktok"></i></span><span class="tfm-social-name"></span></a>
                    </li>
                </ul>
            </div>
            <nav class="split-menu split-menu-left-wrapper">
                <ul id="split-menu-left" class="primary-menu split-menu-left">
                    <li id="menu-item-779"
                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-779">
                        <a href="{{ route('home') }}"><span class="menu-label">Home</span></a>
                    </li>
                    @php
                        $data = App\Models\Category::where('left_side', '1')
                            ->select('id', 'name')
                            ->latest()
                            ->get();
                    @endphp

                    @foreach ($data as $item)
                        <li id="menu-item-786"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-786">
                            <a href="{{ route('category.page', $item->id) }}"><span
                                    class="menu-label">{{ $item->name }}</span></a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>

        <div class="header-branding">
            <h1 class="site-logo">
                <a href="{{ route('home') }}" rel="home"><img
                        src="https://www.3forty.media/zosia/demo-2/wp-content/uploads/2022/09/zosia-logo.png"
                        alt="Zosia" class="custom-logo" width="120" /></a><span
                    class="screen-reader-text">Zosia</span>
            </h1>
        </div>

        <div class="header-section header-right">
            <nav class="split-menu split-menu-right-wrapper">
                <ul id="split-menu-right" class="primary-menu split-menu-right">
                    @php
                        $data = App\Models\Category::where('right_side', '2')
                            ->select('id', 'name')
                            ->latest()
                            ->get();
                    @endphp

                    @foreach ($data as $item)
                        <li id="menu-item-786"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-786">
                            <a href="{{ route('category.page', $item->id) }}"><span
                                    class="menu-label">{{ $item->name }}</span></a>
                        </li>
                    @endforeach
                </ul>
            </nav>

            <div class="toggle toggle-search search">
                <span><i class="fa-solid fa-magnifying-glass"></i></span><span class="screen-reader-text">Search</span>
            </div>

            <div class="header-secondary-menu-wrapper">
                <ul id="header-secondary" class="primary-menu header-secondary">
                    
                </ul>
            </div>
        </div>
    </div>
</header>
