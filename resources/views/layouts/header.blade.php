

<nav class="navbar navbar-expand-lg navbar-light bg-light"  >
    <div class="container-fluid">

      <a class="navbar-brand" href="#">
        <img src="{{asset('img/assist.png')}}" alt="" srcset="">
      </a>

     <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>!-->
      <div class="collapse navbar-collapse" id="navbarNav" >
        <ul class="navbar-nav" >
          <li class="nav-item">
            <a class="nav-link"  href="{{route('home.index')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('services.index')}}">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('abouts.index')}}">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contacts.index')}}" >Contact Us</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
