<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            @if (!empty(config('settings.frontend.menu')))
                <ul class="nav flex-column">
                    @each('_left_menu_item', config('settings.frontend.menu'), 'menu')
                </ul>
            @endif
        </ul>

        @auth
            @if (!empty(config('settings.backend.menu')))
                <hr>
                <h6>Adminisration menu</h6>
                <ul class="nav flex-column">
                    @each('_left_menu_item', config('settings.backend.menu'), 'menu')
                </ul>
            @endif
        @endauth

    </div>
</nav>
