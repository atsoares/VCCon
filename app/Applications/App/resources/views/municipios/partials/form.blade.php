<div class="row">
    
      <div class="form-group col-md-6">
        {!! Form::label('nome', 'Nome do Município *', array('class' => 'text-red')) !!}
        {!! Form::text('nome', null, array('class'=>'form-control maxLength','maxlength'=>'60')) !!}
    </div>
    <div class="form-group col-md-3">
        {!! Form::label('ufs_id', 'ID Unidade Federativa *', array('class' => 'text-red')) !!}
        {!! Form::select('ufs_id', $listaUf, null, array('class'=>'form-control', 'placeholder' => 'Selecione um Estado...')) !!}
    </div>
  
    <div class="form-group col-md-3">
        {!! Form::label('sigla', 'Sigla *', array('class' => 'text-red')) !!}
        {!! Form::text('sigla', null, array('class' => 'form-control maxLength','maxlength'=>'3')) !!}
    </div>
</div>
<div class="row">
    

    <div class="form-group col-md-2">
        {!! Form::label('codigo_tcm', 'Código TCM *', array('class' => 'text-red')) !!}
        {!! Form::number('codigo_tcm', null, array('class' => 'form-control maxLength','maxlength'=>'3')) !!}
    </div>
      <div class="form-group col-md-2">
        {!! Form::label('codigo_ibge', 'Código IBGE *', array('class' => 'text-red')) !!}
        {!! Form::number('codigo_ibge', null, array('class' => 'form-control maxLength','maxlength'=>'7')) !!}
    </div>

      <div class="form-group col-md-2">
        {!! Form::label('codigo_geonames', 'Código Geonames *', array('class' => 'text-red')) !!}
        {!! Form::number('codigo_geonames', null, array('class' => 'form-control maxLength','maxlength'=>'7')) !!}
    </div>
    <div class="form-group col-md-2">
        {!! Form::label('cep', 'CEP*', array('class' => 'text-red')) !!}
        {!! Form::number('cep', null, array('class' => 'form-control maxLength','maxlength'=>'8')) !!}
    </div>

   

    <div class="form-group col-md-2">
        {!! Form::label('ativo', 'Ativo *', array('class' => 'text-red')) !!}
        <br/>
        {!! Form::radio('ativo', 'S', array('class' => 'form-control')) !!} Sim
        {!! Form::radio('ativo', 'N', array('class' => 'form-control')) !!} Não
    </div>
</div>