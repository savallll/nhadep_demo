@extends('layouts.main')
@section('content')
    {{-- <ul class="d-flex " type="none" >
        @foreach ($menu as $item)
                    <li><a href="">{{$item->name}}</a></li>
        @endforeach
    </ul> --}}
    {{-- <div class="d-flex">
        @foreach ($menu as $menus)
            <div class="dropdown ms-4 mt-4">
                <a class="" type="" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false"    
                    href="menu/{{ $menus->name }}">
                    {{ $menus->name }}
                </a>
                @foreach ($menu_items as $menuitems)
                    @if ($menuitems->menu_id == $menus->id)
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @foreach ($menu_items as $menuitems)
                                @if ($menuitems->menu_id == $menus->id)
                                    <li><a class="dropdown-item"
                                            href="menu/{{ $menuitems->name }}">{{ $menuitems->name }}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    @endif
                @endforeach

            </div>
        @endforeach
    </div> --}}



    @foreach ($banner as $banner_item)
        <div class="container-fluid mt-5">
            @if ($banner_item->id == 1)
                <img src="{{ $banner_item->image }}" alt="" class="main-banner">
            @endif
        </div>
    @endforeach

    <div class="container ">
        <div class="row">
            @foreach ($banner as $banner_item)
                @if ($banner_item->id !== 1)

            <div class="col-md-6 col-sm-12 mt-4">
               <img src="{{$banner_item->image}}" alt="">
               
            </div>
            @endif
            @endforeach

        </div>
</div>

@endsection('')
