<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
</head>
<body>
    <h1>Products</h1>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->quantity }}</td>
            <td>{{ $product->price }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>