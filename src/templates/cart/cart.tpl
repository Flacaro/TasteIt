{extends file='src/templates/base/base.tpl'}
{block name=title}Carrello{/block}
{block name=categories}{/block}
{block name=productsOfCart}
<section class="hero-wrap hero-wrap-2" style="background-image: url('https://images.unsplash.com/photo-1513104890138-7c749659a591?ixlib=rb-1.2.1&w=1000&q=80');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate mb-5 text-center">
                <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Cart <i class="fa fa-chevron-right"></i></span></p>
                <h2 class="mb-0 bread">My Cart</h2>
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
                            <div class="img" style="background-image: url('https://via.placeholder.com/150');"></div>
                        </td>
                        <td>
                            <div class="email">
                                <span>{$product->getName()}</span>
                                <span>{$product->getDescription()}</span>
                            </div>
                        </td>
                        <td>{$product->getPrice()}</td>
                        <td class="quantity">
                            <div class="input-group">
                                {*andrebbero dentro un form con una action la route che mi va a fare l'update dei prodotti del carrello
                                compresa la quantità*}
                                <button class="quantity form-control">-</button>
                                <p>{$product->getQuantity()}</p>
                                <button class="quantity form-control">+</button>
                            </div>
                        </td>
                          <td>total</td>
                        <td>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="fa fa-close"></i></span>
                            </button>
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
                        <span>Subtotal</span>
                        <span>$20.60</span>
                    </p>
                    <p class="d-flex">
                        <span>Delivery</span>
                        <span>$0.00</span>
                    </p>
                    <p class="d-flex">
                        <span>Coupon</span>
                        <span>3%</span>
                    </p>
                    <hr>
                    <p class="d-flex total-price">
                        <span>Total</span>
                        <span>$17.60</span>
                    </p>
                </div>
                <p class="text-center"><a href="checkout.html" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
            </div>
        </div>
        <!--fine checkout -->
    </div>
</section>
{/block}
