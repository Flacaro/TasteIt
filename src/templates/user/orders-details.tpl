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
            {if $order->getState()!="Accepted"}
            <form action="/profile/{$order->getId()}/add" method="post">
                <input type="text" name="orderId" class="quantity form-control input-number" value="{$order->getId()}" hidden>
                <div style="display: flex; justify-content: center;">
                    <button class="btn btn-primary btn-number mb-2"  type="submit">Metti Prodotti nel Carrello</button>
                </div>
            </form>
            {/if}
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
            {if $order->getState()=="Accepted"}
                <div style="display:flex; justify-content: center">
                    <h3>Il tuo ordine è stato accettato </h3>
                </div>
                <div style="display:flex; justify-content: center">
                    <h4> Orario di arrivo previsto: {$order->getArrivalTime()}</h4>
                </div>
                <div style="display:flex; justify-content: center">
                    <form action="/profile/{$order->getId()}/confirm" method="post">
                        <input type="text" name="orderId" class="quantity form-control input-number" value="{$order->getId()}" hidden>
                        <button class="btn btn-primary btn-number mb-2"  type="submit">Conferma di aver ricevuto l'ordine</button>
                    </form>
                </div>
            {/if}
        </div>
    </section>
{/block}