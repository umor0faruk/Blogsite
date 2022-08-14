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
    <div class="row mt-5 py-5">
        <div class="col-md-6 offset-md-3">
            <form action="{{ route('update',$product->id) }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="pname">Product Name</label>
                    <input value="{{ $product->pname }}" type="text" name="pname" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pdes">Product Description</label>
                    <input value="{{ $product->pdes }}" type="text" name="pdes" class="form-control">
                </div>

                <div class="form-group">
                    <label for="cat">Product Category</label>
                    <input value="{{ $product->cat }}" type="text" name="cat" class="form-control">
                </div>

                <div class="form-group">
                    <label for="scat">Product Subcategory</label>
                    <input value="{{ $product->scat }}" type="text" name="scat" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="price">Product Price</label>
                    <input value="{{ $product->price }}" type="text" name="price" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Product Status</label>
                    <select name="ststus" class="form-control">
                        <option value="0">-----Status-----</option>
                        <option value="1" @if($product->ststus==1)selected @endif>Active</option>
                        <option value="2" @if($product->ststus==2)selected @endif>Inactive</option>
                    </select>
                </div>
                <button class="mt-3 btn btn-success">update</button>
            </form>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
</body>
</html>