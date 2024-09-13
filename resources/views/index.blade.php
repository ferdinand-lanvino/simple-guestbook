<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guestbook</title>
</head>

<body>
    <a href="{{ route('guest.form') }}">Tambah</a>
    <table>
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
</body>

</html>
