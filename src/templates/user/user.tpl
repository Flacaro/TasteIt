{extends file='src/templates/base/base.tpl'}
{block name=title}Users{/block}
{block name=users}
<ul>
    {foreach $users as $user}

        <li>
            {$user->getId()}
            {$user->getName()}
            {$user->getSurname()}
            {$user->getEmail()}
            {$user->getPassword()}
            {$user->getCartId()}
        </li>
    {/foreach}

</ul>
{/block}
