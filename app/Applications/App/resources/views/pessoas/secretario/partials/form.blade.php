<div class="row">
    <div class="form-group col-md-4">
        {!! Form::label('pessoas_id', 'Pessoa *', array('class' => 'text-red')) !!}
        {!! Form::select('pessoas_id', $pessoas, null, array('class'=>'form-control', 'placeholder' => 'Selecione uma pessoa...')); !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('secretario_tipos_id', 'Tipo de secretário *', array('class' => 'text-red')) !!}
        {!! Form::select('secretario_tipos_id', $secretarioTipos, null, array('class'=>'form-control', 'placeholder' => 'Selecione um secretário...')); !!}
    </div>
    <div class="form-group col-md-2">
        {!! Form::label('secretario_exercicio', 'Em exercício *', array('class' => 'text-red')) !!}
        <br/>
        {!! Form::radio('secretario_exercicio', 'S', array('class' => 'form-control')) !!} Sim
        {!! Form::radio('secretario_exercicio', 'N', array('class' => 'form-control')) !!} Não
    </div>
</div>
<div class="row">
   <div class="form-group col-md-10">
        {!! Form::label('modelo_certidao', 'Modelo de certidão *', array('class' => 'text-red')) !!}
        {!! Form::text('modelo_certidao', null, array('class'=>'form-control', 'maxlength'=>'100')); !!}
    </div>
    <div class="form-group col-md-2">
        {!! Form::label('ativo', 'Ativo *', array('class' => 'text-red')) !!}
        <br/>
        {!! Form::radio('ativo', 'S', array('class' => 'form-control')) !!} Sim
        {!! Form::radio('ativo', 'N', array('class' => 'form-control')) !!} Não
    </div>
</div>