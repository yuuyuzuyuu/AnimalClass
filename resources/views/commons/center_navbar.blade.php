<header class="mb-4">
    <nav class="navbar navbar-expand-sm">
        <a class="navbar-brand" href="/center">Animal Class(Center)</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                @if (Auth::guard('center')->check())
                    <li>{!! link_to_route('center.show', 'マイページ', ['center' => Auth::id()], ['class' => 'nav-link']) !!}</li>
                    <li>{!! link_to_route('center.logout.get', 'ログアウト',[], ['class' => 'nav-link']) !!}</li>
                @else
                    <li>{!! link_to_route('center.signup.get', '会員登録', [], ['class' => 'nav-link']) !!}</li>
                    <li>{!! link_to_route('center.login', 'ログイン', [], ['class' => 'nav-link']) !!}</li>
                @endif
                    <li>{!! link_to_route('user.index', '一般ユーザーの方はこちら', [], ['class' => 'nav-link']) !!}</li>
            </ul>
        </div>
    </nav>
</header>