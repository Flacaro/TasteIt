{extends file='src/templates/admin/leftMenu.tpl'}
{block name=admin}
    <div class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="card card-user">


                    <div class="card-body">
                        {if $message != NULL}
                            <h3 class="text-danger">{$message}</h3>
                        {/if}
                        <form action="/admin/coupons" method="post">

                            <label for="priceCut">Sconto</label>
                            <input type="text" id="priceCut" name="price_cut">

                            <button class="btn btn-primary" type="submit">Crea</button>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
{/block}