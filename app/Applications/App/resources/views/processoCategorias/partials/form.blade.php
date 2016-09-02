<div class="row">
    <div class="form-group col-md-3">
        {!! Form::label('codigo', 'Código *', array('class' => 'text-red')) !!}
        {!! Form::text('codigo', null, array('class'=>'form-control', 'required'=>'required', 'maxlength'=>'10')); !!}
    </div>
    <div class="form-group col-md-9">
        {!! Form::label('nome', 'Nome *', array('class' => 'text-red')) !!}
        {!! Form::text('nome', null, array('class'=>'form-control', 'required'=>'required','maxlength'=>'60')); !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-md-2">
        {!! Form::label('ativo', 'Ativo *', array('class' => 'text-red')) !!}
        <br/>
        {!! Form::radio('ativo', 'S', array('class' => 'form-control')) !!} Sim
        {!! Form::radio('ativo', 'N', array('class' => 'form-control')) !!} Não
    </div>
</div>