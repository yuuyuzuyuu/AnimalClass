<header class="mb-4">
    <nav class="navbar navbar-expand-sm">
        @if (Auth::guard('user')->check())
            <a class="navbar-brand" href="/">Animal Class</a>
        @elseif (Auth::guard('center')->check())
            <a class="navbar-brand" href="/animals/create">Animal Class(Center)</a>
        @else
            <a class="navbar-brand" href="/">Animal Class</a>
        @endif
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                @if (Auth::guard('user')->check())
                    <li>{!! link_to_route('user.show', 'マイページ', ['user' => Auth::id()], ['class' => 'nav-link']) !!}</li>
                    <li>{!! link_to_route('animals.index', 'わんにゃん一覧', [], ['class' => 'nav-link']) !!}</li>
                    <li>{!! link_to_route('user.logout.get', 'ログアウト', [], ['class' => 'nav-link']) !!}</li>
                    <li>{!! link_to_route('center.login', '施設の方はこちら', [], ['class' => 'nav-link']) !!}</li>
                @elseif (Auth::guard('center')->check())
                    <li>{!! link_to_route('center.show', 'マイページ', ['center' => Auth::guard('center')->id()], ['class' => 'nav-link']) !!}</li>
                    <li>{!! link_to_route('animals.create', 'わんにゃん登録', [], ['class' => 'nav-link']) !!}</li>
                    <li>{!! link_to_route('animals.index', 'わんにゃん一覧', [], ['class' => 'nav-link']) !!}</li>
                    <li>{!! link_to_route('center.logout.get', 'ログアウト',[], ['class' => 'nav-link']) !!}</li>
                    <li>{!! link_to('/', '一般ユーザーの方はこちら', ['class' => 'nav-link']) !!}</li>
                @else
                    <li>{!! link_to_route('signup.get', '会員登録', [], ['class' => 'nav-link']) !!}</li>
                    <li>{!! link_to_route('user.login', 'ログイン', [], ['class' => 'nav-link']) !!}</li>
                    <li>{!! link_to_route('center.login', '施設の方はこちら', [], ['class' => 'nav-link']) !!}</li>
                @endif
            </ul>
        </div>
    </nav>
</header>