
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
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
          </ul>
        </div>
      </nav>
  @endsection

  @section('content')
    <div class="container">
      <div class="row">
        <form class="form-inline" action="/addShop" method="post">
          <fieldset>
            <legend>Add new shop</legend>
            <label for="Country" class="sr-only">Country</label>
            <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="Country">
              <option selected>Select country</option>
              <option value="">Germany</option>
            </select>

            <label for="City" class="sr-only">City</label>
            <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="City">
              <option selected>Select city</option>
              <option value="">Berlin</option>
              <option value="">Hannover</option>
              <option value="">Hamburg</option>
              <option value="">Cologne</option>
            </select>

            <label class="sr-only" class="sr-only" for="district">District</label>
            <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0 pr-sm-0" id="district" placeholder="District">

            <label class="sr-only" for="shop">Shop</label>
            <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="shop" placeholder="Shop">

            <label for="do" class="sr-only">Do</label>
            <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="do">
              <option selected>Select activity</option>
              <option value="1">Do</option>
              <option value="2">Buy</option>
            </select>

            <label for="what" class="sr-only">What</label>
            <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="what">
              <option selected>Select thing</option>
              <option value="1">Food</option>
              <option value="2">Books</option>
            </select>
            <button type="submit" class="btn btn-primary">Add</button>
          </fieldset>
        </form>
      </div>

    </div>
  @endsection
