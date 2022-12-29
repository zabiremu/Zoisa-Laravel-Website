@extends('frontend.layouts.app')
@section('content')
    <div class="wrap">
        <div class="single-hero-wrapper">
            <div class="single-hero hero-default" data-fullwidth="false" data-margins="true" data-thumbnails="true">
                <div
                    class="default post-319 post type-post status-publish format-standard has-post-thumbnail hentry category-beauty tag-beauty tag-fashion article has-avatar has-author has-date has-comment-count has-category-meta has-post-media thumbnail-wide hero-default">
                    <div class="post-inner">
                        <div class="thumbnail-wrapper">
                            <figure class="post-thumbnail has-figcaption">
                                <img width="2000" height="2000" src="{{ asset($blogDeatils->thumbail_url) }}"
                                    class="attachment-full size-full wp-post-image" alt="" loading="lazy"
                                    srcset="" sizes="(max-width: 2000px) 100vw, 2000px" data-attachment-id="771"
                                    data-permalink="https://www.3forty.media/zosia/demo/my-entrance-me-is-disposal-bachelor-remember-relation/fen4/"
                                    data-orig-file="https://www.3forty.media/zosia/demo/wp-content/uploads/2022/03/fen4.jpg"
                                    data-orig-size="2000,2000" data-comments-opened="1"
                                    data-image-meta='{"aperture":"0","credit":"","camera":"","caption":"","created_timestamp":"0","copyright":"","focal_length":"0","iso":"0","shutter_speed":"0","title":"","orientation":"0"}'
                                    data-image-title="fen4" data-image-description=""
                                    data-image-caption="&lt;p&gt;an image caption&lt;/p&gt;
