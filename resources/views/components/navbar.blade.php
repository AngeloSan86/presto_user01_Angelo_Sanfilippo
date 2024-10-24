<nav class="navbar navbar-expand-lg bg-body-tertiary shadow">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('homepage') }}">Presto.it</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('article.index') }}">{{ __('ui.allArticles') }}</a>
        </li>

        @auth
          @if (Auth::user()->is_revisor)
            <li class="nav-item">
              <a class="nav-link btn btn-outline-succes btn-sm position-relative w-sm-25" href="{{ route('revisor.index') }}">{{ __('ui.auditorArea') }}
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"> {{ \App\Models\Article::toBeRevisedCount() }}
                </span>
              </a>
            </li>
          @endif
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ __('ui.hello') }}, {{ Auth::user()->name }}</a>
            <ul class="dropdown-menu">
              <li>
                  <a class="dropdown-item" href="{{ route('create.article') }}">{{ __('ui.create') }}</a>
              </li>
              <li>
                  <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">{{ __('ui.logout') }}</a>
              </li>
                <form action="{{ route('logout') }}" method="post" class="d-none" id="form-logout">@csrf</form>
            </ul>
        </li>
        @else
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ __('ui.helloLogout') }}</a> 
                <ul class="dropdown-menu"> 
                  <li>
                     <a class="dropdown-item" href="{{ route('login') }}">{{ __('ui.login') }}</a>
                  </li>

                  <hr class="dropdown-divider">

                  <li>
                    <a class="dropdown-item" href="{{ route('register') }}">{{ __('ui.registration') }}</a>
                  </li>
                </ul>
                
            </li>
        @endauth

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ __('ui.cat') }}</a>
            <ul class="dropdown-menu">
              @foreach ($categories as $category)
                <li>
                    <a class="dropdown-item text-capitalize" href="{{ route('byCategory', ['category' => $category]) }}">{{ $category->name }}</a>
                </li>
                @if (!$loop->last)
                  <hr class="dropdown-divider">
                @endif
              @endforeach
            </ul>
        </li>
      </ul>
      <form class="d-flex" role="search" action="{{ route('article.search') }}" method="GET">
        <div class="input-group">

          <input type="search" name="query" class="form-control me-2"  placeholder="{{ __('ui.search') }}" aria-label="Search">
          <button type="submit" class="input-group-test btn btn-outline-success" id="basic-adden2">{{ __('ui.search') }}</button>

        </div>
        
      </form>

      <x-_locale lang="it" />
      <x-_locale lang="en" />
      <x-_locale lang="es" />
    </div>
  </div>
</nav>