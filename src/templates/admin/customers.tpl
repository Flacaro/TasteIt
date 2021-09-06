{extends file='src/templates/admin/leftMenu.tpl'}
{block name=admin}
   <div class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title"> Clienti che hanno speso di più</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                  <div>
                    <th>
                      Nome
                    </th>
                    <th>
                      Cognome
                    </th>
                    <th class="text-right">
                      Totale
                    </th>
                  </div>
                  </thead>
                  <tbody>
                  {foreach $customers as $customer}
                      <td>
                        ciao
                      </td>
                      <td>
                        ciao
                      </td>
                      <td class="text-right">
                        $36,738
                      </td>

                 {/foreach}
                  </tbody>
                </table>

              </div>
            </div>
          </div>
        </div>

{/block}