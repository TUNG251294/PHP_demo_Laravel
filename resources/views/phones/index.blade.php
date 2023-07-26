<!DOCTYPE html>
<html>
<head>
    <title>User and Phone Information</title>
</head>
<body>
    <h1>User and Phone Information</h1>

    <table>
        <thead>
            <tr>
                <th>User ID</th>
                <th>User Name</th>
                <th>User Email</th>
                <th>Phone Number</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone->phone_number ?? 'N/A' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
