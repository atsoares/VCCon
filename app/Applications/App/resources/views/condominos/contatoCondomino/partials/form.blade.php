<div class="row">
    <div class="form-group col-md-4">
        {!! Form::label('condomino_id', 'Condômino *', array('class' => 'text-red')) !!}
        {!! Form::select('condomino_id', $condomino, null, array('class'=>'form-control', 'placeholder' => 'Selecione o condômino...')); !!}
    </div>
    <div class="form-group col-md-8">
        {!! Form::label('nome', 'Nome *', array('class' => 'text-red')) !!}
        {!! Form::text('nome', null, array('class'=>'form-control', 'maxlength' => '60')); !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-md-4">
        {!! Form::label('telefone', 'Telefone', array('class' => '')) !!}
        {!! Form::text('telefone', null, array('class'=>'form-control')); !!}
    </div>
   <div class="form-group col-md-4">
        {!! Form::label('email', 'Email', array('class' => '')) !!}
        {!! Form::text('email', null, array('class'=>'form-control')); !!}
    </div>
    <div class="form-group col-md-2">
        {!! Form::label('ativo', 'Ativo *', array('class' => 'text-red')) !!}
        <br/>
        {!! Form::radio('ativo', 'S', array('class' => 'form-control')) !!} Sim
        {!! Form::radio('ativo', 'N', array('class' => 'form-control')) !!} Não
    </div>
</div>