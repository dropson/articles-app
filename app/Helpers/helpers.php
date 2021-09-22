<?php


function activeMainLink() {
    if(request()->is('/'))
    {
        return 'menu-link__active';
    }
    return  '';
}

function activeArticleLink() {
    if((request()->is('articles') or request()->is('articles/*')))
    {
        return 'menu-link__active';
    }
    return  '';
}
