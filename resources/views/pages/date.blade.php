@extends('layout.index')

@section('content')
    <?php
    $date = new DateTime();
    echo $date->format('d-m-Y H:i');
    ?>
@endsection
