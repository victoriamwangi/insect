<nav class="navbar navbar-expand-lg navbar-dark top-nav align-items-center py-4">
    <a class="navbar-brand mr-auto col-lg-2" href="#">
        <img src="{{asset("img/logo.jpeg")}}" class="img-fluid h-auto " style="width: 80px" alt="logo">
    </a>
    <button class="navbar-toggler d-lg-none col-2 bg-transparent border-0" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
        aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <form class="search-form my-2 my-lg-0 mx-auto col-10 col-lg-5">
        <div class="sf-div">
            <input class="" type=" text" placeholder="Search">
            <button class="btn" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </div>
    </form>
    <div class="collapse navbar-collapse col-lg-5" id="collapsibleNavId">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link mx-2 px-2" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-2 px-2" href="#">About Us</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link mx-2 px-2 dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">Account</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="#">Login</a>
                    <a class="dropdown-item" href="#">Register</a>
                </div>
            </li>
        </ul>

    </div>
</nav>
