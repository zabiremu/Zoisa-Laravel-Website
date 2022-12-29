@extends('frontend.layouts.app')
@section('content')
    <header class="archive-header">
        <div class="archive-header-inner">
            <div class="archive-description-wrap">
                <div class="archive-title-section">
                    <span class="archive-subtitle post-count entry-meta">{{ $count }} Posts</span>
                    <h1 class="archive-title">Category: <span>{{ $cat->name }}</span></h1>
                </div>
                <div class="archive-description-section">
                    <div class="sub-categories">
                        <ul class="child-categories">
                            <li class="child-cat">
                                <a class="cat-link-3"
                                    href="{{ route('category.page',$subCat->id) }}">{{ $subCat->name }}
                                    <span class="tag-link-count child-post-count"> {{ $subCatCount }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tfm-featured-posts posts-3">
                <h5>FEATURED POSTS</h5>
                <div class="post-grid cols-3">
                    @foreach ($blog as $item)
                        <article class="article tfm-featured-posts-article has-author has-date">
                            <div class="post-thumbnail">
                                <a href="{{ route('blog.page',$item->id) }}"><img width="150" height="150" src="{{ asset($item->thumbail_url) }}"
                                        class="attachment-thumbnail size-thumbnail wp-post-image" alt=""
                                        loading="lazy" data-attachment-id="772"
                                        data-permalink="https://www.3forty.media/zosia/demo/assure-polite-his-really-and-others-figure-though/fen5/"
                                        data-orig-file="https://www.3forty.media/zosia/demo/wp-content/uploads/2022/03/fen5.jpg"
                                        data-orig-size="2000,2000" data-comments-opened="1"
                                        data-image-meta='{"aperture":"0","credit":"","camera":"","caption":"","created_timestamp":"0","copyright":"","focal_length":"0","iso":"0","shutter_speed":"0","title":"","orientation":"0"}'
                                        data-image-title="fen5" data-image-description="" data-image-caption=""
                                        data-medium-file="https://www.3forty.media/zosia/demo/wp-content/uploads/2022/03/fen5-300x300.jpg"
                                        data-large-file="https://www.3forty.media/zosia/demo/wp-content/uploads/2022/03/fen5-1024x1024.jpg" /></a>
                            </div>
                            <div class="entry-header">
                                <a href="{{ route('blog.page',$item->id) }}"
                                    rel="bookmark" class="entry-title-link">{{ $item->title }}</a>
                                <div class="entry-meta after-title">
                                    <ul class="after-title-meta">
                                        <li class="entry-meta-author">
                                            <span class="screen-reader-text">Posted</span><i dir="ltr">by</i>
                                            <a>{{ $item->author_name }}</a>
                                        </li>
                                        <li class="entry-meta-date">
                                            {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </header>

    <div class="wrap">
        <div class="wrap-inner">
            <main id="main" class="site-main has-pagination-prev-next">
                <div id="primary" class="content-area post-grid cols-1 list">
                    @foreach ($blogs as $item)
                        <article id="post-321"
                            class="faux-count-1 post-321 post type-post status-publish format-standard has-post-thumbnail hentry category-fashion tag-color tag-gutenberg has-tfm-read-time article has-background has-avatar has-author has-date has-comment-count has-category-meta has-read-more has-post-media thumbnail-wide default has-tfm-share-icons">
                            <div class="post-inner">
                                <div class="thumbnail-wrapper">
                                    <figure class="post-thumbnail">
                                        <a href="{{ route('blog.page',$item->id) }}">
                                            <img width="1024" height="1024" src="{{ asset($item->thumbail_url) }}"
                                                class="attachment-large size-large wp-post-image" alt=""
                                                loading="lazy"
                                                srcset=""
                                                sizes="(max-width: 1024px) 100vw, 1024px" data-attachment-id="770"
                                                data-permalink="https://www.3forty.media/zosia/demo/own-handsome-delicate-its-property-mistress/fen3/"
                                                data-orig-file="https://www.3forty.media/zosia/demo/wp-content/uploads/2022/03/fen3.jpg"
                                                data-orig-size="2000,2000" data-comments-opened="1"
                                                data-image-meta='{"aperture":"0","credit":"","camera":"","caption":"","created_timestamp":"0","copyright":"","focal_length":"0","iso":"0","shutter_speed":"0","title":"","orientation":"0"}'
                                                data-image-title="fen3" data-image-description="" data-image-caption=""
                                                data-medium-file="https://www.3forty.media/zosia/demo/wp-content/uploads/2022/03/fen3-300x300.jpg"
                                                data-large-file="https://www.3forty.media/zosia/demo/wp-content/uploads/2022/03/fen3-1024x1024.jpg" />
                                        </a>
                                    </figure>
                                </div>

                                <div class="entry-wrapper">
                                    <header class="entry-header">
                                        <div class="entry-header-section">
                                            <div class="formats-key"></div>

                                            <div class="entry-meta before-title">
                                                <span class="screen-reader-text">Categories</span>

                                                <ul class="post-categories-meta">
                                                    <li class="cat-slug-fashion cat-id-4">
                                                        <span class="screen-reader-text">Posted in</span><i
                                                            dir="ltr">in</i>
                                                        <a href="{{ route('category.page',$cat->id) }}" class="cat-link-4">{{ $cat->name }}</a>
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
                                                        <a><img alt="" src="" class="avatar avatar-40 photo"
                                                                height="40" width="40" loading="lazy" /></a>
                                                    </li>
                                                    <li class="entry-meta-author">
                                                        <span class="screen-reader-text">Posted by</span><i
                                                            dir="ltr">by</i>
                                                        <a>{{ $item->author_name }}</a>
                                                    </li>
                                                    <li class="entry-meta-date">
                                                        {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</li>
                                                    {{-- <li class="entry-meta-comment-count">
                                                        0<span> Comments</span>
                                                    </li> --}}
                                                    <li class="entry-meta-read-time">
                                                        {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="entry-meta after-title">
                                            <ul class="after-title-meta">
                                                <li class="entry-meta-avatar">
                                                    <a><img  alt="" src="{{ asset($item->author_img) }}"
                                                            class="avatar avatar-40 photo" height="40" width="40"
                                                            loading="lazy" /></a>
                                                </li>
                                                <li class="entry-meta-read-time">
                                                    {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</li>
                                                <li class="tfm-entry-meta-share">
                                                    <!-- share -->
                                                    <div class="tfm-share-wrapper top-bottom">
                                                        <div class="tfm-share">

                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </header>

                                    <ul class="entry-read-more">
                                        <li class="read-more-button">
                                            <a href="{{ route('blog.page',$item->id) }}"
                                                class="button read-more">Continue Reading</a>
                                        </li>

                                        <li class="entry-meta-read-time">
                                            {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</li>
                                    </ul>
                                </div>
                                <!-- .entry-wrapper -->
                            </div>
                            <!-- .post-inner -->
                        </article>
                    @endforeach
                </div>
            </main>

            <aside id="aside-sidebar" class="aside-sidebar sidebar sidebar-1" aria-label="Sidebar">
                <div class="aside-sticky-container">
                    <section id="tfm_posts_widget-2" class="widget tfm_posts_widget">
                        <h3 class="widget-title">Editors Picks</h3>
                        <p class="widget-subtitle">Chosen by the editor</p>
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
                                                    <a href="{{ route('category.page', $subCat->id) }}"
                                                        class="cat-link-6">{{ $subCat->name }}</a>
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
                    <section id="tfm_social_widget-3" class="widget tfm_social_widget">
                        <h3 class="widget-title">Follow Me</h3>
                        <p class="widget-subtitle">Join us</p>
                        <div class="tfm-social-icons-wrapper widget-wrapper has-title has-subtitle">
                            <ul class="tfm-social-icons icon-background brand has-text has-round-icons">
                                <li class="tfm-social-icon instagram">
                                    <a href="{{ $social->instagram }}" class="tfm-social-url instagram"
                                        target="_blank"><span><i class="fa-brands fa-instagram"></i></span><span
                                            class="tfm-social-name">Instagram</span></a>
                                </li>
                                <li class="tfm-social-icon vkontakte">
                                    <a href="{{ $social->facebook }}" class="tfm-social-url vkontakte"
                                        target="_blank"><span><i class="fa-brands fa-facebook-f"></i></span><span
                                            class="tfm-social-name">Facebook</span></a>
                                </li>
                                <li class="tfm-social-icon reddit">
                                    <a href="{{ $social->twitter }}" class="tfm-social-url reddit"
                                        target="_blank"><span><i class="fa-brands fa-twitter"></i></span><span
                                            class="tfm-social-name">Twitter</span></a>
                                </li>
                                <li class="tfm-social-icon tiktok">
                                    <a href="{{ $social->tiktok }}" class="tfm-social-url tiktok"
                                        target="_blank"><span><i class="fa-brands fa-tiktok"></i></span><span
                                            class="tfm-social-name">Tiktok</span></a>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </aside>
        </div>
        <!-- wrap-inner -->
    </div>
    <!-- .wrap -->
@endsection
