{extends file='src/templates/admin/leftMenu.tpl'}
{block name=admin}
    <div class="content">
        <div class="row">
            <div class="col-md-12">


                <form action="/admin/customers" method="post">
                    {*<select name="couponId" id="coupons">

                        {foreach $coupons as $coupon}
                            <option value="{$coupon->getId()}">{$coupon->getId()} con sconto di {$coupon->getpriceCut()}</option>
                        {/foreach}

                    </select>*}

                    <div class="row">
                        <div class="col-md-2 pr-1">
                            <div class="form-group">
                                <label>Percentuale%</label>
                                <input type="text" class="form-control" name="pricecut" placeholder="Percentuale di sconto del coupon" maxlength="20">
                            </div>
                        </div>
                        <div class="col-md-4 px-1">
                            <div class="form-group">
                                <label>Data di Scadenza</label>
                                <input type="date" class="form-control" name="expiration">
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit">Invia</button>

                    <h6>I coupon verranno inviati a:</h6>

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
                                <input type="text" hidden name="customers[]" value="{$customer[0]->getId()}">
                                <tr>
                                    <td>
                                        {$customer[0]->getName()}
                                    </td>
                                    <td>
                                        {$customer[0]->getSurname()}
                                    </td>
                                    <td>
                                        {$customer[0]->getEmail()}
                                    </td>
                                    <td>
                                        {$customer[1]}
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