{extends file='src/templates/admin/leftMenu.tpl'}
{block name=admin}
    <div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <h5 class="card-title" style="margin-left:20px; font-weight: bold">Info sull'ordine</h5>
                    </div>
                    <div class="button-container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-6 ml-auto">
                                <h5><small>Indirizzo</small><br>Via {$order->getAddress()->getStreet()} {$order->getAddress()->getHomeNumber()}, {$order->getAddress()->getCity()}</h5>
                            </div>
                            <div class="col-lg-4 col-md-6 col-6 ml-auto mr-auto">
                                <h5><small>Nome Cliente</small><br>{$customer->getName()} {$customer->getSurname()}</h5>
                            </div>
                            <div class="col-lg-3 mr-auto">
                                <h5><small>Pagato con</small><br>{if get_class($order->getPayment())=="App\Models\Cash"}Contanti{else}Carta di Credito{/if}</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive" style="overflow:hidden">
                        <table class="table">

                            <thead class=" text-primary">
                            <th>
                                Nome
                            </th>
                            <th>
                                Quantità
                            </th>
                            <th>
                                Prezzo
                            </th>
                            </thead>
                            <tbody>
                            {foreach $products as $product}
                            <tr>
                                <td>
                                    {$product->getName()}
                                </td>
                                <td>
                                    {$product->getQuantity()}
                                </td>
                                <td>
                                    ${$product->getPrice()*$product->getQuantity()}
                                </td>
                            </tr>
                            {/foreach}
                                <tr>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                        <h5>${$order->getTotal()}</h5>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    {if $order->getState()=="Pending"}
                    <div class="d-flex" >
                        <form method="POST" action="">
                            <div class="update ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">Accetta Ordine</button>
                            </div>
                        </form>
                            <div class="update ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">Rifiuta Ordine</button>
                            </div>
                    </div>
                    {else}
                        <div style="text-align: center">
                        <h3>{$order->getState()}</h3>
                        </div>
                    {/if}
                </div>
            </div>
        </div>
    </div>
{/block}