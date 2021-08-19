{extends file='src/templates/base/base.tpl'}
{block name=title}Prodotto{/block}
{block name=body}

    <ul>
        {foreach $products as $product}
            <li>
                <form action="/products/{$product->getId()}" method="GET">
                    <button type="submit">X</button>
                </form>

                {$product->getId()}
                {$product->getName()}
                {$product->getDescription()}
                {$product->getPrice()}
            </li>

        {/foreach}
    </ul>


{/block}

{* qua si vedranno le review? *}