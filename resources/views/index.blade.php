<!-- resources/views/products/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Products List</title>
</head>
<body>
    <h1>Products List</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
