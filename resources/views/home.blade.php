@extends('layouts/main')

@section('body')
	@include('layouts.partials.mainbanner')
	<div class="container">
		@include('layouts.partials.collection')
	</div>

@stop

@section('script')

  <script>
  // swiper for mainbanner
  var mySwiper = new Swiper ('#mainbanner-swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
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

  var mySwiper = new Swiper ('#collection-swiper', {
    // Optional parameters
	slidesPerView: 3,
	spaceBetween: 30,
	slidesPerGroup: 3,
    direction: 'horizontal',
    loop: true,
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
      nextEl: '#collection-next',
      prevEl: '#collection-prev',
    },

  })
  </script>

@stop