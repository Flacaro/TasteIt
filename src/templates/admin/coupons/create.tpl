{extends file='src/templates/admin/leftMenu.tpl'}
{block name=admin}
    <div class="content">
        <div class="row">
            <div class="col-md-8">
                <h4>Scegli uno sconto</h4>
                <div class="card card-user">
                  <div class="card-body">
                        {if $message != NULL}
                            <h3 class="text-danger">{$message}</h3>
                        {/if}
                      <label for="priceCut">Scegli uno sconto per creare un coupon</label>
                        <form action="/admin/coupons" method="post">
                            <input type="text" id="priceCut" name="price_cut">

                            <button class="btn btn-primary" type="submit">Crea</button>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
{/block}