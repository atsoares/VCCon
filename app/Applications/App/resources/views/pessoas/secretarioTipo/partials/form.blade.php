<div class="row">
    <div class="form-group col-md-10">
        {!! Form::label('nome', 'Nome *', array('class' => 'text-red')) !!}
        {!! Form::text('nome', null, array('class'=>'form-control', 'maxlength'=>'30')); !!}
    </div>
    <div class="form-group col-md-2">
        {!! Form::label('ativo', 'Ativo *', array('class' => 'text-red')) !!}
        <br/>
        {!! Form::radio('ativo', 'S', array('class' => 'form-control')) !!} Sim
        {!! Form::radio('ativo', 'N', array('class' => 'form-control')) !!} Não
    </div>
</div>