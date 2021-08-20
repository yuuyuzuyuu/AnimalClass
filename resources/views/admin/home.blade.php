<h1>Admin top</h1>
 @if (Auth::check())
    <li>{!! link_to_route('admin.logout.get', 'ログアウト') !!}</li>
@else
    <li>{!! link_to_route('admin.login', 'ログイン', [], ['class' => 'nav-link']) !!}</li>
@endif