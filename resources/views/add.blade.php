<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Entry</title>
    <link rel="stylesheet" href="../css/app.css">
    <link rel="script" href="../js/app.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-size: 17px;
        }
        .navbar{
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            color: white;
            padding: 10px 20px;
            font-family: cursive;
            height: 80px
        }
        .btn{
            padding: 10px 10px;
            font-size: 15px;
        }
        label{
            font-size: inherit;
        }
        .bg {
            position: absolute;
  z-index: -1;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-image: 
    radial-gradient(circle, rgba(211, 211, 211, 0.541) 0%, transparent 80%),
    linear-gradient(to left, rgba(211, 211, 211, 0.616), rgba(169, 169, 169, 0.027));
}

    </style>
</head>
<body class="bg-light">

    <div class="bg"></div>


    <div class="">
        <div class="navbar">
            <div class="heading">
                <h2 style="font-size: 20px">Add Product</h2>
            </div>
            <div class="btn">
                <a href="{{route('products')}}" class="btn btn-outline-info">Back</a>
            </div>
        </div>
        <div class="container mt-5">
            <form action="{{route('products.add.save')}}" class="form" method="POST" name="addProduct">
                @csrf
                <div class="form-group mt-2">
                    <label class="mb-2" for="name">Product Name</label>
                    <input type="text" name="Productname" id="" class="form-control w-50">
                    @if($errors->any())
                        <div class="text-danger mt-1 mb-3">{{$errors->first('Productname')}}</div>
                    @endif
                </div>
                <div class="form-group mt-2">
                    <label class="mb-2" for="description">Description</label>
                    <textarea name="Description" id="" class="form-control w-50" rows="2"></textarea>
                    @if($errors->any())
                        <div class="text-danger mt-1 mb-3">{{$errors->first('Description')}}</div>
                    @endif
                </div>
                <div class="form-group mt-2">
                    <label class="mb-2" for="quantity">Quantity</label>
                    <input type="number" name="Quantity" id="" class="form-control w-50">
                    @if($errors->any())
                        <div class="text-danger mt-1 mb-3">{{$errors->first('Quantity')}}</div>
                    @endif
                </div>
                <div class="form-group mt-2">
                    <label class="mb-2" for="price">Price</label>
                    <input type="number" name="Price" id="" class="form-control w-50">
                    @if($errors->any())
                        <div class="text-danger mt-1 mb-3">{{$errors->first('Price')}}</div>
                    @endif
                </div>
                <div class="d-flex gap-4 mt-4">
                    <button style="width:80px" class="btn btn-success" type="submit">Save</button>
                </div>
            </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>   
</body>

</html>