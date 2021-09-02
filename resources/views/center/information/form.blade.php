@if(Auth::id('center') == $animal->center_id)
{!! Form::open(['route' => 'informations.store']) !!}
    <div class="information-form">
        {!! Form::hidden('animal_id',$animal->id) !!}
        {!! Form::textarea('content', null, ['class' => 'form-control', 'rows' => '2']) !!}
        {!! Form::submit('送信', ['class' => 'btn btn-block']) !!}
    </div>
{!! Form::close() !!}
@endif