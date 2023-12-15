<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cart Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <h1>Product</h1>
    <div class="container-fluid">
        <div class="row">
            @foreach($productData as $y)

            <div class="col-sm-3">
                <div class="card" style="width:18rem">
                    <img src="{{asset('product/'.$y->pimage)}}" height="100px" width="20px" class="card-img-top" alt="card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$y->pname}}</h5>
                        <h5 class="card-title">{{$y->pprice}}</h5>
                        <p class="card-text">{{$y->pdesc}}</p>
                        <a href="{{'cartremove/'.$y->id}}"> <button class="btn btn-danger">Remove</button></a><br><br>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>