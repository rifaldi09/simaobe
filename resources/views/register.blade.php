<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <form action="{{ route('proses-register') }}" method="post" enctype="multipart/form-data">
        @csrf
        <table>
            <tr>
                <td>User ID</td>
                <td><input type="number" name="user_id" id="user_id"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="user_email" id="user_email"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="user_name" id="user_name"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Register</button></td>
            </tr>
        </table>
    </form>
</body>
</html>