{extends file='src/templates/admin/leftMenu.tpl'}
{block name=admin}
    <div class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="card card-user">
                    <div class="card-header">
                        <a class="btn btn-round btn-primary" href="/admin/coupons/create">
                            Crea un coupon
                        </a>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>
                                    Id
                                </th>
                                <th>
                                    Sconto
                                </th>
                                </thead>
                                <tbody>
                                {foreach $coupons as $coupon}
                                    <tr>
                                        <td>
                                            {$coupon->getId()}
                                        </td>
                                        <td>
                                            {$coupon->priceCut}
                                        </td>
                                    </tr>
                                {/foreach}
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
{/block}