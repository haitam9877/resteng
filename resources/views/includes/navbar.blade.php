


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
      </div>
    </div>
  </nav>