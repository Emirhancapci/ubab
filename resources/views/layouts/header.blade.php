<header class="header_section">
    <div class="container">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="{{ url('home') }}">
          <img src="images/logo.png" alt="">
          <span>
            UBAB Elektronik
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="s-1"> </span>
          <span class="s-2"> </span>
          <span class="s-3"> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="{{ url('home') }}">Ana Sayfa <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('about') }}"> HAKKIMIZDA</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('services') }}"> HİZMETLERİMİZ </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('contact') }}"> İLETİŞİM </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>