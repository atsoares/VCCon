<div class="row">
    <div class="form-group col-md-4">
        {!! Form::label('condomino_id', 'Condômino *', array('class' => 'text-red')) !!}
        {!! Form::select('condomino_id', $condomino, null, array('class'=>'form-control', 'placeholder' => 'Selecione o condômino...')); !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('marca', 'Marca *', array('class' => 'text-red')) !!}
        {!! Form::text('marca', null, array('class'=>'form-control')); !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('modelo', 'Modelo *', array('class' => 'text-red')) !!}
        {!! Form::text('modelo', null, array('class'=>'form-control')); !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-md-4">
        {!! Form::label('placa', 'Placa *', array('class' => 'text-red')) !!}
        {!! Form::text('placa', null, array('class'=>'form-control', 'maxlength' => '7')); !!}
    </div>
   <div class="form-group col-md-4">
        {!! Form::label('ano', 'Ano *', array('class' => 'text-red')) !!}
        {!! Form::text('ano', null, array('class'=>'form-control', 'maxlength' => '4')); !!}
    </div>
    <div class="form-group col-md-2">
        {!! Form::label('ativo', 'Ativo *', array('class' => 'text-red')) !!}
        <br/>
        {!! Form::radio('ativo', 'S', array('class' => 'form-control')) !!} Sim
        {!! Form::radio('ativo', 'N', array('class' => 'form-control')) !!} Não
    </div>
</div>