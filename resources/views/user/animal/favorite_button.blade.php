@if(Auth::guard('user')->check())
  @if (Auth::user()->is_favorite($animal->id))
    {!! Form::open(['route' => ['favorites.unfavorite', $animal->id], 'method' => 'delete']) !!}
      {!! Form::button('<i class="fas fa-heart"></i>', ['class' => "btn f-btn", 'type' => 'submit']) !!}
    {!! Form::close() !!}
  @else
    {!! Form::open(['route' => ['favorites.favorite', $animal->id]]) !!}
      {!! Form::button('<i class="far fa-heart"></i>', ['class' => "btn f-btn", 'type' => 'submit']) !!}
    {!! Form::close() !!}
  @endif
@endif
