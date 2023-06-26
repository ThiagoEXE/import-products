<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Import Export Excel & CSV File to Database Example - LaravelTuts.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="card mt-3 mb-3">
        <div class="card-header text-center">
            <h4>Laravel 9 Import Export Excel & CSV File to Database Example - LaravelTuts.com</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('products.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-primary">Import User Data</button>
            </form>

            <table class="table table-bordered mt-3">
                <tr>
                    <th colspan="3">
                        List Of Products
                        <a class="btn btn-danger float-end" href="{{ route('products.export') }}">Export User Data</a>
                    </th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                </tr>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                </tr>
                @endforeach
            </table>

        </div>
    </div>
</div>

</body>
</html>
