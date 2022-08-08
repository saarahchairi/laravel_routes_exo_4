@extends('layout.index')

@section('content')
    <?php
    $fruit = ['pomme', 'banane', 'cerise', 'fraise'];

    for($i = 0; $i < count($fruit); $i++)
        echo $fruit[$i]."\n";
    ?>
@endsection
