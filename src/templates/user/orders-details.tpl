{extends file='src/templates/base/base.tpl'}
{block name=title}Profilo{/block}
{block name=body}
    <section class="hero-wrap hero-wrap-2" style="background-image: url('https://images.unsplash.com/photo-1513104890138-7c749659a591?ixlib=rb-1.2.1&w=1000&q=80');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate mb-5 text-center">
                    <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Carrello<i class="fa fa-chevron-right"></i></span></p>
                    <h2 class="mb-0 bread">Ordine</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <form action="/profile/{$orderId}/add" method="post">
                <input type="text" name="orderId" class="quantity form-control input-number" value="{$orderId}" hidden>
                <div style="display: flex; justify-content: center;">
                    <button class="btn btn-primary btn-number mb-2"  type="submit">Metti Prodotti nel Carrello</button>
                </div>
            </form>
            <div class="row">

                <div class="table-wrap" style="overflow:hidden">
                    <table class="table">

                        <thead class="thead-primary">
                        <tr>
                            <th>&nbsp;</th>
                            <th>Prodotto</th>
                            <th>Prezzo</th>
                            <th>Quantità</th>
                            <th>Totale</th>
                            <th>Azioni</th>
                            <th>&nbsp;</th>
                        </tr>

                        </thead>

                        <tbody>
                        {foreach $products as $product}
                            <tr class="alert" role="alert">
                                <td>
                                    <div class="img" style="background-image: url({$product[0]->getImagePath()});"></div>
                                </td>
                                <td>
                                    <div class="email">
                                        <span>{$product[0]->getName()}</span>
                                        <span>{$product[0]->getDescription()}</span>
                                    </div>
                                </td>
                                <td>{$product[0]->getPrice()}</td>
                                <td class="quantity">
                                    <div class="input-group" style="width: 9em">
                                        {$product[1]}

                                    </div>
                                </td>
                                <td>{math equation="{$product[0]->getPrice()} * {$product[1]}"}</td>

                                <td>
                                    <div class="desc" style="display: flex">
                                        <form action="/products/{$product[0]->getId()}">
                                            <button style="margin-left: 1rem" class="btn btn-primary btn-number" type="submit"><span class="flaticon-visibility"></span></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        {/foreach}

                        </tbody>
                    </table>
                </div>
            </div>
            {*<div class="row justify-content-end">
                <div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
                    <div class="cart-total mb-3">
                        <h3>Totale del carrello</h3>
                        <p class="d-flex">
                        <span>
                            Totale parziale
                        </span>
                            <span>
                            {$partialTotal=0}
                                {foreach $products as $product}
                                    {assign var="partialTotal" value = $partialTotal + $product[0]->getPrice() * $product[1]}
                                {/foreach}
                            $ {$partialTotal}
                        </span>
                        </p>
                        <p class="d-flex">
                            <span>Delivery</span>
                            <span>$0.00</span>
                        </p>
                        <p class="d-flex total-price">
                            <span>Totale</span>
                            <span>
                            *}{**}{*{foreach $products as $product}
                                {assign var="total" value=$total+$product[3]*$product[5]}
                            {/foreach}
                            $ {$total}*}{**}{*
                             $ {$total}
                        </span>
                        </p>
                    </div>
                    <p class="text-center"><a href="/cart/checkout" class="btn btn-primary py-3 px-4">checkout</a></p>
                </div>
            </div>*}
        </div>
    </section>
{/block}