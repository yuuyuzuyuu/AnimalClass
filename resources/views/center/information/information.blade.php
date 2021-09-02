@foreach ($animal->informations as $information)
<div class="information-box">
    <p>{!! $information->content !!}</p>
    <p class="information-time">{!! date('Y/m/d H:i', $information->timestamp) !!}</p>
    <div class="information-delete text-right">
        @if(Auth::id('center') == $information->center_id)
            {!! Form::open(['route' => ['informations.destroy', $information->id], 'method' => 'delete']) !!}
                {!! Form::submit('消', ['class' => 'btn btn-sm']) !!}
            {!! Form::close() !!}
        @endif 
    </div>
</div>
@endforeach