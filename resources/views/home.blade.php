@inject('galleries', 'App\Gallery')

@extends('layouts/main')

@section('body')
	@include('layouts.partials.mainbanner')
    @include('layouts.partials.collection')
    @include('layouts.partials.middlebanner')
    @include('layouts.partials.artists')
@stop

@section('script')

  <script>
  // swiper for mainbanner
  var mySwiper = new Swiper ('#mainbanner-swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    lazy: true,
	slidesPerView: 1,
    // If we need pagination
	autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
    pagination: {
      el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '#mainbanner-next',
      prevEl: '#mainbanner-prev',
    },

  })

  // swiper for collection
  @foreach($galleries->getListOfGalls() as $gallery)

  var mySwiper = new Swiper ('#collection-{{$gallery->id}}-swiper', {
    // Optional parameters
	slidesPerView: 3,
	spaceBetween: 30,
	slidesPerGroup: 3,
    direction: 'horizontal',
    loop: true,
    lazy: true,
    // If we need pagination
	autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
    pagination: {
      el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '#collection-{{$gallery->id}}-next',
      prevEl: '#collection-{{$gallery->id}}-prev',
    },
    breakpoints: {
      1024: {
        slidesPerView: 2,
        spaceBetween: 40,
        slidesPerGroup: 2,
      },
      768: {
        slidesPerView: 1,
        spaceBetween: 30,
        slidesPerGroup: 1,
      }
    }

  })
  @endforeach
  </script>

@stop