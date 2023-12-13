<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>

<body>
    <h1>Add Product Page</h1>
    <form action="addproductcode" method="post" enctype="multipart/form-data">
        @csrf
        Product Name <input type="text" name="pname" id=""><br><br>
        Product Price <input type="text" name="pprice" id=""><br><br>
        Product Offer Price <input type="text" name="oprice" id=""><br><br>
        Product Description <textarea name="pdesc" id=""></textarea><br><br>
        Product Picture <input type="file" name="files" id=""><br><br>
        <button>save</button>
    </form>
</body>

</html>