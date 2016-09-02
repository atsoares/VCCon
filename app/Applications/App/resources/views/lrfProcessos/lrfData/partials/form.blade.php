<div class="row">
    <div class="form-group col-md-2">
        {!! Form::label('exercicio', 'Exercício *', array('class' => 'text-red')) !!}
        {!! Form::number('exercicio', \Carbon\Carbon::now()->year, array('class' => 'form-control', 'readonly')) !!}
    </div>

    <div class="form-group col-md-3">
        {!! Form::label('periodo_id', 'Períodos *', array('class' => 'text-red')) !!}
        {!! Form::select('periodo_id', $lrfPeriodos, null, array('class' => 'form-control', 'placeholder' => 'Selecione um período...')) !!}
    </div>

    <div class="form-group col-md-2">
        {!! Form::label('data_publicacao', 'Data Publicação *', array('class' => 'text-red')) !!}
        {!! Form::date('data_publicacao', null, array('class' => 'form-control')) !!}
    </div>

    <div class="form-group col-md-2">
        {!! Form::label('data_limite', 'Data Limite *', array('class' => 'text-red')) !!}
        {!! Form::date('data_limite', null, array('class' => 'form-control')) !!}
    </div>
</div>