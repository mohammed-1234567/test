<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <thead>

      <tr>

      <th>id</th>
      <th>name</th>
      <th>price</th>
      <th>quantity</th>
      <th>description</th>
      <th>Category</th>
      <th>Created at</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($products as $product)
      <tr>

        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->quantity }}</td>
        <td>{{ $product->description }}</td>
        <td>{{ $product->category }}</td>
        <td>{{ $product->created_at }}</td>

      </tr>
    @endforeach
  </tbody>
</table>
<a href="{{ route('products.create') }}">create</a>


</body>
</html>
