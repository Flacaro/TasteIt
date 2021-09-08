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
                        {foreach $coupons as $coupon}
                            <p>
                                <span>{$coupon->getId()}</span>
                                <span>{$coupon->priceCut}</span>
                            </p>
                        {/foreach}
                    </div>

                </div>
            </div>
        </div>
    </div>
{/block}