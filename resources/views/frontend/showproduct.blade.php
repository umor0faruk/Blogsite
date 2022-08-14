<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-5 offest-md-2">
                <a class="btn btn-info" href="{{ route('addproduct') }}">Add Product</a>
                <table class="table">
                    <tr>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Product Description</th>
                        <th>Category</th>
                        <th>Subcategory</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th colspan="3">Active</th>
                    </tr>
                    <?php $sl = 1; ?>
                    @foreach ( $products as $data)
                    <tr>
                        <td>{{ $sl }}</td>
                        <td>{{ $data->pname }}</td>
                        <td>{{ $data->pdes }}</td>
                        <td>{{ $data->cat }}</td>
                        <td>{{ $data->scat }}</td>
                        <td>{{ $data->price }}</td> 
                        <td>
                            @if($data->ststus==1)
                                <a href="{{ route('ststus', $data->id) }}" class="btn btn-info"><i class="fa-thin fa-check"></i></a>
                            @else
                            <a href="#" class="btn btn-danger"><i class="fa-thin fa-check"></i></a>
                            @endif
                        </td> 
                        <td>
                            <a href="{{ route('editproduct',$data->id) }}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                           
                        </td>  
                        <td>
                            <a href="{{ route('delete',$data->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php $sl++; ?>
                    @endforeach
                </table>
                
                
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
</body>
</html>