@extends('layouts.frontend')

@section('page-navbar')
@includeIf('layouts.page-navbar')
@endsection

@section('page-content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    @section('breadcrumb')
    @includeIf('layouts.breadcrumb', ['title' => 'Blog', 'subtitle' => 'Blog'])
    @endsection
    <!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <span>Welcome to our Blog</span>
                <h2>Blog</h2>
                <p>Stay updated with our lastest information and news.</p>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-lg-9 content-area">
                    @foreach ($blogs as $blogs)
                        <!-- ttm-blog-classic -->
                        <article class="post ttm-blog-classic clearfix">
                            <div class="ttm-blog-classic-content">
                                <div class="entry-content">
                                    <div class="ttm-post-catagory">
                                        <span><a>{{ $blogs->category }}</a></span>
                                    </div>
                                    <div>
                                        <img src="{{ $blogs->b_img }}" class="img-fluid"style="margin-bottom: 1.2rem;" width="720px" height="350px"/> 
                                    </div>
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a>{{ $blogs->title }}</a></h2>
                                    </header>
                                    <div class="ttm-post-entry-header">
                                        <div class="post-meta">
                                            <span class="ttm-meta-line byline">{{ $blogs->b_by_who }}</span>
                                            <span class="ttm-meta-line entry-date"><i class="fa fa-calendar"></i><time
                                                    class="entry-date published" datetime="2018-07-28T00:39:29+00:00">{{ $blogs->created_at }}</time></span>
                                            <span class="ttm-meta-line tags-links"><i class="fa fa-comment-o"></i>{{ $blogs->comment_id }} Comments</span>
                                        </div>
                                    </div>
                                    <div class="ttm-box-desc-text">
                                        <p>{{ $blogs->description }}</p>
                                    </div>
                                    <div class="ttm-blogbox-desc-footer">
                                        <div class="ttm-blogbox-footer-readmore d-inline-block">
                                            <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right mt-10"
                                                href="#">Read More >></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- ttm-blog-classic-content end -->
                        </article>
                        <!-- ttm-blog-classic end -->
                    @endforeach
                </div>
                <div class="col-lg-3 widget-area">
                    <aside class="widget widget-search">
                        <form role="search" method="get" class="search-form" action="#">
                            <div class="form-group">
                                <input name="search" type="text" class="form-control with-border" placeholder="Search....">
                                <i class="fa fa-search"></i>
                            </div>
                        </form>
                    </aside>
                    <aside class="widget widget-categories">
                        <h3 class="widget-title">Categories</h3>
                        <ul>
                            <li><a href="#">Dairy Farm</a><span>4</span></li>
                            <li><a href="#">Flower</a><span>2</span></li>
                            <li><a href="#">Gardening</a><span>1</span></li>
                            <li><a href="#">Tips &amp; Tricks</a><span>4</span></li>
                            <li><a href="#">Watering Plants</a><span>2</span></li>
                        </ul>
                    </aside>
                </div>
            </div><!-- row end -->
        </div>
    </section>
</main><!-- End #main -->
@endsection