{extends file='src/templates/base/base.tpl'}
{block name=categories}
<ul>
    {foreach $categories as $category}
        <li>
            {$category->getCategoryName()}
        </li>

    {/foreach}
</ul>
{/block}
