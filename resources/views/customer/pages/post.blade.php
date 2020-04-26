@extends('customer.master')
@section('title','halovietnam')
@section('active_blog','active')
@section('main')
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <article class="blog_post">
                    <figure>
                        <a href="{{ route('blog') }}" class="hover_effect h_lightbox h_blue" data-rel="magnific-popup">
                            <img src="../../../images/{{ $posts->images }}" class="img-responsive" alt="Image">
                        </a>
                    </figure>
                    <div class="details">
                        <h2><a href="{{ route('blog') }}">{{ $posts->title }}</a></h2>

                        <p>{{ $posts->description }}</p>
                        <div class="meta_post">
                            <div class="tags">
                                <span><i class="fa fa-tags"></i> TAGS</span>
                                <a href="#" rel="tag">Greece</a>
                                <a href="#" rel="tag">Holidays</a>
                                <a href="#" rel="tag">Zakynthos</a>
                            </div>
                            <div class="share">
                                <span><i class="fa fa-share-alt"></i> SHARE</span>
                                <div class="social_media">
                                    <a class="facebook" href="#" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                    <a class="twitter" href="#" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                    <a class="googleplus" href="#" data-toggle="tooltip" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a>
                                    <a class="pinterest" href="#" data-toggle="tooltip" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <div class="comments">
                    <div class="main_title t_style3">
                        <h2>COMMENTS (4)</h2>
                    </div>
                    <ol class="comments_list clearfix">
                        <li class="comment single_comment">

                            <div class="comment-container comment-box">
                                <a href="#" class="avatar">
                                    <img width="80" height="80" src="images/users/user1.jpg" alt="Image">
                                </a>
                                <div class="comment_content">
                                    <h4 class="author_name"><a href="#">John Doe</a></h4>
                                    <a href="#comment-form" class="reply_link">Reply</a>
                                    <span class="comment_info">
<i class="fa fa-calendar"></i>
<a href="#">
<time datetime="2016-10-01T19:56:36+00:00">October 1, 2016 at 7:56 pm</time>
</a>
</span>
                                    <div class="comment_said_text">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    </div>
                                </div>
                            </div>
                            <ol class="children">
                                <li class="comment single_comment">

                                    <div class="comment-box">
                                        <a href="#" class="avatar">
                                            <img width="80" height="80" src="images/users/user2.jpg" alt="Image">
                                        </a>
                                        <div class="comment_content">
                                            <h4 class="author_name"><a href="#">Ina Aldrich</a></h4>
                                            <a href="#comment-form" class="reply_link">Reply</a>
                                            <span class="comment_info">
<i class="fa fa-calendar"></i>
<a href="#">
<time datetime="2016-10-01T19:56:36+00:00">August 1, 2016 at 10:56 pm</time>
</a>
</span>
                                            <div class="comment_said_text">
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <ol class="children">
                                        <li class="comment single_comment">

                                            <div class="comment-box">
                                                <a href="#" class="avatar">
                                                    <img width="80" height="80" src="images/users/user3.jpg" alt="Image">
                                                </a>
                                                <div class="comment_content">
                                                    <h4 class="author_name"><a href="#">William Whiten</a></h4>
                                                    <a href="#comment-form" class="reply_link">Reply</a>
                                                    <span class="comment_info">
<i class="fa fa-calendar"></i>
<a href="#">
<time datetime="2016-10-01T19:56:36+00:00">October 1, 2016 at 7:56 pm</time>
</a>
</span>
                                                    <div class="comment_said_text">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <ol class="children">
                                                <li class="comment single_comment">
                                                </li>
                                            </ol>
                                        </li>
                                    </ol>
                                </li>
                            </ol>
                        </li>
                        <li class="comment single_comment">

                            <div class="comment-box">
                                <a href="#" class="avatar">
                                    <img width="80" height="80" src="images/users/user4.jpg" alt="Image">
                                </a>
                                <div class="comment_content">
                                    <h4 class="author_name"><a href="#">Amy Ellison</a></h4>
                                    <a href="#comment-form" class="reply_link">Reply</a>
                                    <span class="comment_info">
<i class="fa fa-calendar"></i>
<a href="#">
<time datetime="2016-10-01T19:56:36+00:00">October 1, 2016 at 7:56 pm</time>
</a>
</span>
                                    <div class="comment_said_text">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ol>
                    <div class="main_title mt40">
                        <h2>LEAVE YOUR COMMENT</h2>
                    </div>
                    <div class="row">
                        <form id="comment-form" class="comment-form">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Name"> </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Email"> </div>
                            <div class="col-md-12">
                                <textarea class="form-control" placeholder="Write Your Comment"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="button  btn_blue pull-right"><i class="fa fa-paper-plane-o"></i> POST YOUR COMMENT </button>
                                <span class="a_left">*Your email address will not be published.</span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="sidebar">
                    <aside class="widget">
                        <div class="search">
                            <form method="get" class="widget_search">
                                <input type="search" placeholder="Start Searching...">
                                <button class="search_btn" id="searchsubmit" type="submit">
<i class="fa fa-search"></i>
</button>
                            </form>
                        </div>
                    </aside>

                    <aside class="widget">
                        <h4>Bài viết khác</h4>
                        <div class="latest_posts">
                            @foreach ($post as $item)
                            <article class="latest_post">
                                <figure>
                                    <a href="{{ route('blog_view',['id'=>$item->id]) }}" class="hover_effect h_link h_blue">
                                        <img src="../../../images/{{ $item->images }}" alt="Image" style="width: 58px; height: 41px;">
                                    </a>
                                </figure>
                                <div class="details">
                                    <h6><a href="{{ route('blog_view',['id'=>$item->id]) }}">{{ $item->title }}</a></h6>
                                    <span><i class="fa fa-calendar"></i>{{ $item->created_at }}</span>
                                </div>
                            </article>
                            @endforeach
                        </div>
                    </aside>
                    <aside class="widget">
                        <h4>Tags</h4>
                        <div class="tagcloud clearfix">
                            <a href="#"><span class="tag">ZANTE HOTEL</span><span class="num">12</span></a>
                            <a href="#"><span class="tag">HOLIDAYS</span><span class="num">24</span></a>
                            <a href="#"><span class="tag">PARTY</span><span class="num">8</span></a>
                            <a href="#"><span class="tag">GREECE</span><span class="num">4</span></a>
                            <a href="#"><span class="tag">PARTY</span><span class="num">56</span></a>
                            <a href="#"><span class="tag">ZAKYNTHOS</span><span class="num">12</span></a>
                        </div>
                    </aside>
                    <aside class="widget">
                        <h4>ARCHIVE</h4>
                        <ul class="archive">
                            <li><a href="#">May 2016<span class="num_posts">21</span></a></li>
                            <li><a href="#">June 2016<span class="num_posts">24</span></a></li>
                            <li><a href="#">July 2016<span class="num_posts">38</span></a></li>
                            <li><a href="#">August 2016<span class="num_posts">11</span></a></li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</main>
@stop
