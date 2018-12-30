@inject('menus', 'App\Menu')
@inject('languages', 'App\Language')
<p></p>
<header>
  <!-- top navigation -->
  <nav class="columns main-menu is-hidden-touch" style="margin-bottom: 0px;">
    <!-- levelt left part -->
    <div class="column level">
        <ul class="level-left">
          <li>
            <form method="GET" action="/search" class="search-form">
              <input class="input is-rounded" type="text" placeholder="Search">
            </form> 
          </li>
          <li>
            <a class="link is-info">
              <span class="icon">
                <i class="fab fa-facebook"></i>
              </span>
            </a>
          </li>
          <li>
            <a class="link is-info">
              <span class="icon">
                <i class="fab fa-instagram"></i>
              </span>
            </a>
          </li>
          <li>
            <a class="link is-info">
              <span class="icon">
                <i class="fab fa-youtube-square"></i>
              </span>
            </a>
          </li>
        </ul>

    </div>
    <div class="column is-narrow level">
      <a href="/">
        <img src="/assets/logo.png" alt="" style="height: 30px;">
      </a>
    </div>
    <div class="column level">
      <ul class="level-right">
        <li>
          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">
              Account
            </a>

            <div class="navbar-dropdown">
              <a class="navbar-item">
                Log In
              </a>
              <a class="navbar-item">
                Sign Up
              </a>
            </div>
          </div>
        </li>
        <li>
          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">
              Lang
            </a>

            <div class="navbar-dropdown">
              @foreach($languages->getListOfLangs() as $lang)
              <a class="navbar-item" href="/language/{{$lang->slug}}">
                {{$lang->name}}
              </a>
              @endforeach
            </div>
          </div>
        </li>
        <li><a href="/cart" class="button is-black">Cart 
          (<span class="simpleCart_quantity"></span>)
          </a></li>
      </ul>
    </div>
  </nav>
  <!-- Main navigation -->
  <div class="level main-nav-container is-hidden-touch" style="margin-bottom: 0px;">
    <ul class="level-item has-text-centered">
        @foreach($menus->getListOfMenu() as $menu)
        <li><a href="#"  @mouseover="openNav({{ $menu->submenus }})" >{{$menu->name}}</a></li>
        @endforeach
    </ul>
  </div>
  <!-- sub navigation -->
  <div id="sub-nav-container" class="is-hidden-touch" @mouseleave="closeNav">
    <div id="myNav" class="mm-overlay box-shadow">
      <a href="javascript:void(0)" class="closebtn" v-on:click="closeNav">&times;</a>
      <div class="mm-overlay-content">

        <a v-bind:href="'/submenu/' + submenu.id" v-for="submenu in currentMenus">@{{submenu.name}}</a>
      </div>
    </div>
  </div>

  <!-- end of sub navigation -->

  <!-- mobile navigation -->
<nav class="navbar is-hidden-desktop" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="/">
      <img src="/assets/logo.png" alt="" style="height: 30px;">
    </a>

    <a role="button" class="navbar-burger burger " aria-label="menu" aria-expanded="false" data-target="navbarBasicExample" v-on:click="toggleMobileMenu">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu" v-bind:class="[isMobileOpen ? 'is-active' : '']">
    <div class="navbar-start">
        @foreach($menus->getListOfMenu() as $menu)
        <div class="navbar-item has-dropdown ">
          <a class="navbar-link">
            {{$menu->name}}
          </a>
          <div class="navbar-dropdown">
            @foreach($menu->submenus as $submenu)
            <a class="navbar-item" href="/submenu/{{$submenu->id}}">
              {{$submenu->name}}
            </a>
            @endforeach
          </div>
        </div>       
        <hr> 
        @endforeach
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary">
            <strong>Sign up</strong>
          </a>
          <a class="button is-light">
            Log in
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>
  <!-- end of mobile navigation -->

</header>
<!-- <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span> -->
