<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>

<body>
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
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name">

        <label for="message">Message</label>
        <textarea name="message" id="message"></textarea>

        <label for="email">Email</label>
        <input type="text" name="email" id="email">

        <label for="phone_number">Phone Number</label>
        <input type="text" name="phone_number" id="phone_number">

        <button type="submit">Submit</button>
    </form>
</body>

</html>
