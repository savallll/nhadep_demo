@extends('layouts.main')
@section('content')
    {{-- <ul class="d-flex " type="none" >
        @foreach ($menu as $item)
                    <li><a href="">{{$item->name}}</a></li>
        @endforeach
    </ul> --}}
    <div class="d-flex">
        @foreach ($menu as $menus)
            <div class="dropdown ms-4 mt-4">
                <a class="" type="" id="dropdownMenuButton"
                    data-mdb-toggle="dropdown" aria-expanded="false">
                    {{ $menus->name }}
                </a>
                {{-- @foreach ($menu_items as $menuitems)
                @endforeach
                @if($menuitems->menu_id == $menus->id) --}}
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        @foreach ($menu_items as $menuitems)
                            @if ($menuitems->menu_id == $menus->id)
                                <li><a class="dropdown-item" href="#">{{ $menuitems->name }}</a></li>

                            @endif
                        @endforeach
                    </ul>
                {{-- @endif --}}
            </div>
        @endforeach
    </div>




    <div class="container-fluid mt-5">
        <img src="https://nhadep.com.vn/Uploads/images/ND_Web_Cover-04.jpg" alt="" class="main-banner">
    </div>
@endsection('')
