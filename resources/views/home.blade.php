<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> name : {{ $name }}</h1>
     <table class="table">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <thead>

    <tr>

      <th scope="col">Name</th>
      <th scope="col">email</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
      <tr>

        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
      </tr>
    @endforeach
  </tbody>
</table>

</body>
</html>
