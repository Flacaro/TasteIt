{extends file='src/templates/base/base.tpl'}
{block name=title}Prodotto{/block}
{block name=body}

            <form action="/products/{$product->getId()}" method="GET">
                <button type="submit">X</button>
            </form>

            {$product->getId()}
            {$product->getName()}
            {$product->getDescription()}
            {$product->getPrice()}



{/block}

{* qua si vedranno le review? *}