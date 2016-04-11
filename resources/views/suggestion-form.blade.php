{!! Form::open($formSetup) !!}

<div class="form-group">
    {!! Form::label('word', trans('forms.suggestions.word'), ['class' => 'sr-only']) !!}
    <div class="input-group">
        {!! Form::text('word', old('word'), ['class' => 'form-control', 'maxlength' => config('forms.wordLength', 100)]) !!}
        <div class="input-group-btn">
            {!! Form::button(trans('forms.suggestions.submit'), ['class' => 'btn btn-success', 'id' => 'submit', 'type' => 'submit']) !!}
        </div>
    </div>
</div>

{!! Form::close() !!}
