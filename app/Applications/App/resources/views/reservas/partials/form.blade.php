<div class="row">

    {!! Form::hidden('evento_id', $reserva->evento_id) !!}

    <div class="form-group col-md-2">
        {!! Form::label('condomino_id', 'Reserva para *', array('class' => 'text-red')) !!}
        {!! Form::select('condomino_id', $condominos, null, array('class'=>'form-control', 'placeholder' => 'Selecione um condômino')); !!}
    </div>
    <div class="form-group col-md-2">
        {!! Form::label('area_externa_id', 'Local *', array('class' => 'text-red')) !!}
        {!! Form::select('area_externa_id', $areaExterna, null, array('class'=>'form-control', 'placeholder' => 'Selecione uma área externa')); !!}
    </div>
    <div class="form-group col-md-8">
        {!! Form::label('observacao', 'Descrever evento *', array('class' => 'text-red')) !!}
        {!! Form::text('observacao', null, array('class'=>'form-control')); !!}
    </div>  

    <div class="form-group col-md-4">
        {!! Form::label('horario_inicio', 'Horário de início *', array('class' => 'text-red')) !!}
        {!! Form::text('horario_inicio', null, array('class' => 'form-control dateTimePicker')) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('horario_fim', 'Horário de término*', array('class' => 'text-red')) !!}
        {!! Form::text('horario_fim', null, array('class' => 'form-control dateTimePicker')) !!}
    </div>

    <div class="form-group col-md-2">
        {!! Form::label('ativo', 'Ativo *', array('class' => 'text-red')) !!}
        <br/>
        {!! Form::radio('ativo', 'S', array('class' => 'form-control')) !!} Sim
        {!! Form::radio('ativo', 'N', array('class' => 'form-control')) !!} Não
    </div>


</div>