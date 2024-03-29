<!--<nav class="navbar navbar-expand-sm  navbar-light bg-light">-->
<nav class="navbar navbar-expand-sm  navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li @if($current=="home") class="nav-item active" @else class="nav-item" @endif>
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li @if($current=="produtos") class="nav-item active" @else class="nav-item" @endif>
                <a class="nav-link" href="/produtos">Produtos</a>
            </li>
            <li @if($current=="categorias") class="nav-item active" @else class="nav-item" @endif>
                <a class="nav-link" href="/categorias">Categorias</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>