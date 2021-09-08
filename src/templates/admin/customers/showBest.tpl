{extends file='src/templates/admin/leftMenu.tpl'}
{block name=admin}
    <div class="content">
        <div class="row">
            <div class="col-md-12">


                <form action="/admin/customers" method="post">
                    <select name="couponId" id="coupons">

                        {foreach $coupons as $coupon}
                            <option value="{$coupon->getId()}">{$coupon->getId()} con sconto di {$coupon->priceCut}</option>
                        {/foreach}

                    </select>

                    <br/>

                    <button class="btn btn-primary" type="submit">Taac</button>

                    <table class="table">
                        <thead class=" text-primary">
                        <th>
                            Nome
                        </th>
                        <th>
                            Cognome
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Totale
                        </th>
                        </thead>
                        <tbody>

                            {foreach $customers as $customer}
                                <input type="text" hidden name="customers[]" value="{$customer->getId()}">
                                <tr>
                                    <td>
                                        {$customer->getName()}
                                    </td>
                                    <td>
                                        {$customer->getSurname()}
                                    </td>
                                    <td>
                                        {$customer->getEmail()}
                                    </td>
                                    <td>
                                        {$customer->getTotal()}
                                    </td>
                                </tr>
                            {/foreach}
                        </tbody>
                    </table>

                </form>


            </div>
        </div>
    </div>
{/block}