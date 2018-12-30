<div class="swiper-slide">
  <div class="my-card simpleCart_shelfItem">
    <div class="my-card-header">
      <img src="/assets/products/300x200/{{$product->photo}}" alt="Placeholder image">
      <span><a href="{{route('product_path', $product->id)}}"><span>Visit product page</span></a></span>
    </div>
    <div class="card-content">
      <div class="columns">
        <div class="column">
          <h2 class="is-size-6 item_name">{{$product->name}}</h2>
          <h3 class="is-size-7">{{$product->artist->name}}</h3>
          <p class="item_price is-hidden">{{$product->price}}</p>
          <p class="item_Quantity is-hidden">1</p>
          <p class="is-hidden"><img  class="item_thumb" src="/assets/products/150x100/{{$product->photo}}"></p>

        </div>
        <div class="column is-narrow">
          <a class="button is-small" href="{{route('product_path', $product->id)}}">View</a>
        </div>
      </div>
    </div>
  </div>
</div>