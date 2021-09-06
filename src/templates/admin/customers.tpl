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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{/block}