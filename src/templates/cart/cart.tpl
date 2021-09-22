{extends file='src/templates/base/base.tpl'}
{block name=title}Carrello{/block}
{block name=categories}{/block}
{block name=productsOfCart}
<section class="hero-wrap hero-wrap-2" style="background-image: url('https://images.unsplash.com/photo-1513104890138-7c749659a591?ixlib=rb-1.2.1&w=1000&q=80');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate mb-5 text-center">
                <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Carrello<i class="fa fa-chevron-right"></i></span></p>
                <h2 class="mb-0 bread">Il mio carrello</h2>
            </div>
        </div>
    </div>
</section>
<!--fine blocco prima immagine -->

<!--Sezione carrello dove sono i prodotti -->
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="table-wrap">
                <table class="table">

                    <!--zona rossa dove stanno product, price... -->
                    <thead class="thead-primary">
                    <tr>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>total</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <!--fine zona rossa -->

                    <!--parte bianca dove sono le immagini dei prodotti -->
                    <tbody>
                    {foreach $products as $product}
                    <!--primo prodotto-->
                    <tr class="alert" role="alert">
                        <td>
                            <label class="checkbox-wrap checkbox-primary">
                                <input type="checkbox" checked>
                                <span class="checkmark"></span>
                            </label>
                        </td>
                        <td>
                            <div class="img" style="background-image: url('https://assets.wallpapersin4k.org/uploads/2017/04/3D-Food-Wallpaper-18.jpg');"></div>
                        </td>
                        <td>
                            <div class="email">
                                <span>{$product->getName()}</span>
                                <span>{$product->getDescription()}</span>
                            </div>
                        </td>
                        <td>{$product->getPrice()}</td>
                        <td class="quantity">
                            <div class="input-group" style="width: 9em">
                                <form action="/carts/{$cartId}/products/{$product->getId()}/update" method="POST" style="float: left">
                                    <div class="button minus">

                                        <input hidden type="text" value="PUT" name="_method">
                                        <input hidden type="text" value="minus" name="option">

                                        <button class="btn btn-primary btn-number" type="submit"
                                                {if $product->getQuantity() == 1}
                                                    disabled
                                                {/if}
                                        >
                                            -
                                        </button>
                                    </div>
                                </form>

                                <input type="text" name="quantity" class="input-number"  data-min="1" data-max="100" value="{$product->getQuantity()}" style="width: 2em">

                                <form action="/carts/{$cartId}/products/{$product->getId()}/update" method="POST" style="float: right">
                                    <div class="button plus">

                                        <input hidden type="text" value="PUT" name="_method">
                                        <input hidden type="text" value="plus" name="option">

                                        <button class="btn btn-primary btn-number" type="submit"> + </button>
                                    </div>
                                </form>

                            </div>
                        </td>
                          <td>{math equation="{$product->getPrice()} * {$product->getQuantity()}"}</td>
                        <td>
                            {*<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="fa fa-close"></i></span>
                            </button>*}
                            <form action="/carts/{$cartId}/products/{$product->getId()}/delete" method="POST">
                                <div class="button delete">

                                    <input hidden type="text" value="DELETE" name="_method">
                                    <input hidden type="text" value="delete" name="option">

                                    <button class="btn btn-primary btn-number" type="submit"> X </button>
                                </div>
                            </form>
                        </td>
                    </tr>
                    {/foreach}
                    <!-- fine prodotto 1-->

                    </tbody>
                </table>
            </div>
        </div>
        <!--quadrato in fondo per il checkout -->
        <div class="row justify-content-end">
            <div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Cart Totals</h3>
                    <p class="d-flex">
                        <span>
                            Total
                        </span>
                        <span>
                             {foreach $products as $product}
                                 {assign var="partialTotal" value=$partialTotal+$product->getPrice()*$product->getQuantity()}
                             {/foreach}
                            $ {$partialTotal}
                        </span>
                    </p>
                    <p class="d-flex">
                        <span>Delivery</span>
                        <span>$0.00</span>
                    </p>
                    <p class="d-flex total-price">
                        <span>Total</span>
                        <span>
                            {foreach $products as $product}
                                {assign var="total" value=$total+$product->getPrice()*$product->getQuantity()}
                            {/foreach}
                            $ {$total}
                        </span>
                    </p>
                </div>
                <p class="text-center"><a href="checkout.html" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
            </div>
        </div>
        <!--fine checkout -->
    </div>
</section>
{/block}
