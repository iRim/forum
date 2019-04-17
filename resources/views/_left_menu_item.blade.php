<li>
    @if (!empty($menu['url']))
        <a class="nav-link" href="{{ preg_match('/^[\w\.]+$/ui',$menu['url'])?route($menu['url']):$menu['url'] }}">
    @else
        <span class="nav-link pointer">
    @endif
        <span data-feather="{{ $menu['icon'] }}"></span>
        {{ preg_match('/^[\w\.]+$/ui',$menu['title'])?__($menu['title']):$menu['title'] }}
    @if (!empty($menu['url']))
        </a>
    @else
        </span>
    @endif

    @if (isset($menu['childrens']))
        <ul>
            @each('_left_menu_item', $menu['childrens'], 'menu')
        </ul>
    @endif

</li>
