@php $page_title = "صلحلي - كله هيتصلح" ; @endphp
@section('page_title')
   {{$page_title}}
@endsection
@extends('front-end.layout.app')





@section('content')
    <section class="backNav"></section>
    <div class="hidden-nav">
    اااااااااااااااااااا
    </div>
    <section class="intro">
        <div class="container">
            <div class="row intro-row">
            <div class="col-lg-6 intro-col-6">
                <div class="intro-txt-hdr">
                <span class="intro-txt-hdr-ylw">
                    صلحلي - متدفعش بقشيش
                </span>
                </div>
                <div class="intro-txt-p">
                <span>
                    توصيل صنايعى لباب البيت
                </span>
                <br>
                <span>
                    سباكة - نجارة - كهرباء - تكيف - دش
                </span>
                </div>
                <div class="intro-btn">
                <a href="{{route('order')}}"><button type="button" class="btn intro-btn-order">اطلب الآن</button></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div id="carouselExampleControls" class="carousel slide intro-carousel" data-interval="0"
                data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="{{asset('web/assets/imgs/intro-img.png')}}" class="d-block carsoul-img" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="{{asset('web/assets/imgs/car.jpg')}}" class="d-block carsoul-img" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="{{asset('web/assets/imgs/intro-img.png')}}" class="d-block carsoul-img" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev intro-carousel-control" href="#carouselExampleControls" role="button"
                    data-slide="next">
                </a>
                <a class="carousel-control-next intro-carousel-control" href="#carouselExampleControls" role="button"
                    data-slide="prev">
                </a>
                </div>
            </div>
            </div>
        </div>
    </section>


    <section id="category" class="category">
    <div class="category-hdr">
        <span class="category-hdr-text">
        الخدمات
        </span>
    </div>
    <div class="container">
        <div class="row category-row">
            @foreach ($categories as $category) 
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 item-col">
                    <div class="item">
                    <a href="{{route('services' , $category->id)}}" class="href-item">
                        <div class="item-hdr">
                        <img class="item-img" src="{{asset('uploads/categories/'.$category->image)}}">
                        </div>
                        <div class="item-footer">
                        <div class="item-footer-div">
                            <span class="item-footer-div-txt">
                            {{$category->name}}
                            </span>
                        </div>
                        </div>
                    </a>
                    </div>
                </div>
            @endforeach
          
        </div>
    </div>

    <div id="Big-carousel">
        <span class="hidden-span"> </span>
    </div>
    </section>


    <section id="" class="big-carousel">
        <div id="carouselExampleControls2" class="carousel slide " data-interval="3000" data-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('web/assets/imgs/car.jpg')}}" class="d-block carsoul-img" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('web/assets/imgs/car.jpg')}}" class="d-block carsoul-img" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('web/assets/imgs/car.jpg')}}" class="d-block carsoul-img" alt="...">
            </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="next">
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="prev">
            </a>
        </div>
    </section>

    {{-- ////////////////// about us  --}}
    <section id="about" class="aboutUs">
        <div class="aboutUs-hdr">
            <span class="aboutUs-hdr-text">
            من نحن
            </span>
        </div>
        <div class="container">
            <div class="row aboutUs-row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                <div class="aboutUs-txt">
                <a>
                        {{  isset($brefs->arDescription) ? $brefs->arDescription: ''  }}
                </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="">
                <img class="aboutUs-img " src="{{asset('web/assets/imgs/aboutIs.png')}}">
                </div>
            </div>
            </div>
        </div>
    </section>
       
        
@endsection

    

@push('scripts')
   
@endpush