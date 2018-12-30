@inject('galleries', 'App\Gallery')
<div class="container">

  <!-- Swiper -->
  @foreach($galleries->getListOfGalls() as $gallery)
  <section class="my-collection">
    <h1 class="is-size-4">{{$gallery->name}}
      <span class="icon">
        <i class="fas fa-angle-right"></i>
      </span></h1>
    <div id="collection-{{$gallery->id}}-swiper" class="swiper-container collection-swiper">
      <div class="swiper-wrapper">
        @foreach($gallery->products as $product)
          @include('layouts.partials.product-card')
        @endforeach
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
      <!-- Add Arrows -->
<!--       <div id="collection-next" class="swiper-button-next"></div>
      <div id="collection-prev" class="swiper-button-prev"></div> -->
    </div>
  </section>
  @endforeach
</div>