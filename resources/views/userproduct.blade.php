<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product</title>
</head>

<body>
    <h1>Product</h1>
    <div class="container-fluid">
        <div class="row">
            @foreach($data as $x)
            <div class="col-sm-3">
                <div class="card" style="width:100%">
                    <img src="{{asset('product/'.$x->pimage)}}" height="300px" width="300px" class="card-img-top" alt="card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$x->pname}}</h5>
                        <h5 class="card-title">{{$x->pprice}}</h5>
                        <p class="card-text">{{$X->pdesc}}</p>
                        <a href="#" class="btn btn-primary">Add To Product</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>