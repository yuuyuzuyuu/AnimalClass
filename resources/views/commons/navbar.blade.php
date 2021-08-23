<header class="mb-4">
    <nav class="navbar navbar-expand-sm">
        <a class="navbar-brand" href="/">Animal Class</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                @if (Auth::guard('user')->check())
                    <li>{!! link_to_route('user.show', 'マイページ', ['user' => Auth::id()], ['class' => 'nav-link']) !!}</li>
                    <li>{!! link_to_route('user.logout.get', 'ログアウト', [], ['class' => 'nav-link']) !!}</li>
                @else
                    <li>{!! link_to_route('signup.get', '会員登録', [], ['class' => 'nav-link']) !!}</li>
                    <li>{!! link_to_route('user.login', 'ログイン', [], ['class' => 'nav-link']) !!}</li>
                @endauth
                    <li>{!! link_to_route('center.index', 'センターの方はこちら', [], ['class' => 'nav-link']) !!}</li>
            </ul>
        </div>
    </nav>
</header>