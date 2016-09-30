<div class="row">
    <div class="form-group col-md-9">
        {!! Form::label('nome', 'Nome *', array('class' => 'text-red')) !!}
        {!! Form::text('nome', null, array('class'=>'form-control', 'maxlength'=>'60')); !!}
    </div>
    <div class="form-group col-md-3">
        {!! Form::label('cpf', 'CPF *', array('class' => 'text-red')) !!}
        {!! Form::text('cpf', null, array('class'=>'form-control','maxlength'=>'11')); !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-md-4">
        {!! Form::label('funcao_id', 'Funcão/Atividade *', array('class' => 'text-red')) !!}
        {!! Form::select('funcao_id', $funcao, null, array('class'=>'form-control', 'placeholder' => 'Selecione uma atividade/função')); !!}
    </div>

    <div class="form-group col-md-4">
        {!! Form::label('telefone', 'Telefone *', array('class' => 'text-red')) !!}
        {!! Form::tel('telefone', null, array('class' => 'form-control')) !!}
    </div>

    <div class="form-group col-md-4">
        {!! Form::label('ativo', 'Ativo *', array('class' => 'text-red')) !!}
        <br/>
        {!! Form::radio('ativo', 'S', array('class' => 'form-control')) !!} Sim
        {!! Form::radio('ativo', 'N', array('class' => 'form-control')) !!} Não
    </div>
</div>