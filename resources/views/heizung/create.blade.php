<?php
  var_dump($heizung);
 ?>
     <div class="page-header">
        <h1>Heizungsanlagen Offerte</h1>
      </div>

      @if (count(session('errors')) > 0)
      <div class="alert alert-danger">
        @foreach (session('errors')->all() as $error)
          {{ $error }}<br>
        @endforeach
      </div>
      @endif

      @if (session('message'))
      <div class="alert alert-success">
        {{ session('message') }}
      </div>
      @endif


{!! Form::model($heizung, ['action' => 'HeizungController@store']) !!}

    <div class="form-group">
      {!! Form::label('baustelle', 'Bestehende Heizungsanlage / Neubau') !!}
      {!! Form::radio('baustelle', 'Bestehende Heizugnsanlage', false, ['class' => 'form-control']) !!}
       {!! Form::radio('baustelle', 'Neubau', false, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('gebaeudetyp', 'Um was für ein Gebäude handelt es sich?') !!}

      {!! Form::select('gebaeudetyp', ['Bis 1965' => 'Bis 1965', '1966 – 1990' => '1966 – 1990', 'Ab 1990' => 'Ab 1990', 'Minergie' => 'Minergie' ], null, ['placeholder' => 'Bitte auswählen', 'class' => 'form-control']) !!}



    </div>


    <button class="btn btn-success" type="submit">Weiter</button>

{!! Form::close() !!}
