<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <label>name</label>
        <input  type="text" name="name">
        <label>email</label>
        <input  type="email" name="email">
        <label>password</label>
        <input  type="password" name="password">

        <button>Submit</button>
    </form>

</body>
</html>
