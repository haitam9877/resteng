


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">{{__('navbar.logo')}}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">


        
        <li class="nav-item">
                <a class="nav-link " aria-current="page" href="#">{{__('navbar.home')}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="#">{{__('navbar.about')}}</a>
        </li>
        
        
        

     
        
          @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
          <li  class="nav-item">
              <a class="nav-link " rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                  {{ $properties['native'] }}
              </a>
          </li>
      @endforeach
         
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="{{__('navbar.search')}}" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">{{__('navbar.search')}}</button>
        </form>


    
    
       
          
        </ul>

        <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))

             
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::guard('web')->user()->name }}
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </div>
              </li>
             
          @endguest
      </ul>
        
      </div>
    </div>
  </nav>