<div class="row">

    {{ Form::hidden('event_id', null) }}

    <div class="form-group col-md-4">
        {!! Form::label('tema', 'Objetivo da reunião *', array('class' => 'text-red')) !!}
        {!! Form::text('tema', null, array('class'=>'form-control')); !!}
    </div>  

    <div class="form-group col-md-8">
        {!! Form::label('observacao', 'Pauta *', array('class' => 'text-red')) !!}
        {!! Form::textarea('observacao', null, array('class'=>'form-control')); !!}
    </div>  

    <div class="form-group col-md-8">
        {!! Form::label('condominos_presente', 'Condôminos envolvidos', array('class' => '')) !!}
        {!! Form::text('condominos_presente', null, array('class'=>'form-control')); !!}
    </div>  

    <div class="form-group col-md-4">
        {!! Form::label('horario_inicio', 'Horário de início *', array('class' => 'text-red')) !!}
        {!! Form::text('horario_inicio', null, array('class' => 'form-control dateTimePicker')) !!}
    </div>


</div>