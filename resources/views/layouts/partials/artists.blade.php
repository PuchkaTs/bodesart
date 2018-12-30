@inject('artists', 'App\User')
<section class="artists-container">
		<div class="container">
		    <h1 class="is-size-4">Artists 
		      <span class="icon">
		        <i class="fas fa-angle-right"></i>
		      </span></h1>
			<div class="columns">
				@foreach($artists->getListOfArtists() as $artist)
				<div class="column is-3">
					<div class="card">
					  <div class="card-image level">
					  	<div class="level-item has-text-centered">
					  	
					  		<a href="{{route('artist_path', $artist->id)}}">
								<figure class="image is-128x128">
								  <img class="is-rounded" src="/assets/artists/200x200/{{$artist->photo}}">
								</figure>
					  		</a>
					  	</div>

					  </div>
					  <div class="card-content">
					    <div class="content has-text-centered">
					      <p class="">{{$artist->name}}</p>
					      <br>
					      <a href="{{route('artist_path', $artist->id)}}" class="button">View profile</a>
					    </div>
					  </div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
</section>