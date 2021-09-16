@foreach ($animal->informations as $information)
    @if($animal->informations)
        <div class="second-title">New Information</div>
    @endif
    <div class="information-box">
        <p>{!! $information->content !!}</p>
        <p class="information-time">{!! $information->created_at->format('Y/m/d H:i') !!}</p>
        <div class="information-delete text-right">
            @if(Auth::id('center') === $information->center_id && Auth::guard('center')->check())
                {!! Form::open(['route' => ['informations.destroy', $information->id], 'method' => 'delete']) !!}
                    {!! Form::button('<i class="fas fa-trash"></i>', ['class' => 'btn', 'type' => 'submit']) !!}
                {!! Form::close() !!}
            @endif
        </div>
    </div>
@endforeach