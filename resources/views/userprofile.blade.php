<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4 text-info text-center bg-dark">
                <h1 class="text-light" style="font-family: 'Times New Roman', Times, serif;">User Profile Page</h1>
                <form action="userprofilecode" method="post" enctype="multipart/form-data">
                    @csrf
                    <table>
                        <tr>
                            <th>Name</th>
                            <td> <input type="text" name="name" value="{{$data->name}}" /></td>
                        </tr>
                        <tr>
                            <th>User_Name</th>
                            <td> <input type="text" name="uname" value="{{$data->username}}" /></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td> <input type="email" name="email" value="{{$data->email}}" /></td>
                        </tr>
                        <tr>
                            <th>Mobile</th>
                            <td><input type="number" name="mob" value="{{$data->mobile}}" /></td>
                        </tr>
                        <tr>
                            <th>Password</th>
                            <td><input type="password" name="pass" value="{{$data->password}}" /></td>
                        </tr>
                        <tr>
                            <img src="{{asset('picture/'.$data->picture)}}" height="100px" width="100px">
                            <th>Picture</th>
                            <td><input type="file" name="files" /></td>
                        </tr>

                    </table>

                    <button class="btn btn-success">UPdate</button>
                </form>
            </div>
            <div class="col-sm-4"></div>
        </div> <!--row close-->
    </div> <!--container close-->
</body>

</html>