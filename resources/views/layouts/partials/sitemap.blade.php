@inject('menus', 'App\Menu')
<section class="sitemap">
	<div class="container">
		<h1 class="has-text-centered is-size-4 my-header">Site map</h1>
		<div class="columns">
			@foreach($menus->getListOfMenu() as $menu)
			<div class="column is-4" style="text-align:center">
				<ul>
					@foreach($menu->submenus as $submenu)
						<li><a href="/submenu/{{$submenu->id}}">{{$submenu->name}}</a></li>
					@endforeach
				</ul>
			</div>
			@endforeach
		</div>
	</div>
</section>