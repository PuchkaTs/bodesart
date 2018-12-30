@extends('layouts/main')

@section('body')
<div class="submenu">
<div class="container">
      <section class="my-collection">
        <h1 id="submenu" class="is-size-4">{{$submenu->name}}</h1>
        <div id="" class="columns is-multiline">
            @foreach($submenu->products as $product)
            <div class="column is-4">
              @include('layouts.partials.product-card')
            </div>
            @endforeach
        </div>
      </section>
  </div>

</div>
@stop
@section('script')
@stop