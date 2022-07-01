@extends('layouts.admin')

@section('content')
    <h1>Messages</h1>
    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>Subject</th>
                <th>Email</th>
                <th>Full Name</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($messages as $message)
                <tr>
                    <td scope="row">{{ $message->subject }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->full_name }}</td>
                    <td>{{ $message->message }}</td>
                    <td>
                        <a class="btn btn-small btn-primary text-white" href="{{ route('admin.messages.show', $message->id) }}">View</a> -
                        <a class="btn btn-small btn-secondary text-white" href="">Reply</a> -
                        <a class="btn btn-small btn-danger text-white" href="">Delete</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td scope="row">No messages!</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
