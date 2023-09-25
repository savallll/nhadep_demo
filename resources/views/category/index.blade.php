@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="main-content mt-4">
            <div class="row ">
                <div class="col-xs-12 col-sm-3">
                    <div class="item-left">
                        <h3>danh mục</h3>
                        <ul class="ul accordion">
                            @foreach ($list_menu as $list_item)
                                <li class="list_menu">
                                    <a href="/menu/{{ $list_item->name }}" class="link" style=""
                                        title="">{{ $list_item->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="item-left">
                        <form method="get" action="" onsubmit="frmFilterPost(this); return false;">
                            <h3>lọc theo</h3>
                            <div class="form-left">



                                <p class="text-center">
                                    <button type="submit" class="btn bg delay">Tìm kiếm</button>
                                </p>
                            </div>
                        </form>
                    </div>
                    <div class="news-left-item item-left over related_products">
                        <h3>Sản phẩm khác</h3>
                        <ul class="ul">
                            @foreach ($related_products as $related_products_item)
                                
                            <li class="w over d-flex pb-4">
                                <div class="img over pull-left w-25 pe-2">
                                    <a href="/" >
                                        <img src="{{ $related_products_item->image }}">
                                    </a>
                                </div>
                                <div class="text-item pull-left">
                                    <a href="/" class="text-dark">{{ $related_products_item->title }}</a></br>
                                    <label class="text-success">giá: {{ number_format($related_products_item->price, 0, ',', '.') }} đ</label>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>


                </div>
                <div class="col-xs-12 col-sm-9 pull-right">
                    <div class="show-main">
                        @foreach ($category as $category)
                            <h3>{{ $category->name }}</h3>
                            {{-- <h2 style="display: none">Phòng khách</h2> --}}
                            <div class="show-product">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="item item-banner">
                                            <div class="img over">
                                                <a href="#" title="Phòng khách">
                                                    <img src="{{ $category->image }} " alt="" title="">
                                                </a>
                                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="products">  
                <div class="row row-0">
                        @foreach ($products as $products_item)

                        <div class="col-xs-12 col-sm-6 col-md-4 mt-4">
                            <div class="item delay">
                                <div >
                                    <a href="/" class="product-img">        
                                        <img src="{{ $products_item->image }}"
                                            alt="" title="">
                                    </a>
                                </div>
                                <div class="spen-product over">
                                    <div class="over">
                                        <div class="product-card">
                                            <h4><label class=""><a href="/">{{ $products_item->title }}</a></label></h4>
                                            <div class="right pull-right text-right">
                                                <label class="through">{{ number_format($products_item->price, 0, ',', '.') }} đ</label></br>
                                                <label class="red">{{ number_format($products_item->discount, 0, ',', '.') }} đ</label>
                                            </div>
                                            <a href="/" class="delay bg" title="">Xem chi tiết</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>

    </div>
    </div>
    </div>
@endsection