"
                                    data-medium-file="https://www.3forty.media/zosia/demo/wp-content/uploads/2022/03/fen4-300x300.jpg"
                                    data-large-file="https://www.3forty.media/zosia/demo/wp-content/uploads/2022/03/fen4-1024x1024.jpg" />

                                <figcaption class="featured-media-caption">

                                </figcaption>
                            </figure>
                        </div>

                        <div class="entry-wrapper">
                            <header class="entry-header">
                                <div class="entry-meta before-title">
                                    <span class="screen-reader-text">Categories</span>

                                    <ul class="post-categories-meta">
                                        <li class="cat-slug-beauty cat-id-3">
                                            <span class="screen-reader-text">Posted in</span><i dir="ltr">in</i>
                                            <a href="{{ route('category.page', $blogDeatils->category->id) }}"
                                                class="cat-link-3">{{ $blogDeatils->category->name }}</a>
                                        </li>
                                    </ul>
                                </div>

                                <h1 class="entry-title">
                                    {{ $blogDeatils->title }}
                                </h1>
                                <div class="entry-meta after-title">
                                    <ul class="after-title-meta">
                                        <li class="entry-meta-avatar">
                                            <a><img alt="" src="{{ asset($blogDeatils->author_img) }}"
                                                    class="avatar avatar-60 photo" height="60" width="60"
                                                    loading="lazy" /></a>
                                        </li>
                                        <li class="entry-meta-author">
                                            <span class="screen-reader-text">Posted by</span><i dir="ltr">by</i>
                                            <a>{{ $blogDeatils->author_name }}</a>
                                        </li>
                                        <li class="entry-meta-date">
                                            {{ Carbon\Carbon::parse($blogDeatils->created_at)->diffForHumans() }}</li>
                                        {{-- <li class="entry-meta-comment-count">
                                            <a href="#comments">0<span> Comments</span></a>
                                        </li> --}}
                                    </ul>
                                </div>

                            </header>
                        </div>
                        <!-- .entry-wrapper -->
                    </div>
                    <!-- .post-inner -->
                </div>
                <!-- .article -->
            </div>
            <!-- .hero -->
        </div>
        <!-- .hero-wrapper -->
        <!-- share -->
        <div class="wrap-inner">
            <main id="main" class="site-main">
                <div id="primary" class="content-area the-post">
                    <article id="post-319"
                        class="faux-count- post-319 post type-post status-publish format-standard has-post-thumbnail hentry category-beauty tag-beauty tag-fashion article has-avatar has-author has-date has-comment-count has-category-meta has-post-media thumbnail-wide hero-default">
                        <div class="post-inner">
                            <div class="entry-wrapper">
                                <div class="single-content-wrapper">
                                    <div class="entry-content">
                                        <p>
                                            {!! $blogDeatils->details !!}
                                        </p>

                                        <figure
                                            data-carousel-extra='{"blog_id":1,"permalink":"https:\/\/www.3forty.media\/zosia\/demo\/my-entrance-me-is-disposal-bachelor-remember-relation\/"}'
                                            class="wp-container-2 wp-block-gallery-1 wp-block-gallery alignwide has-nested-images columns-default is-cropped">
                                            @foreach ($multiImage as $item)
                                                <figure class="wp-block-image size-large">
                                                    <img src="{{ asset($item->multi_Image_url) }}" data-attachment-id="776"
                                                        data-permalink=""
                                                        data-orig-file="https://www.3forty.media/zosia/demo/wp-content/uploads/2022/03/fen8.jpg"
                                                        data-orig-size="2000,2000" data-comments-opened="1"
                                                        data-image-meta='{"aperture":"0","credit":"","camera":"","caption":"","created_timestamp":"0","copyright":"","focal_length":"0","iso":"0","shutter_speed":"0","title":"","orientation":"0"}'
                                                        data-image-title="fen8" data-image-description=""
                                                        data-image-caption=""
                                                        data-medium-file="https://www.3forty.media/zosia/demo/wp-content/uploads/2022/03/fen8-300x300.jpg"
                                                        data-large-file="https://www.3forty.media/zosia/demo/wp-content/uploads/2022/03/fen8-1024x1024.jpg"
                                                        loading="lazy" width="1024" height="1024" data-id="776"
                                                        src="https://www.3forty.media/zosia/demo/wp-content/uploads/2022/03/fen8-1024x1024.jpg"
                                                        alt="" class="wp-image-776" srcset=" "
                                                        sizes="(max-width: 1024px) 100vw, 1024px" />
                                                </figure>
                                            @endforeach
                                        </figure>

                                    </div>
                                    <!-- .entry-content -->
                                </div>
                                <!-- .single-content-wrapper -->
                            </div>
                            <!-- .entry-wrapper -->
                        </div>
                        <!-- .post-inner -->
                    </article>

                    <div class="after-content">
                        <div class="author-bio">
                            <div class="author-bio-inner">
                                <div class="author-avatar">
                                    <a>
                                        <img alt="" src="{{ asset($blogDeatils->author_img) }}" srcset=""
                                            class="avatar avatar-120 photo" height="120" width="120"
                                            loading="lazy" />
                                    </a>
                                </div>
                                <div class="author-description">
                                    <span class="entry-meta">Written by</span>
                                    <h4 class="page-title author-bio-name">
                                        <a>{{ $blogDeatils->author_name }}</a>
                                    </h4>
                                    @php
                                        $social = App\Models\Social::first();
                                    @endphp
                                </div>
                                <div class="tfm-author-social">
                                    <ul class="tfm-social-icons icon brand has-text">
                                        <li class="tfm-social-icon twitter">
                                            <a href="{{ $social->twitter }}" class="tfm_author_meta_twitter"
                                                target="_blank"><span><i class="fa-brands fa-twitter"></i></span><span
                                                    class="tfm-social-name">Twitter</span></a>
                                        </li>
                                        <li class="tfm-social-icon facebook">
                                            <a href="{{ $social->facebook }}" class="tfm_author_meta_facebook"
                                                target="_blank"><span><i class="fa-brands fa-facebook-f"></i></span><span
                                                    class="tfm-social-name">Facebook</span></a>
                                        </li>
                                        <li class="tfm-social-icon discord">
                                            <a href="{{ $social->instagram }}" class="tfm_author_meta_discord"
                                                target="_blank"><span><i class="fa-brands fa-instagram"></i></span><span
                                                    class="tfm-social-name">Instagram</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="content-area post-grid tfm-related-posts cols-1 has-title list"
                            data-poststyle="default" data-slides="3" data-posts="3" data-thumbnail=" thumbnail-wide">
                            <div class="section-header related-posts-header">
                                <h2 class="page-title">You might also like</h2>
                                <p class="sub-title">BEFORE YOU GO</p>
                            </div>
                            @foreach ($blogs as $item)
                                <article
                                    class="post article has-author has-date has-comment-count has-category-meta default has-background has-post-media has-post-thumbnail thumbnail-wide">
                                    <div class="post-inner">
                                        <div class="thumbnail-wrapper">
                                            <figure class="post-thumbnail">
                                                <a href="{{ route('blog.page', $item->id) }}">
                                                    <img width="768" height="768"
                                                        src="{{ asset($item->thumbail_url) }}"
                                                        class="attachment-medium_large size-medium_large wp-post-image"
                                                        alt="" loading="lazy" srcset=""
                                                        sizes="(max-width: 768px) 100vw, 768px" data-attachment-id="777"
                                                        data-permalink="https://www.3forty.media/zosia/demo/songs-in-oh-other-avoid-it-hours-woman-style/fen9/"
                                                        data-orig-file="https://www.3forty.media/zosia/demo/wp-content/uploads/2022/03/fen9.jpg"
                                                        data-orig-size="1968,1968" data-comments-opened="1"
                                                        data-image-meta='{"aperture":"0","credit":"","camera":"","caption":"","created_timestamp":"0","copyright":"","focal_length":"0","iso":"0","shutter_speed":"0","title":"","orientation":"0"}'
                                                        data-image-title="fen9" data-image-description=""
                                                        data-image-caption=""
                                                        data-medium-file="https://www.3forty.media/zosia/demo/wp-content/uploads/2022/03/fen9-300x300.jpg"
                                                        data-large-file="https://www.3forty.media/zosia/demo/wp-content/uploads/2022/03/fen9-1024x1024.jpg" />
                                                </a>
                                            </figure>
                                        </div>

                                        <div class="entry-wrapper">
                                            <div class="entry-header">
                                                <div class="entry-header-section">
                                                    <div class="entry-meta before-title">
                                                        <span class="screen-reader-text">Categories</span>
                                                        <ul class="post-categories-meta">
                                                            <li class="cat-slug-travel cat-id-6">
                                                                <span class="screen-reader-text">Posted in</span><i
                                                                    dir="ltr">in</i>
                                                                <a href="{{ route('category.page', $item->category_id) }}"
                                                                    class="cat-link-6"
                                                                    style="">{{ $item->category->name }}</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- .entry-meta -->

                                                    <h3 class="entry-title">
                                                        <a href="{{ route('blog.page', $item->id) }}"
                                                            rel="bookmark">{{ $item->title }}</a>
                                                    </h3>

                                                    <div class="entry-meta tfm-meta">
                                                        <ul class="after-title-meta tfm-after-title-meta">
                                                            <li class="entry-meta-author">
                                                                <span class="screen-reader-text">Posted by</span><i
                                                                    dir="ltr">by</i>
                                                                <a>{{ $item->author_name }}</a>
                                                            </li>
                                                            <li class="entry-meta-date">
                                                                {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                                                            </li>
                                                            <li class="entry-meta-comment-count">
                                                                0<span> Comments</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="entry-meta after-title">
                                                    <ul class="after-title-meta"></ul>
                                                </div>
                                            </div>
                                            <!-- .entry-header -->
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        </div>

                        <div class="content-area post-navigation post-grid grid cols-2 has-header">
                            <div class="section-header">
                                <h2>More Reading</h2>
                            </div>
                            <h2 class="screen-reader-text">Post navigation</h2>

                            @foreach ($blog as $item)
                                <article
                                    class="article post previous-article has-category-meta has-background has-post-media has-post-thumbnail thumbnail-wide default">
                                    <div class="post-inner">
                                        <div class="thumbnail-wrapper">
                                            <figure class="post-thumbnail">
                                                <a href="{{ route('blog.page', $item->id) }}"><img width="768"
                                                        height="768" src="{{ asset($item->thumbail_url) }}"
                                                        class="attachment-medium_large size-medium_large wp-post-image"
                                                        alt="" loading="lazy" srcset=" "
                                                        sizes="(max-width: 768px) 100vw, 768px" data-attachment-id="772"
                                                        data-permalink="https://www.3forty.media/zosia/demo/assure-polite-his-really-and-others-figure-though/fen5/"
                                                        data-orig-file="https://www.3forty.media/zosia/demo/wp-content/uploads/2022/03/fen5.jpg"
                                                        data-orig-size="2000,2000" data-comments-opened="1"
                                                        data-image-meta='{"aperture":"0","credit":"","camera":"","caption":"","created_timestamp":"0","copyright":"","focal_length":"0","iso":"0","shutter_speed":"0","title":"","orientation":"0"}'
                                                        data-image-title="fen5" data-image-description=""
                                                        data-image-caption=""
                                                        data-medium-file="https://www.3forty.media/zosia/demo/wp-content/uploads/2022/03/fen5-300x300.jpg"
                                                        data-large-file="https://www.3forty.media/zosia/demo/wp-content/uploads/2022/03/fen5-1024x1024.jpg" /></a>
                                            </figure>
                                        </div>
                                        <div class="entry-wrapper">
                                            <header class="entry-header">
                                                <div class="entry-meta before-title">
                                                    <ul class="post-categories-meta">
                                                        <li class="cat-slug-beauty cat-id-3">
                                                            <span class="screen-reader-text">Posted in</span><i
                                                                dir="ltr">in</i>
                                                            <a href="{{ route('category.page', $item->category_id) }}"
                                                                class="cat-link-3">{{ $item->category->name }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <h3 class="entry-title">
                                                    <a href="{{ route('blog.page', $item->id) }}">{{ $item->title }}</a>
                                                </h3>
                                                <div class="entry-meta after-title">
                                                    <span class="prev-next prev">Previous Post</span>
                                                </div>
                                            </header>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                       </div>

                        {{-- <div class="section-header comments-header">
                            <h2 class="page-title toggle-comments button">
                                <span> Leave a Comment</span>
                            </h2>
                        </div>
                        <div id="comments" class="comments-area closed">
                            <div class="comments-container">
                                <div id="respond" class="comment-respond">
                                    <h3 id="reply-title" class="comment-reply-title">
                                        Leave a Reply
                                        <small><a rel="nofollow" id="cancel-comment-reply-link"
                                                href="/zosia/demo/my-entrance-me-is-disposal-bachelor-remember-relation/#respond"
                                                style="display: none">Cancel reply</a></small>
                                    </h3>
                                    <form action="https://www.3forty.media/zosia/demo/wp-comments-post.php" method="post"
                                        id="commentform" class="comment-form" novalidate>
                                        <p class="comment-notes">
                                            <span id="email-notes">Your email address will not be published.</span>
                                            <span class="required-field-message" aria-hidden="true">Required fields are
                                                marked
                                                <span class="required" aria-hidden="true">*</span></span>
                                        </p>
                                        <p class="comment-form-comment">
                                            <label for="comment">Comment
                                                <span class="required" aria-hidden="true">*</span></label>
                                            <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required></textarea>
                                        </p>
                                        <p class="comment-form-author">
                                            <label for="author">Name
                                                <span class="required" aria-hidden="true">*</span></label>
                                            <input id="author" name="author" type="text" value=""
                                                size="30" maxlength="245" required />
                                        </p>
                                        <p class="comment-form-email">
                                            <label for="email">Email
                                                <span class="required" aria-hidden="true">*</span></label>
                                            <input id="email" name="email" type="email" value=""
                                                size="30" maxlength="100" aria-describedby="email-notes" required />
                                        </p>
                                        <p class="comment-form-url">
                                            <label for="url">Website</label>
                                            <input id="url" name="url" type="url" value=""
                                                size="30" maxlength="200" />
                                        </p>
                                        <p class="comment-form-cookies-consent">
                                            <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent"
                                                type="checkbox" value="yes" />
                                            <label for="wp-comment-cookies-consent">Save my name, email, and website in
                                                this browser for
                                                the next time I comment.</label>
                                        </p>
                                        <p class="form-submit">
                                            <input name="submit" type="submit" id="submit" class="submit"
                                                value="Post Comment" />
                                            <input type="hidden" name="comment_post_ID" value="319"
                                                id="comment_post_ID" />
                                            <input type="hidden" name="comment_parent" id="comment_parent"
                                                value="0" />
                                        </p>
                                    </form>
                                </div>
                                <!-- #respond -->
                            </div>
                        </div> --}}
                        <!-- #comments -->
                    </div>
                </div>
                <!-- #primary -->
            </main>
            <!-- #main -->

            <aside id="aside-sidebar" class="aside-sidebar sidebar sidebar-1" aria-label="Sidebar">
                <div class="aside-sticky-container">
                    <section id="tfm_posts_widget-2" class="widget tfm_posts_widget">
                        <h3 class="widget-title">Editors Picks</h3>
                        <p class="widget-subtitle">Chosen by the editor</p>
                        <ol
                            class="list list-style-list has-post-thumbnails has-category-meta has-title has-subtitle has-author has-date round-thumbnails has-rating show-post-count recent-posts">
                            @foreach ($data as $item)
                                <li
                                    class="widget-entry has-post-media has-post-thumbnail thumbnail-uncropped has-category-meta meta-items-2 default">
                                    <div class="post-thumbnail">
                                        <a href="{{ route('blog.page', $item->id) }}">
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

                                        <a href="{{ route('blog.page', $item->id) }}" rel="bookmark"
                                            class="entry-title-link">{{ $item->title }}</a>

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
