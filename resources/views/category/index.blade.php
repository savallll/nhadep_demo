@extends('layouts.main')
@section('content')
    <div class="">
        <div class="main-content mt-4">
            <div class="row ">
                <div class="col-xs-12 col-sm-3">
                    <div class="item-left">
                        <h3>Sản Phẩm</h3>
                        <ul class="ul accordion">
                            <li class="">
                                <a href="/sofa-da-phong-khach" class="link" style="" title="Sofa da">Sofa da</a>
                            </li>
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
                    <div class="news-left-item item-left over">
                        <h3>Sản phẩm mới</h3>
                        <ul class="ul">
                            <li class="w over">
                                <div class="img over pull-left">
                                    <a href="/ban-an-mo-rong-fiona-71304003" title="Bàn ăn mở rộng Fiona - HÀNG CÓ SẴN ">
                                        <img src="/Uploads/images/san-pham-furniture/ban-an-kim-loai/ban-an-fiona-trang-71304003-2(1).jpg"
                                            alt="Bàn ăn mở rộng Fiona - HÀNG CÓ SẴN "
                                            title="Bàn ăn mở rộng Fiona - HÀNG CÓ SẴN ">
                                    </a>
                                </div>
                                <div class="text-item pull-left">
                                    <a href="/ban-an-mo-rong-fiona-71304003" title="Bàn ăn mở rộng Fiona - HÀNG CÓ SẴN ">Bàn
                                        ăn mở rộng Fiona - HÀNG CÓ SẴN </a>
                                    <span>Mã: 71304003</span>
                                    <label>19.280.000</label>
                                </div>
                            </li>
                        </ul>
                    </div>


                </div>
                <div class="col-xs-12 col-sm-9 pull-right">
                    <div class="show-main">
                        {{-- @foreach ($categories as $categories) --}}
                            
                 
                        {{-- <h3>{{$categories->name }}</h3> --}}
                        {{-- <h2 style="display: none">Phòng khách</h2> --}}
                        <div class="show-product">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="item item-banner">
                                        <div class="img over">
                                            <a href="#" title="Phòng khách">
                                                {{-- <img src="{{ $categories->image }} " --}}
                                                    alt="Phòng khách" title="Phòng khách">
                                            </a>
                                        </div>      
                                         {{-- @endforeach --}}
                                    </div>
                                </div>
                            </div>
                            <div class="bor">
                                <div class="row row-0">
                                    <div class="page-pro">
                                        <div class="col-xs-12 col-sm-6 col-md-4 col-0">
                                            <div class="item delay">
                                                <div class="img over">
                                                    <a href="/sofa-da-italia-smart-3-cho-72611003">

                                                        <img src="/Uploads/images/san-pham-furniture/sofa-da-italia/sofa-da-italia-avatar/sofa-da-italia-smart-72611003-500x358.jpg"
                                                            alt="sofa-da-italia-smart-72611003-500x358.jpg"
                                                            title="Sofa da Italia Smart 3 chỗ- HÀNG CÓ SẴN ">
                                                    </a>
                                                </div>
                                                <div class="spen-product over">
                                                    <div class="over">
                                                        <div class="left pull-left">
                                                            <h3><label><a href="/sofa-da-italia-smart-3-cho-72611003"
                                                                        title="Sofa da Italia Smart 3 chỗ- HÀNG CÓ SẴN ">Sofa
                                                                        da Italia Smart 3 chỗ- HÀNG CÓ SẴN </a></label></h3>
                                                        </div>
                                                        <div class="right pull-right text-right">
                                                            <label class="through">155.500.000 đ</label>
                                                            <label class="red">62.200.000 đ</label>
                                                        </div>
                                                    </div>
                                                    <div class="hv over delay">
                                                        <ul class="ul">
                                                            <li>Mã sản phẩm : <span>72611003</span></li>
                                                            <li>
                                                                Kích thước :
                                                                <span>240x102x72</span>
                                                                <span>-240x102x80</span>
                                                            </li>
                                                            <li>Xuất xứ : <span>Italia</span></li>
                                                            <li>Chất liệu : <span>Da thật 100%, khung gỗ, chân kim
                                                                    loại</span></li>



                                                            <li>Tình trạng : <span class="red">Còn hàng</span></li>
                                                        </ul>
                                                        <a href="/sofa-da-italia-smart-3-cho-72611003" class="delay bg"
                                                            title="Sofa da Italia Smart 3 chỗ- HÀNG CÓ SẴN ">Xem chi
                                                            tiết</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-s">
                                            <ul class="pagination">

                                            </ul>
                                        </div>


                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
