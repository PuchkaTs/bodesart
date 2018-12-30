@extends('layouts/main')

@section('body')
	<section>
		<div class="product-header">
			<div class="columns is-centered">
				<div class="column is-narrow">
					<div id="animated-thumbnails">
					  <a href="/assets/products/{{$product->photo}}">

					    <img class="margin-fix-bulma box-shadow" src="/assets/products/{{$product->photo}}" />
					  </a>
					</div>	
					<div class="product-title simpleCart_shelfItem">
						<h2 class="">
						<span class="item_name">{{$product->name}} </span>
						<br> <small>Artist: {{$product->artist->name}}</small> 
						<br><small>Price: <span class="item_price">{{$product->price}}</span> USD</small></h2>
						<p class="item_Quantity is-hidden">1</p>
						<p class="item_id is-hidden">{{$product->id}}</p>
						<p class="is-hidden"><img  class="item_thumb" src="/assets/products/150x100/{{$product->photo}}"></p>

		                <div class="">
			                  <a class="item_add button is-black" href="javascript:;" @click="gotocart()">Buy</a>
		                </div>
					</div>

				</div>

			</div>
		</div>
		<div class="product-body container">
			<div class="columns">
				<div class="column is-three-fifths is-offset-one-fifth">
	<!-- 				<h2 class="is-size-4">Details</h2>
					<hr> -->
					<h2 class="is-size-4">Notes</h2>
					<hr>
					{!!$product->description!!}
				</div>
			</div>
		</div>
	</section>
@stop
@section('script')
	<script>
		lightGallery(document.getElementById('animated-thumbnails'));
	</script>
@stop