@extends('layouts.admin')

@section('content')
    <div scope="row">{{ $message->subject }}</div>
    <div>{{ $message->email }}</div>
    <div>{{ $message->full_name }}</div>
    <div>{{ $message->message }}</div>
@endsection
