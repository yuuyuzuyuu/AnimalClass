<div class="logo text-center">
    @if (Auth::guard('user')->check())
        <a href='/'><img src="/images/logo.png"></a>
    @elseif (Auth::guard('center')->check())
        <a href='/animals'><img src="/images/logo.png"></a>
    @else
        <a href='/'><img src="/images/logo.png"></a>
    @endif
</div>
<nav>
    <ul>
        <li><a href="/">トップ</a></li>
        <li>{!! link_to_route('animals.index', 'わんにゃん一覧', [], ['class' => 'a']) !!}</li>
        <li class="has-child"><a><i class="fas fa-paw"></i>&nbsp;一般の方</a>
            <ul>
                <li>{!! link_to_route('user.login', 'ログイン', [], ['class'=>'a']) !!}</li>
                <li>{!! link_to_route('signup.get', '会員登録', [], ['class'=>'a']) !!}</li>
                @if (Auth::guard('user')->check())
                    <li>{!! link_to_route('user.show', 'マイページ', ['user' => Auth::id()], ['class' => 'a']) !!}</li>
                @endif
            </ul>
        </li>
        <li class="has-child"><a><i class="fas fa-paw"></i>&nbsp;施設の方</a>
            <ul>
                <li>{!! link_to_route('center.login', 'ログイン', [], ['class'=>'a']) !!}</li>
                <li>{!! link_to_route('center.signup.get', '会員登録', [], ['class'=>'a']) !!}</li>
                @if (Auth::guard('center')->check())
                    <li>{!! link_to_route('center.show', 'マイページ', ['center' => Auth::guard('center')->id()], ['class' => 'a']) !!}</li>
                    <li>{!! link_to_route('animals.create', 'わんにゃん登録', [], ['class'=>'a']) !!}</li>
                @endif
            </ul>
        </li>
        @if (Auth::guard('user')->check())
            <li>{!! link_to_route('user.logout.get', 'ログアウト', [], ['class' => 'nav-link']) !!}</li>
        @elseif (Auth::guard('center')->check())
            <li>{!! link_to_route('center.logout.get', 'ログアウト',[], ['class' => 'nav-link']) !!}</li>
        @endif
    </ul>
</nav>