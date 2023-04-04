<nav class="navbar navbar-expand-sm navbar-dark bg-dark">

  <div class="container-fluid">
    <a class="navbar-brand" href="/">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/create') }}">Add employee</a>
        </li>
      </ul>
      <form class="d-flex" method="get" action="{{ url('/search_page') }}">
        <input class="form-control me-2" type="text" placeholder="Search" name="search">
        <input class="btn btn-primary" type="submit" name="submit" value="Search">
      </form>
    </div>
  </div>
</nav>
