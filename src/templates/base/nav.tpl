<div class="wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                <p class="mb-0 phone pl-md-2">
                    <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +00 1234 567</a>
                    <a href="#"><span class="fa fa-paper-plane mr-1"></span> tasteit@gmail.com</a>
                </p>
            </div>
            <div class="col-md-6 d-flex justify-content-md-end">
                <div class="reg">
                    <p class="mb-0"><a href="#" class="mr-2">Sign Up</a> <a href="#">Log In</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/home">Taste<span>It</span></a>
        <div class="order-lg-last btn-group">
            <!-- menu dropdown del carrello -->
            <a href="#" class="btn-cart dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="flaticon-shopping-bag"></span>
                <div class="d-flex justify-content-center align-items-center"><small>3</small></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-item d-flex align-items-start" href="#">
                    <div class="img" style="background-image: url(../../assets/images/prod-1.jpg);"></div>
                    <div class="text pl-3">
                        <h4>Bacardi 151</h4>
                        <p class="mb-0"><a href="#" class="price">$25.99</a><span class="quantity ml-3">Quantity: 01</span></p>
                    </div>
                </div>
                <a class="dropdown-item text-center btn-link d-block w-100" href="cart.html">
                    View All
                    <span class="ion-ios-arrow-round-forward"></span>
                </a>
            </div>
        </div>
        <!-- fine menu dropdown del carrello -->

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="/home" class="nav-link">Home</a></li>
                <li class="nav-item active"><a href="/aboutUs" class="nav-link">About</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        {foreach $categories as $category}
                            <a class="dropdown-item" href="/categories/{$category->getId()}/products"> {$category->getCategoryName()} </a>
                        {/foreach}
                    </div>
                </li>
                <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>