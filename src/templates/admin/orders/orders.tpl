{extends file='src/templates/admin/leftMenu.tpl'}
{block name=admin}
  <div class="content">
    {foreach $orders as $order}
    <div class="row">
      <div class="col-md-8">
        <div class="card card-user">
          <div class="card-header">
            <h5 class="card-title" style="font-weight: bold">Info dell'ordine</h5>
            <div class="button-container">
              <div class="row">
                <div class="col-lg-3 col-md-6 col-6 ml-auto">
                  <h5><small>Indirizzo</small><br>placeholder</h5>
                </div>
                <div class="col-lg-4 col-md-6 col-6 ml-auto mr-auto">
                  <h5><small>Nome del Cliente</small><br>{$orders[0][1]->getName()}</h5>
                </div>
                <div class="col-lg-3 mr-auto">
                  <h5><small>Pagato con</small><br>placeholder</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="card-body">
            <div class="table-responsive">
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
                  <tr>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div style="margin-left:1000px">
              <a class="btn btn-round btn-primary">Accetta ordine</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    {/foreach}
  </div>
{/block}