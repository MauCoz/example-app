@extends('layouts.master')

@section('content')
    <div class="container mt-3 pt-3">
        <div class="alert alert-danger text-center">
            <h2 class="h2">404</h2>
            <p>{{ $exception->getMessage() }}</p>
        </div>
    </div>
@stop()
