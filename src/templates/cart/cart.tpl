{extends file='src/templates/base/base.tpl'}
{block name=title}Carrello{/block}
{block name=body}
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
<section class="ftco-section">

    <div class="container">
        <div class="row">

            <div class="table-wrap" style="overflow:hidden">
                <table class="table">

                    <thead class="thead-primary">
                    <tr>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>Prodotto</th>
                        <th>Prezzo</th>
                        <th>Quantità</th>
                        <th>Totale</th>
                        <th>&nbsp;</th>
                    </tr>

                    </thead>

                    <tbody>
                   {foreach $products as $product}
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
                                <span>{$product[1]}</span>
                                <span>{$product[2]}</span>
                            </div>
                        </td>
                          <td>{$product[3]}</td>
                        <td class="quantity">
                            <div class="input-group" style="width: 9em">
                                <form action="/carts/{$cartId}/products/{$product[0]}/update" method="POST" style="float: left">
                                    <div class="button minus">

                                        <input hidden type="text" value="PUT" name="_method">
                                        <input hidden type="text" value="minus" name="option">

                                        <button class="btn btn-primary btn-number" type="submit"
                                                {if $product[5] == 1}
                                                    disabled
                                                {/if}
                                        >
                                            -
                                        </button>
                                    </div>
                                </form>

                                <input type="text" name="quantity" class="input-number"  data-min="1" data-max="100" value="{$product[5]}" style="width: 2em">

                                <form action="/carts/{$cartId}/products/{$product[0]}/update" method="POST" style="float: right">
                                    <div class="button plus">

                                        <input hidden type="text" value="PUT" name="_method">
                                        <input hidden type="text" value="plus" name="option">

                                        <button class="btn btn-primary btn-number" type="submit"> + </button>
                                    </div>
                                </form>

                            </div>
                        </td>
                          <td>{math equation="{$product[3]} * {$product[5]}"}</td>
                        <td>
                          {* <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="fa fa-close"></i></span>
                            </button>*}
                            <form action="/carts/{$cartId}/products/{$product[0]}/delete" method="POST">

                                <div class="button delete">

                                    <input hidden type="text" value="DELETE" name="_method">
                                    <input hidden type="text" value="delete" name="option">

                                    <button class="btn btn-primary btn-number" type="submit"> X </button>
                                </div>
                            </form>
                        </td>
                    </tr>
                    {/foreach}

                    </tbody>
                </table>
            </div>
        </div>
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
                                 {assign var="partialTotal" value=$partialTotal+$product[3]*$product[5]}
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
                                {assign var="total" value=$total+$product[3]*$product[5]}
                            {/foreach}
                            $ {$total}
                        </span>
                    </p>
                </div>
                <p class="text-center"><a href="/cart/checkout" class="btn btn-primary py-3 px-4">checkout</a></p>
            </div>
        </div>
    </div>
</section>
{/block}
