{extends file='src/templates/base/nav.tpl'}
{block name=categories}
<ul>
    {foreach $categories as $category}
        <li>
            {$category->getCategoryName()}
        </li>

    {/foreach}
</ul>
{/block}
