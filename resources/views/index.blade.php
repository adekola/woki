
  @extends('layout.layout')

  @section('nav')

  <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Woki</a>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto float-right">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/data">Data</a>
            </li>
          </ul>
        </div>
      </nav>
  @endsection

@section('content')

  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Hello, Woki!</h1>
      <p>woki is an ambitious attempt at changing the way local shops are discovered - here, there, everywhere.</p>
    </div>
  </div>

@endsection
