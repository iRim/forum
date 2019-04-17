<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            @if (!empty(config('settings.frontend.menu')))
                <ul class="nav flex-column">
                    @each('_left_menu_item', config('settings.frontend.menu'), 'menu')
                </ul>
            @endif
        </ul>

        @auth('admin')
            @if (!empty(config('settings.backend.menu')))
                <hr>
                <h6 class="ml-3">{{ __('messages.backend.menu') }}</h6>
                <ul class="nav flex-column">
                    @each('_left_menu_item', config('settings.backend.menu'), 'menu')
                </ul>
            @endif
        @endauth

        <div class="ml-3 mt-5">
            <h6>{{ __('Мови') }}</h6>
            <div class="btn-group" role="group">
                @foreach (config('app.locales') as $locale)
                    <a href="{{ route(Route::currentRouteName(),['lang'=>$locale]) }}" class="btn btn-secondary {{ App::getLocale() == $locale?'active':'' }}">{{ __('messages.'.$locale) }}</a>
                @endforeach
            </div>
        </div>


    </div>
</nav>
