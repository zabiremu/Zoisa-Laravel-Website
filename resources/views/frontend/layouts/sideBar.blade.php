@php
    $data = App\Models\Category::latest()->get();
@endphp

<aside id="toggle-sidebar" class="mobile-navigation toggle-sidebar sidebar sidebar-2" aria-label="Blog Sidebar">
    <div class="toggle-sidebar-header">
        <div class="close-menu">
            <span><i class="fa-solid fa-xmark"></i></span><span class="close">close</span>
        </div>
    </div>

    <nav class="primary-nav-sidebar-wrapper">
        <ul id="primary-nav-sidebar" class="primary-nav-sidebar">
            <li id="menu-item-857"
                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-857">
                <a href="{{ route('home') }}"><span class="menu-label">Home</span></a></span>
            </li>
            @foreach ($data as $item)
                <li id="menu-item-859"
                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-859">
                    <a href="{{ route('category.page', $item->id) }}"><span
                            class="menu-label">{{ $item->name }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
    @php
        $social = App\Models\Social::first();
    @endphp
    <section id="tfm_social_widget-7" class="widget tfm_social_widget">
        <h3 class="widget-title">Follow Me</h3>
        <p class="widget-subtitle">social</p>
        <div class="tfm-social-icons-wrapper widget-wrapper has-title has-subtitle">
            <ul class="tfm-social-icons icon-background brand has-text has-round-icons">
                <li class="tfm-social-icon instagram">
                    <a href="{{ $social->instagram }}" class="tfm-social-url instagram" target="_blank"><span><i
                        class="fa-brands fa-instagram"></i></span><span class="tfm-social-name">instagram</span></a>
                </li>
                <li class="tfm-social-icon vkontakte">
                    <a href="{{ $social->facebook }}" class="tfm-social-url vkontakte" target="_blank"><span><i
                        class="fa-brands fa-facebook-f"></i></span><span class="tfm-social-name">Facebook</span></a>
                </li>
                <li class="tfm-social-icon reddit">
                    <a href="{{ $social->twitter }}" class="tfm-social-url reddit" target="_blank"><span><i
                        class="fa-brands fa-twitter"></i></span><span class="tfm-social-name">Twitter</span></a>
                </li>
                <li class="tfm-social-icon tiktok">
                    <a href="{{ $social->tiktok }}" class="tfm-social-url tiktok" target="_blank"><span><i
                        class="fa-brands fa-tiktok"></i></span><span class="tfm-social-name">TikTok</span></a>
                </li>
            </ul>
        </div>
    </section>
</aside>
