@extends('customer.master')
@section('title','halovietnam')
@section('active_blog','active')
@section('main')
<main class="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-9">

                 @foreach ($posts as $item)
                 <article class="blog_list">
                    <figure>
                        <a href="{{ route('blog_view',['id'=>$item->id]) }}" class="hover_effect h_link h_blue">
                            <img src="../../../images/{{ $item->images }}" class="img-responsive" alt="Image">
                        </a>
                    </figure>
                    <div class="details">
                        <h2><a href="{{ route('blog_view',['id'=>$item->id]) }}">{{ $item->title }}</a></h2>
                        <p>{{ $item->short_description }}</p>
                        <a class="button btn_blue " href="{{ route('blog_view',['id'=>$item->id]) }}"><i class="fa fa-angle-double-right"></i> Read More </a>
                    </div>
                </article>
                 @endforeach

                <nav>
                    <ul class="pagination">
                        {{ $posts->links() }}
                    </ul>
                </nav>
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
                        <h4>CATEGORIES</h4>
                        <ul class="categories">
                            <li><a href="#">Zante Hotel Rooms <span class="num_posts">51</span></a></li>
                            <li><a href="#">Accommodation <span class="num_posts">24</span></a></li>
                            <li><a href="#">Restaurant <span class="num_posts">9</span></a></li>
                            <li><a href="#">Swimming Pool <span class="num_posts">12</span></a></li>
                            <li><a href="#">Holidays in Greece <span class="num_posts">28</span></a></li>
                            <li><a href="#">Events <span class="num_posts">5</span></a></li>
                            <li><a href="#">News <span class="num_posts">5</span></a></li>
                        </ul>
                    </aside>
                    <aside class="widget">
                        <h4>Latest Posts</h4>
                        <div class="latest_posts">

                            @foreach ($posts as $item)
                            <article class="latest_post">
                                <figure>
                                    <a href="{{ route('blog_view',['id'=>$item->id]) }}" class="hover_effect h_link h_blue">
                                        <img src="../../../images/{{ $item->images }}" alt="Image" style="width: 55px; height: 41px;">
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
