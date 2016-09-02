<div class="row">
    <div class="form-group col-md-9">
        {!! Form::label('nome_completo', 'Nome Completo *', array('class' => 'text-red')) !!}
        {!! Form::text('nome_completo', null, array('class'=>'form-control', 'required'=>'required', 'maxlength'=>'60')); !!}
    </div>
    <div class="form-group col-md-3">
        {!! Form::label('cpf', 'CPF *', array('class' => 'text-red')) !!}
        {!! Form::text('cpf', null, array('class'=>'form-control', 'required'=>'required','maxlength'=>'11')); !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-md-4">
        {!! Form::label('nome_condensado', 'Nome Condensado *', array('class' => 'text-red')) !!}
        {!! Form::text('nome_condensado', null, array('class' => 'form-control', 'maxlength'=>'30')) !!}
    </div>

    <div class="form-group col-md-2">
        {!! Form::label('data_nomeacao', 'Data Nomeação *', array('class' => 'text-red')) !!}
        {!! Form::date('data_nomeacao', null, array('class' => 'form-control')) !!}
    </div>

    <div class="form-group col-md-2">
        {!! Form::label('data_posse', 'Data Posse *', array('class' => 'text-red')) !!}
        {!! Form::date('data_posse', null, array('class' => 'form-control')) !!}
    </div>

     <div class="form-group col-md-2">
        {!! Form::label('data_saida', 'Data Saída *', array('class' => 'text-red')) !!}
        {!! Form::date('data_saida', null, array('class' => 'form-control')) !!}
    </div>

    <div class="form-group col-md-2">
        {!! Form::label('ativo', 'Ativo *', array('class' => 'text-red')) !!}
        <br/>
        {!! Form::radio('ativo', 'S', array('class' => 'form-control')) !!} Sim
        {!! Form::radio('ativo', 'N', array('class' => 'form-control')) !!} Não
    </div>
</div>