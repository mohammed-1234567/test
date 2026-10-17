<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label>name</label>
        <input  type="text" name="name">
        <label>price</label>
        <input  type="number" name="price" step="0.01">
        <label>quantity</label>
        <input  type="number" name="quantity">
        <label>description</label>
        <input  type="text" name="description">
        <label for="category">Category</label>
            <select id="category" name="category">
                <option value="Electronics">Electronics</option>
                <option value="Clothes">Clothes</option>
                <option value="Accessories">Accessories</option>
            </select>

        <button>Submit</button>
    </form>


</body>
</html>
