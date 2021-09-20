{extends file='src/templates/base/base.tpl'}
{block name=title}Carrello{/block}
{block name=categories}{/block}
{block name=productsOfCart}
    <section class="hero-wrap hero-wrap-2" style="background-image: url('https://images.unsplash.com/photo-1513104890138-7c749659a591?ixlib=rb-1.2.1&w=1000&q=80');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate mb-5 text-center">
                    <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Ordine <i class="fa fa-chevron-right"></i></span></p>
                    <h2 class="mb-0 bread">Ordine</h2>
                </div>
            </div>
        </div>
    </section>
    <!--fine blocco prima immagine -->
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-12 ftco-animate">


                    <!--Inizio parte sotto il form con cart total e payment method -->
                    <div class="row mt-5 pt-3 d-flex">
                        <div class="col-md-4 d-flex">
                            <div class="cart-detail cart-total p-3 p-md-4">
                                <h3 class="billing-heading mb-4">Cart Total</h3>
                                <p class="d-flex">
                                    <span>Subtotal</span>
                                    {$subtotal=0}
                                    {foreach $cart->getProducts() as $product}
                                        {assign var="subtotal" value=$subtotal+$product[0]->getPrice()*$product[1]}
                                    {/foreach}
                                    <span>${$subtotal}</span>
                                </p>
                                <p class="d-flex">
                                    <span>Discount</span>
                                    {if $coupon==""}
                                    <span>0%</span>
                                    {else}
                                        <span>{$coupon->getPriceCut()}%</span>
                                    {/if}
                                </p>
                                <hr>
                                <p class="d-flex total-price">
                                    <span>Total</span>
                                    {if $coupon!=""}
                                    <span>${$subtotal-($subtotal*$coupon->getPriceCut()/100)}</span>
                                    {else}
                                        <span>${$subtotal}</span>
                                    {/if}
                                </p>
                                {if $coupon==""}
                                <label for="streetaddress">Coupon</label>
                                <div class="d-flex">
                                    <form action="/cart/checkout/coupon" method="post">
                                        <div class="row">
                                            <input type="text" class="form-control w-75" name="option" placeholder="Codice Coupon">
                                            <button class="btn btn-primary w-25" style="margin-left: 1rem" type="submit">Applica</button>
                                        </div>
                                    </form>
                                </div>
                                {/if}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="cart-detail p-3 p-md-4">
                                <h3 class="billing-heading mb-4">Indirizzi</h3>
                                <form action="" method="post">
                                    {foreach $addresses as $address}
                                        <div class="form-group">
                                             <div class="col-md-12">
                                                <div class="radio">
                                                    <label><input type="radio" name="address" value="{$address->getId()}" class="mr-2">{$address->getCity()}</label>
                                                </div>
                                             </div>
                                        </div>
                                    {/foreach}
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="cart-detail p-3 p-md-4">
                                <h3 class="billing-heading mb-4">Metodo di pagamento</h3>
                                <form action="" method="post">
                                {foreach $cards as $card}
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="radio">
                                                <label><input type="radio" name="payment" value="{$card->getId()}" class="mr-2"> {$card->getNumber()}</label>
                                        </div>
                                    </div>
                                </div>
                                {/foreach}
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <a href="#"class="btn btn-primary py-3 px-4">Place an order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Sezione carrello dove sono i prodotti -->

{/block}
