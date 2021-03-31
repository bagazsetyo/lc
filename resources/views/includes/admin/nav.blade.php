<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="#">Tutorial Eloquent</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="container">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{route('book.index')}}">Book</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('user.index')}}">User</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('detailbook.index')}}">Relation</a>
          </li>
        </ul>
    </div>
  </div>
</nav>