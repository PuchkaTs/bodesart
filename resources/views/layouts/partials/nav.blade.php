<header>
  <!-- top navigation -->
  <nav class="columns main-menu" style="margin-bottom: 0px;">
    <!-- levelt left part -->
    <div class="column level">
        <ul class="level-left">
          <li>
            <form method="GET" action="/search" class="search-form">
              <input class="input is-rounded" type="text" placeholder="Rounded input">
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
      <p class="">
        <img src="https://bulma.io/images/bulma-type.png" alt="" style="height: 30px;">
      </p>
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
                About
              </a>
              <a class="navbar-item">
                Jobs
              </a>
              <a class="navbar-item">
                Contact
              </a>
              <hr class="navbar-divider">
              <a class="navbar-item">
                Report an issue
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
              <a class="navbar-item">
                About
              </a>
              <a class="navbar-item">
                Jobs
              </a>
              <a class="navbar-item">
                Contact
              </a>
              <hr class="navbar-divider">
              <a class="navbar-item">
                Report an issue
              </a>
            </div>
          </div>
        </li>
        <li><a href="#" class="button is-black">Cart</a></li>
      </ul>
    </div>
  </nav>
  <!-- Main navigation -->
  <div class="level main-nav-container" style="margin-bottom: 0px;">
    <ul class="level-item has-text-centered">
        <li><a href="#"  onclick="openNav()">Menu</a></li>
        <li><a href="#"  onclick="openNav()">Menu</a></li>
        <li><a href="#"  onclick="openNav()">Menu</a></li>
    </ul>
  </div>
  <!-- sub navigation -->
  <div id="sub-nav-container">
    <div id="myNav" class="mm-overlay">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div class="mm-overlay-content">
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
      </div>
    </div>
  </div>

  <!-- end of sub navigation -->
</header>
<!-- <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span> -->
