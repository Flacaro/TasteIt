{extends file='src/templates/base/base.tpl'}
{block name=title}All products{/block}
{block name=allProducts}

    <section class="hero-wrap hero-wrap-2" style="background-image: url('https://s1.1zoom.me/b6359/903/Meat_products_Salt_536334_1920x1080.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animated mb-5 text-center">
                    <p class="breadcrumbs mb-0"><span class="mr-2">
                            <a href="index.html">Home <i class="fa fa-chevron-right"></i></a>
                        </span> <span>Prodotti <i class="fa fa-chevron-right"></i></span>
                    </p>
                    <h2 class="mb-0 bread">All Products</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="row mb-4">
        <div class="col-md-12 d-flex justify-content-between align-items-center">
            <h4 class="product-select">Select Types of Products</h4>
        </div>
    </div>

    <div class="row">
        {foreach $products as $product}
            <div class="col-md-3 d-flex">
                <div class="product ftco-animated">
                    <div class="img d-flex align-items-center justify-content-center" style="background-image: url('https://assets.wallpapersin4k.org/uploads/2017/04/3D-Food-Wallpaper-18.jpg');">
                        <div class="desc">
                            <p class="meta-prod d-flex">
                                <a href="/carts/{$cartId}/products/{$product->getId()}/addToCart" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                <a href="/products/{$product->getId()}/addToFavourites/{$favId}" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                            </p>
                        </div>
                    </div>
                    <div class="text text-center">
                        <h2> {$product->getName()}</h2>
                        <p class="mb-0">
                            <span class="price">${$product->getPrice()}</span>
                        </p>
                    </div>
                </div>
            </div>
        {/foreach}
    </div>
    </div>
    </div>
    </div>
    </section>


{/block}