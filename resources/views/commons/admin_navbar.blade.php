<div class="logo text-center">
    <a href='/admin'><img src="/images/logo.png"></a>
</div>
<nav>
    <ul>
        <li><a href="/admin">トップ</a></li>
        @if (Auth::guard('admin')->check())
            <li>{!! link_to_route('admin.logout.get', 'ログアウト',[], ['class' => 'nav-link']) !!}</li>
        @else
            <li>{!! link_to_route('admin.login', 'ログイン', [], ['class' => 'nav-link']) !!}</li>
        @endif
    </ul>
</nav>