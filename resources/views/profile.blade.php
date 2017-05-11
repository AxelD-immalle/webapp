@extends('layouts.app')

@section('content')
<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

<div class="card-panel teal lighten-2">{{{ isset(Auth::user()->name) ? Auth::user()->name : 'Not logged in' }}}</div>
@endsection
