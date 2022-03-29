<div class="logo text-center">
    <p>Animal Class</p>
</div>
<nav>
    <ul>
        <li><a href="/">トップ</a></li>
        <li>{!! link_to_route('animals.index', 'わんにゃん一覧', [], ['class' => 'a']) !!}</li>
        <li class="has-child"><a><i class="fas fa-paw faa-tada animated-hover"></i>&nbsp;一般の方</a>
            <ul>
                @if (Auth::guard('user')->check())
                    <li>{!! link_to_route('user.show', 'マイページ', ['user' => Auth::id()], ['class' => 'a']) !!}</li>
                @else
                    <li>{!! link_to_route('user.login', 'ログイン', [], ['class'=>'a']) !!}</li>
                    <li>{!! link_to_route('signup.get', '会員登録', [], ['class'=>'a']) !!}</li>
                @endif
            </ul>
        </li>
        <li class="has-child"><a><i class="fas fa-paw faa-tada animated-hover"></i>&nbsp;施設の方</a>
            <ul>
                @if (Auth::guard('center')->check())
                    <li>{!! link_to_route('center.show', 'マイページ', ['center' => Auth::guard('center')->id()], ['class' => 'a']) !!}</li>
                    <li>{!! link_to_route('animals.create', 'わんにゃん登録', [], ['class'=>'a']) !!}</li>
                @else
                    <li>{!! link_to_route('center.login', 'ログイン', [], ['class'=>'a']) !!}</li>
                    <li>{!! link_to_route('center.signup.get', '会員登録', [], ['class'=>'a']) !!}</li>
                @endif
            </ul>
        </li>
        <li>{!! link_to_route('contact.index', 'お問い合わせ', [], ['class' => 'a']) !!}</li>
        @if (Auth::guard('user')->check())
            <li>{!! link_to_route('user.logout.get', 'ログアウト', [], ['class' => 'nav-link']) !!}</li>
        @elseif (Auth::guard('center')->check())
            <li>{!! link_to_route('center.logout.get', 'ログアウト',[], ['class' => 'nav-link']) !!}</li>
        @endif
    </ul>
</nav>