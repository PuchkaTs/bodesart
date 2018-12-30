@extends('layouts/main')

@section('body')
	<section class="artist-header columns is-centered">
		<div class="column is-narrow">
			<div id="artist-photo">
				<figure class="image is-128x128">
				  <img class="is-rounded" src="/assets/artists/200x200/{{$artist->photo}}">
				</figure>
			</div>	
			<div class="artist-title ">
				<h2 class="">{{$artist->name}}</h2>
				<h3 class="">Born in {{$artist->birth->format('Y')}}</h3>
			</div>

		</div>
	</section>
	<section class="artist-artworks container">
		<div class="my-collection">
		    <h1 class="is-size-4">Artworks by {{$artist->name}}
		      <span class="icon">
		        <i class="fas fa-angle-right"></i>
		      </span></h1>
		    <div id="artist-swiper" class="swiper-container collection-swiper">
		      <div class="swiper-wrapper">
		        @foreach($artist->products as $product)
		          @include('layouts.partials.product-card')
		        @endforeach
		      </div>
		      <!-- Add Pagination -->
		      <div class="swiper-pagination"></div>
		      <!-- Add Arrows -->
		<!--       <div id="collection-next" class="swiper-button-next"></div>
		      <div id="collection-prev" class="swiper-button-prev"></div> -->
		    </div>
		</div>
	</section>
	<section class="artist-body">
		<div class="container">
			<div class="columns">
				<div class="column is-three-fifths is-offset-one-fifth">
					<h2 class="is-size-4">{{$artist->name}}'s biography</h2>
					{!! $artist->about!!}
				</div>
			</div>
		</div>
	</section>
@stop
@section('script')
	<script>
		var artistSwiper = new Swiper ('#artist-swiper', {
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
		})
	</script>

@stop