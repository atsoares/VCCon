<div class="row">
    <div class="form-group col-md-8">
        {!! Form::label('numero', 'Número *', array('class' => 'text-red')) !!}
        {!! Form::text('numero', null, array('class'=>'form-control', 'required'=>'required', 'maxlength'=>'2')); !!}
    </div>   
    <div class="form-group col-md-2">
        {!! Form::label('ativo', 'Ativo *', array('class' => 'text-red')) !!}
        <br/>
        {!! Form::radio('ativo', 'S', array('class' => 'form-control')) !!} Sim
        {!! Form::radio('ativo', 'N', array('class' => 'form-control')) !!} Não
    </div!>
</div>