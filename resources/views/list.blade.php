<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="bg-dark py-3">
        <h3 class="text-white text-center">Welcome to CRUD application</h3>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 justify-content-end d-flex">
                <a href="{{route('product.create')}}" class="btn btn-dark">Create</a>
            </div>
            @if(Session::has('success'))
            <div class="col-md-10 mt-4">
                <!-- {{Session::get('success')}} -->
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            </div>
            @endif

            @endif
            <div class="col-md-10">
                <div class="card border-0 shadow-lg my-5">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">List of Product</h3>
                    </div>
                    <!-- <form action="{{route('product.store')}}" method="post">
                        @csrf
                        <div class="card-body">
                            <t class="mb-3">
                                <label for="" class="form-label h5">Name</label>
                                <input value="{{old('name')}}" type="text" class="form-control form-control-lg" placeholder="Enter Product Name" name="name">
                                @error('name')

                                @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label h5">SKU</label>
                            <input value="{{old('sku')}}" type="text" class="form-control form-control-lg" placeholder="sku" name="sku">

                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label h5">Price</label>
                            <input value="{{old('price')}}" type="text" class="form-control form-control-lg" placeholder="Enter Product Price" name="price">

                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label h5">Description</label>
                            <!-- <input type="text" class="form-control form-control-lg" placeholder="Enter Product description" name="description"> -->
                    <!-- <textarea placeholder="Enter Product description" name="description" class="form-control" cols="30" row="5">{{old('name')}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label h5">Image</label>
                            <input type="file" class="form-control form-control-lg" placeholder="Enter Product Price" name="image">
                        </div>
                        <div class="d-grid">
                            <button class="btn-primary btn-lg">
                                Submit
                            </button>
                        </div>
                </div>
                </form> -->
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>