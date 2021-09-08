{extends file='src/templates/admin/leftMenu.tpl'}
{block name=admin}
  <div class="content">
    <div class="row">
      <div class="col-md-8">
        <div class="card card-user">
          <div class="card-header">
            <h5 class="card-title">Crea il coupon</h5>
            <div class="col-md-3 px-1">
              <div class="form-group">
                <label>inviato da:</label>
                <p>Taste IT</p>
              </div>
            </div>
            <div class="col-md-3 px-1">
              <div class="form-group">
                <label>Indirizzo Email:</label>
                <p>tasteIt@gmail.com</p>
              </div>
            </div>
          </div>

          <div class="card-body">
            <form>
              <div class="row">
                <div class="col-md-5 pr-1">
                 {* <div class="form-group">
                    <label>Sconto in percentuale</label>
                    <input type="text" class="form-control" placeholder="" value="">
                  </div>*}
                  <form action="/admin/couponCreate" method="post">
                    <div>
                      <label for="color">Percentuale sconto:</label>
                      <select name="sconto" id="sconto">
                        <option value="">Seleziona una percentuale di sconto</option>
                        {foreach $pricesCut as $priceCut}
                          <option value="pricesCut">{$priceCut}</option>
                        {/foreach}
                      </select>
                      <button class="btn btn-primary" type="submit">Invia</button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 pr-1">
                  <label>Clienti a cui verrà inviato il coupon</label>
                  {foreach $customers as $customer}
                  <div class="form-group">
                    <input type="email" disabled="" class="form-control" placeholder="tasteit@gmail.com" value="{$customer->getEmail()}">
                  </div>
                  {/foreach}
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
{/block}