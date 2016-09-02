<div class="row">
    <div class="form-group col-md-4">
        {!! Form::label('pessoas_id', 'Pessoa *', array('class' => 'text-red')) !!}
        {!! Form::select('pessoas_id', $pessoas, null, array('class'=>'form-control', 'placeholder' => 'Selecione uma pessoa...')); !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('procurador_tipos_id', 'Tipo de procurador *', array('class' => 'text-red')) !!}
        {!! Form::select('procurador_tipos_id', $procuradorTipos, null, array('class'=>'form-control', 'placeholder' => 'Selecione um procurador...')); !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('codigo_pe', 'Código do PE *', array('class' => 'text-red')) !!}
        {!! Form::text('codigo_pe', null, array('class'=>'form-control', 'maxlength' => '10')); !!}
    </div>
</div>
<div class="row">
   <div class="form-group col-md-10">
        {!! Form::label('procurador_substituido', 'Procurador Substituído ') !!}
        {!! Form::text('procurador_substituido', null, array('class'=>'form-control')); !!}
    </div>
    <div class="form-group col-md-2">
        {!! Form::label('ativo', 'Ativo *', array('class' => 'text-red')) !!}
        <br/>
        {!! Form::radio('ativo', 'S', array('class' => 'form-control')) !!} Sim
        {!! Form::radio('ativo', 'N', array('class' => 'form-control')) !!} Não
    </div>
</div>