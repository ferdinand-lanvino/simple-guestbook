@extends('layouts.app')

@section('content')

    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('guest.store') }}" method="POST">

            <div class="row">
                @csrf
                <div class="col-12">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name" id="name">
                </div>
                <div class="col-12">
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" id="message"></textarea>
                </div>
                <div class="col-6">
                    <label for="email">Email</label>
                    <input class="form-control" type="text" name="email" id="email">
                </div>
                <div class="col-6">
                    <label for="phone_number">Phone Number</label>
                    <input class="form-control" type="text" name="phone_number" id="phone_number">
                </div>
                <button class="btn btn-primary mt-3" type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection
