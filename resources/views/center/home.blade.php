<h1>Center top</h1>
 @if (Auth::check())
    <li>{!! link_to_route('center.logout.get', 'ログアウト') !!}</li>
@else
    <li>{!! link_to_route('ce.login', 'ログイン', [], ['class' => 'nav-link']) !!}</li>
@endif