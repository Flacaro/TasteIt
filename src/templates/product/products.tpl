{extends file='src/templates/base.tpl'}
{block name=title}Prodotti{/block}
{block name=body}
    <section class="hero-wrap hero-wrap-2" style="background-image: url('../assets/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate mb-5 text-center">
                    <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Prodotti <i class="fa fa-chevron-right"></i></span></p>
                    <h2 class="mb-0 bread">Products</h2>
                </div>
            </div>
        </div>
    </section>



{/block}


{*
<ul>
    {foreach $products as $product}
        <li>
            <form action="/products/{$product->getId()}" method="GET">
                <button type="submit">X</button>
            </form>

            {$product->getId()}
            {$product->getName()}
            {$product->getDescription()}
            {$product->getPrice()}
        </li>

    {/foreach}
</ul>

*}
