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
            {if $cartId}
            <a href="#" class="btn-cart dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dropdown">
                <span class="flaticon-shopping-bag"></span>
                <div class="d-flex justify-content-center align-items-center"><small></small></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right" data-toggle="dropdown04">
                {foreach $productsC as $p}
                <div class="dropdown-item d-flex align-items-start" href="#" id="dropdown-menu">
{*                        <div class="img" style="background-image: url({$product->getImagePath()});"></div>*}
                        <div class="text pl-3">
                            <h4>{$p[1]}</h4>
                            <p class="mb-0"><a href="#" class="price"></a><span class="quantity ml-3">{$p[3]}</span></p>
                        </div>
                </div>
                {/foreach}
                <a class="dropdown-item text-center btn-link d-block w-100" href="#">

                    <form action="/carts/{$cartId}/products">
                        <button class="btn btn-primary btn-number" type="submit">Vai al carrello</span></button>
                    </form>

                    <span class="ion-ios-arrow-round-forward"></span>
                </a>
            </div>
            {/if}
        </div>
        <!-- fine menu dropdown del carrello -->

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="/home" class="nav-link">Home</a></li>
                <li class="nav-item active"><a href="/aboutUs" class="nav-link">About</a></li>
                {if $favId}
                <li class="nav-item"><a href="/favourites/{$favId}" class="nav-link">Preferiti</a></li>
                {/if}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Categories</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04" id="dropdown-menu">
                        {foreach $categories as $category}
                            <a class="dropdown-item" href="/categories/{$category->getId()}/products"> {$category->getName()} </a>
                        {/foreach}
                    </div>
                </li>
                <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<script>
    const dropdownLink = document.querySelector('#dropdown04');
    const dropdown = document.querySelector('#dropdown-menu');

    dropdownLink.addEventListener('mouseenter', () => dropdown.classList.add('show'));
    dropdown.addEventListener('mouseleave', () => dropdown.classList.remove('show'));

</script>

<script>
    const dropdownLink = document.querySelector('#dropdown');
    const dropdown = document.querySelector('#dropd');

    dropdownLink.addEventListener('mouseenter', () => dropdown.classList.add('show'));
    dropdown.addEventListener('mouseleave', () => dropdown.classList.remove('show'));

</script>