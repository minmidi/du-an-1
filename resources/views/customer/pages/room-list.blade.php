@extends('customer.master')
@section('title','halovietnam')
@section('active_room','active')
@section('main')
    <div class="page_title gradient_overlay " style="background: url('../Customer/images/page_title_bg.jpg'); ">
        <div class="container ">
            <div class="inner ">
                <h1>Phòng</h1>
                <ol class="breadcrumb ">
                    <li><a href="{{ route('homepage') }}">Trang chủ</a></li>
                    <li>Danh sách phòng</li>
                </ol>
            </div>
        </div>
    </div>

    <main id="rooms_list ">
        <div class="container ">
            @foreach ($room_types as $item)
            <article class="room_list ">
                <div class="row row-flex ">
                    <div class="col-lg-4 col-md-5 col-sm-12 ">
                        <figure>
                            <a href="room.html " class="hover_effect h_link h_blue ">
                                <img src="../../../images/{{ $item->images }}" class="img-responsive " alt="Image ">
                            </a>
                        </figure>
                    </div>
                    <div class="col-lg-8 col-md-7 col-sm-12 ">
                        <div class="room_details row-flex ">
                            <div class="col-md-9 col-sm-9 col-xs-12 room_desc ">
                                <h3><a href="room.html ">{{ $item->name }} </a></h3>
                                <p>{{ $item->short_description }}</p>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 room_price ">
                                <div class="room_price_inner ">
                                    <span class="room_price_number "> ${{ $item->price }} </span>
                                    <small class="upper "> Một đêm </small>
                                    <a href="{{ route('room_view',['id'=>$item->id]) }}" class="button btn_blue btn_full upper ">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            @endforeach

            <nav class="a_center ">
                    {{ $room_types->links() }}
            </nav>
        </div>
    </main>
@stop
