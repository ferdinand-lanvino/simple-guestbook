@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Message</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                    </tr>
                    @foreach ($guests as $guest)
                        <tr>
                            <td>{{ $guest->name }}</td>
                            <td>{{ $guest->message }}</td>
                            <td>{{ $guest->email }}</td>
                            <td>{{ $guest->phone_number }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
