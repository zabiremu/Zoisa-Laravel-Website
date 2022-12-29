@extends('frontend.layouts.app')
@section('content')
    <div id="tfm-hero" class="tfm-hero post-grid carousel cols-4 slick has-post-thumbnails" data-slides="5" data-posts="5"
        data-slidestoshow="4" data-maxslides="4" data-thumbnail="large" data-aspectratio="square" data-initial-status="active"
        data-poststyle="cover" data-fullwidth="true" data-arrows="false" data-pagination="false" data-centermode="true"
        data-margins="true" data-autoplay-speed="2000" data-speed="500">
        @foreach ($blog as $item)
            <article
                class="post article hero-entry has-post-media has-post-thumbnail thumbnail-large thumbnail-square has-author has-avatar has-date has-comment-count has-category-meta has-background cover">
                <div class="post-inner">
                    <div class="thumbnail-wrapper">
                        <figure class="post-thumbnail">
                            <a href="{{ route('blog.page',$item->id) }}"><img width="1024" height="1024" src="{{ asset($item->thumbail_url) }}"
                                    class="attachment-large size-large wp-post-image" alt="" loading="lazy"
                                    srcset="" sizes="(max-width: 1024px) 100vw, 1024px" data-attachment-id="791"
                                    data-permalink="https://www.3forty.media/zosia/demo-2/2022/03/26/saw-how-marianne-graceful-dissuade-new-outlived/fen15/"
                                    data-orig-file="https://www.3forty.media/zosia/demo-2/wp-content/uploads/2022/03/fen15.jpg"
                                    data-orig-size="1968,1968" data-comments-opened="1"
                                    data-image-meta='{"aperture":"0","credit":"","camera":"","caption":"","created_timestamp":"0","copyright":"","focal_length":"0","iso":"0","shutter_speed":"0","title":"","orientation":"0"}'
                                    data-image-title="fen15" data-image-description="" data-image-caption=""
                                    data-medium-file="https://www.3forty.media/zosia/demo-2/wp-content/uploads/2022/03/fen15-300x300.jpg"
                                    data-large-file="https://www.3forty.media/zosia/demo-2/wp-content/uploads/2022/03/fen15-1024x1024.jpg" /></a>
                        </figure>
                    </div>

                    <div class="entry-wrapper">
                        <header class="entry-header">
                            <div class="entry-meta before-title">
                                <span class="screen-reader-text">Categories</span>
                                <ul class="post-categories-meta">
                                    <li class="cat-slug-lifestyle cat-id-3">
                                        <span class="screen-reader-text">Posted in</span><i dir="ltr">in</i>
                                        <a href="{{ route('category.page', $item->category->id) }}" class="cat-link-3" style="">{{ $item->category->name }}</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- .entry-meta -->

                            <h3 class="entry-title">
                                <a href="{{ route('blog.page',$item->id) }}" rel="bookmark">{{ $item->title }}</a>
                            </h3>

                            <div class="entry-meta after-title">
                                <ul class="after-title-meta">
                                    <li class="entry-meta-avatar">
                                        <a><img alt="" src="{{ asset($item->author_img) }}"
                                                class="avatar avatar-40 photo" height="40" width="40"
                                                loading="lazy" /></a>
                                    </li>
                                    <li class="entry-meta-author">
                                        <span class="screen-reader-text">Posted by</span><i dir="ltr">by</i>
                                        <a>{{ $item->name }}</a>
                                    </li>
                                    <li class="entry-meta-date">
                                        {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</li>
                                </ul>
                            </div>
                        </header>
                        <!-- .entry-header -->
                    </div>
                    <!-- .entry-wrapper -->
                </div>
                <!-- .post-inner -->
            </article>
            <!-- .hero-entry -->
        @endforeach
    </div>


    <div class="section-header home-title">
        <h2 class="page-title">Recent Entries</h2>
        <p class="sub-title">WHATS NEW</p>
    </div>



    <div class="wrap">
        <div class="wrap-inner">
            <main id="main" class="site-main has-pagination-prev-next">
                <div id="primary" class="content-area post-grid cols-2 grid">
                    @foreach ($blog as $item)
                        <article id="post-321"
                            class="faux-count-1 post-321 post type-post status-publish format-standard has-post-thumbnail sticky hentry category-fashion tag-color tag-gutenberg has-tfm-read-time article has-background has-excerpt has-avatar has-author has-date has-comment-count has-category-meta has-read-more has-post-media thumbnail-wide default has-tfm-share-icons">
                            <div class="post-inner">
                                <div class="thumbnail-wrapper">
                                    <figure class="post-thumbnail">
                                        <a
                                            href="{{ route('blog.page',$item->id) }}">
                                            <img width="768" height="768"
                                                src="{{ asset($item->thumbail_url) }}"
                                                class="attachment-medium_large size-medium_large wp-post-image"
                                                alt="" loading="lazy"
                                                srcset=""
                                                sizes="(max-width: 768px) 100vw, 768px" data-attachment-id="770"
                                                data-permalink="https://www.3forty.media/zosia/demo-2/2022/03/28/own-handsome-delicate-its-property-mistress/fen3/"
                                                data-orig-file="https://www.3forty.media/zosia/demo-2/wp-content/uploads/2022/03/fen3.jpg"
                                                data-orig-size="2000,2000" data-comments-opened="1"
                                                data-image-meta='{"aperture":"0","credit":"","camera":"","caption":"","created_timestamp":"0","copyright":"","focal_length":"0","iso":"0","shutter_speed":"0","title":"","orientation":"0"}'
                                                data-image-title="fen3" data-image-description="" data-image-caption=""
                                                data-medium-file="https://www.3forty.media/zosia/demo-2/wp-content/uploads/2022/03/fen3-300x300.jpg"
                                                data-large-file="https://www.3forty.media/zosia/demo-2/wp-content/uploads/2022/03/fen3-1024x1024.jpg" />
                                        </a>
                                    </figure>
                                </div>

                                <div class="entry-wrapper">
                                    <header class="entry-header">
                                        <div class="entry-header-section">
                                            <div class="formats-key">
                                                <span class="format-sticky"><i
                                                        class="icon-pin"></i><span>{{ $item->category->name }}</span></span>
                                            </div>

                                            <div class="entry-meta before-title">
                                                <span class="screen-reader-text">Categories</span>

                                                <ul class="post-categories-meta">
                                                    <li class="cat-slug-fashion cat-id-2">
                                                        <span class="screen-reader-text">Posted in</span><i
                                                            dir="ltr">in</i>
                                                        <a href="{{ route('category.page', $item->category->id) }}"
                                                            class="cat-link-2">{{ $item->category->name }}</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <h3 class="entry-title">
                                                <a href="{{ route('blog.page',$item->id) }}"
                                                    rel="bookmark">{{ $item->title }}</a>
                                            </h3>
                                            <div class="entry-meta tfm-meta">
                                                <ul class="after-title-meta tfm-after-title-meta">
                                                    <li class="entry-meta-avatar">
                                                        <a><img
                                                                alt=""
                                                                src="{{ asset($item->author_img) }}"
                                                                class="avatar avatar-40 photo" height="40"
                                                                width="40" loading="lazy" /></a>
                                                    </li>
                                                    <li class="entry-meta-author">
                                                        <span class="screen-reader-text">Posted by</span><i
                                                            dir="ltr">by</i>
                                                        <a>{{ $item->author_name }}</a>
                                                    </li>
                                                    <li class="entry-meta-date">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</li>
                                                    {{-- <li class="entry-meta-comment-count">
                                                        0<span> Comments</span>
                                                    </li> --}}
                                                    <li class="entry-meta-read-time">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</li>
                                                </ul>
                                            </div>
                                           
                                        </div>
                                        <div class="entry-meta after-title">
                                            <ul class="after-title-meta">
                                                <li class="entry-meta-avatar">
                                                    <a><img
                                                            alt=""
                                                            src="{{ $item->author_img }}"
                                                            class="avatar avatar-40 photo" height="40" width="40"
                                                            loading="lazy" /></a>
                                                </li>
                                                <li class="entry-meta-read-time">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</li>
                                            </ul>
                                        </div>
                                    </header>

                                    <div class="entry-content excerpt">
                                       {!! Str::limit($item->details,200,'...') !!}
                                    </div>

                                    <ul class="entry-read-more">
                                        <li class="read-more-button">
                                            <a href="{{ route('blog.page',$item->id) }}"
                                                class="button read-more">Continue Reading</a>
                                        </li>

                                        <li class="entry-meta-read-time">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</li>
                                    </ul>
                                </div>
                                <!-- .entry-wrapper -->
                            </div>
                            <!-- .post-inner -->
                        </article>
                    @endforeach

                    <nav class="navigation pagination" aria-label="Posts">
                        <h2 class="screen-reader-text">Posts navigation</h2>
                        <div class="nav-links">
                            <ul class="page-numbers">
                                <li>
                                    <span aria-current="page" class="page-numbers current">1</span>
                                </li>
                                <li>
                                    <a class="page-numbers" href="">2</a>
                                </li>
                                <li>
                                    <button class="next page-numbers"
                                        ><span>{{ $blog->links() }}</span></button>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!-- #primary -->
            </main>
            <!-- #main -->

            <aside id="aside-sidebar" class="aside-sidebar sidebar sidebar-1" aria-label="Sidebar">
                <div class="aside-sticky-container">
                    <section id="tfm_posts_widget-3" class="widget tfm_posts_widget">
                        <h3 class="widget-title">Editors Picks</h3>
                        <p class="widget-subtitle">TRENDING</p>
                        <ol class="list list-style-list has-post-thumbnails has-category-meta has-title has-subtitle has-author has-date round-thumbnails has-rating show-post-count recent-posts">
                            @foreach ($data as $item)
                            <li
                                class="widget-entry has-post-media has-post-thumbnail thumbnail-uncropped has-category-meta meta-items-2 default">
                                <div class="post-thumbnail">
                                    <a href="{{ route('blog.page',$item->id) }}">
                                        <img width="150" height="150" src=""
                                            class="attachment-thumbnail size-thumbnail wp-post-image" alt=""
                                            loading="lazy" srcset="{{ asset($item->thumbail_url) }}"
                                            sizes="(max-width: 150px) 100vw, 150px" data-attachment-id="766"
                                            data-permalink="https://www.3forty.media/zosia/demo/together-happy-feelings-continue-juvenile-one-had/fen1/"
                                            data-orig-file="https://www.3forty.media/zosia/demo/wp-content/uploads/2022/03/fen1.jpg"
                                            data-orig-size="1968,1968" data-comments-opened="1"
                                            data-image-meta='{"aperture":"0","credit":"","camera":"","caption":"","created_timestamp":"0","copyright":"","focal_length":"0","iso":"0","shutter_speed":"0","title":"","orientation":"0"}'
                                            data-image-title="fen1" data-image-description="" data-image-caption=""
                                            data-medium-file="https://www.3forty.media/zosia/demo/wp-content/uploads/2022/03/fen1-300x300.jpg"
                                            data-large-file="https://www.3forty.media/zosia/demo/wp-content/uploads/2022/03/fen1-1024x1024.jpg" />
                                    </a>
                                </div>

                                <div class="entry-header">
                                    <div class="entry-meta before-title">
                                        <ul class="post-categories-meta">
                                            <li class="cat-slug-travel cat-id-6">
                                                <a href="{{ route('category.page', $item->category->id) }}"
                                                    class="cat-link-6">{{ $item->category->name }}</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <a href="{{ route('blog.page',$item->id) }}"
                                        rel="bookmark" class="entry-title-link">{{ $item->title }}</a>

                                    <div class="entry-meta after-title meta-items-2">
                                        <ul class="after-title-meta">
                                            <li class="entry-meta-author">
                                                <span class="screen-reader-text">Posted</span>
                                                <a>{{ $item->author_name }}</a>
                                            </li>

                                            <li class="entry-meta-date">
                                                <time datetime="2022-03-28">
                                                    {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                                                </time>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                        </ol>
                    </section>
                    @php
                        $social = App\Models\Social::first();
                    @endphp
                    <section id="tfm_social_widget-5" class="widget tfm_social_widget">
                        <h3 class="widget-title">Follow Me</h3>
                        <p class="widget-subtitle">JOIN US</p>
                        <div class="tfm-social-icons-wrapper widget-wrapper has-title has-subtitle">
                            <ul class="tfm-social-icons icon-background brand has-round-icons">
                                <li class="tfm-social-icon instagram">
                                    <a href="{{ $social->instagram }}" class="tfm-social-url instagram"
                                        target="_blank"><span><i class="fa-brands fa-instagram"></i></span><span
                                            class="tfm-social-name"></span></a>
                                </li>
                                <li class="tfm-social-icon vkontakte">
                                    <a href="{{ $social->facebook }}" class="tfm-social-url vkontakte"
                                        target="_blank"><span><i class="fa-brands fa-facebook-f"></i></span><span
                                            class="tfm-social-name"></span></a>
                                </li>
                                <li class="tfm-social-icon reddit">
                                    <a href="{{ $social->twitter }}" class="tfm-social-url reddit"
                                        target="_blank"><span><i class="fa-brands fa-twitter"></i></span><span
                                            class="tfm-social-name"></span></a>
                                </li>
                                <li class="tfm-social-icon tiktok">
                                    <a href="{{ $social->tiktok }}" class="tfm-social-url tiktok"
                                        target="_blank"><span><i class="fa-brands fa-tiktok"></i></span><span
                                            class="tfm-social-name"></span></a>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </aside>
        </div>
        <!-- wrap-inner -->
    </div>
@endsection
