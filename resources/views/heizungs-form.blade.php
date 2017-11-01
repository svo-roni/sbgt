<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Heizungsanlagenformular</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    </head>
    <body>
        
{!! Form::open(['url' => 'foo/bar']) !!}
    
    <!-- Gebäude-Typ -->
    <div class="form-group">
        {!! Form::label('haus-typ', 'Um was für ein Gebäude handelt es sich?') !!}
        {!! Form::select('haus-typ', ['Einfamilienhaus' => 'Einfamilienhaus', 'Mehrfamilienhaus' => 'Mehrfamilienhaus', 'Gewerbeindustrie' => 'Gewerbeindustrie'], null, ['placeholder' => 'Bitte auswählen', 'class' => 'form-control']) !!}
    </div>
    
    <!-- Baujahr -->
     <div class="form-group">
        {!! Form::label('baujahr', 'Wann wurde die Immobilie gebaut?') !!}
        {!! Form::select('baujahr', ['Bis 1965' => 'Bis 1965', '1966 – 1990' => '1966 – 1990', 'Ab 1990' => 'Ab 1990', 'Minergie' => 'Minergie' ], null, ['placeholder' => 'Bitte auswählen', 'class' => 'form-control']) !!}
    </div>
    
    <!-- Bestehende Heizungsanlage...
    
    -->
    
    <!-- Womit möchten Sie heizen....
    
    -->
    
     <!-- Alter Heizungsanalge -->
     <div class="form-group">
        {!! Form::label('alter-heizungsanlage', 'Alter der bestehenden Heizungsanlage') !!}
        {!! Form::select('alter-heizungsanlage', ['10 – 20 Jahre' => '10 – 20 Jahre', 'aelter' => 'älter'], null, ['placeholder' => 'Bitte auswählen', 'class' => 'form-control']) !!}
    </div>
    
     <!-- Brennstoffverbrauch -->
     <div class="form-group">
        {!! Form::label('brennstoffverbrauch', 'Wie hoch ist der Brennstoffverbrauch?') !!}
        {!! Form::number('brennstoffverbrauch', '18000', ['class' => 'form-control']) !!}
     </div>
    
    
    <!-- Wärmeabgabe -->
    {!! Form::label('Waermeabgabe', 'Wie erfolgt aktuell die Wärmeabgabe?') !!}
    <div class="form-group">
    <div class="form-check form-check-inline">
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
            Option one is this and that&mdash;be sure to include why it's great
        </label>
    </div>
    <div class="form-check form-check-inline">
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            Option two can be something else and selecting it will deselect option one
        </label>
    </div>
     <div class="form-check form-check-inline">
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
            Option two can be something else and selecting it will deselect option one
        </label>
    </div>
    
    </div>
    
    
    
    
{!! Form::close() !!}
        
        
    </body>
</html>
