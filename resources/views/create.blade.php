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
            <div class="col-md-10">
                <div class="card border-0 shadow-lg my-5">
                    <div class="card-header">
                        <h3>Create Product</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="" class="form-label">Name</label>
                            <input type="text" class="form-control form-control-lg" placeholder="Enter Product Name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">SKU</label>
                            <input type="text" class="form-control form-control-lg" placeholder="sku" name="sku">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Price</label>
                            <input type="text" class="form-control form-control-lg" placeholder="Enter Product Price" name="price">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Description</label>
                            <!-- <input type="text" class="form-control form-control-lg" placeholder="Enter Product description" name="description"> -->
                            <textarea name="description" class="form-control" cols="30" row="5"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>