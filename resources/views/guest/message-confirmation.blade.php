@extends('layouts.app')

@section('app')
    <div class="container">
        @if (session('message'))
            <h1>{{ session('message') }}</h1>
        @endif
    </div>
@endsection
