<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>CRUD Dashboard</title>
    <link rel="stylesheet" href="../css/app.css">
    <link rel="script" href="../js/app.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
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
        }
        .bg {
            position: fixed;
            z-index: -1;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-image: 
                radial-gradient(circle, rgba(211, 211, 211, 0.541) 0%, transparent 80%),
                linear-gradient(to left, rgba(211, 211, 211, 0.616), rgba(169, 169, 169, 0.027));
        }
        
        table th, td, tr{
            border: 2px solid black;
        }

        table tr td{
            font-size: 15px;
        }
        button{
            color: black;
            font-size: 10px;
        }

        table th{
            font-size: 18px;
        }
        .navbar{
            position: sticky;
        }
    </style>
</head>
<body class="bg-light">

    <div class="bg"></div>

    <div class="">
        <div class="navbar">
            <div class="heading">
                <h2>Laravel CRUD Application</h2>
                
            </div>
            <div class="btn">
                <a href="{{route('products.add')}}" class="btn btn-outline-info">Add Entry</a>
                <a href="{{route('admin.logout')}}" class="btn btn-outline-info">Log Out</a>
            </div>
        </div>
       
        <div class="container mt-5">
            @if(Session::has('delete-success'))
            <div class="alert alert-success mt-2">{{Session::get('delete-success')}}</div>
            @endif
            @if(Session::has('msg'))
                <div class="alert alert-success mt-2">{{Session::get('msg')}}</div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Product Name</th>
                        <th class="">Description</th>
                        <th class="text-center">Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Created Date</th>
                        <th class="text-center">Modified Date</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($fetchedProducts)
                    @foreach($fetchedProducts as $product)
                    <tr>
                        <td class="text-center align-middle">{{$product->id}}</td>
                        <td class="text-center align-middle">{{$product->productName}}</td>
                        <td class="align-middle">{{$product->productDescription}}</td>
                        <td class="text-center align-middle">{{$product->quantity}}</td>
                        <td class="text-center align-middle">{{$product->price}}</td>
                        <td class="text-center align-middle">{{$product->created_at}}</td>
                        <td class="text-center align-middle">{{$product->updated_at}}</td>
                        <td class="text-center align-middle d-flex gap-2 justify-content-center">
                                <a href="{{url('products/edit/'.$product->id)}}" style="width: 50px" class="btn btn-primary btn-sm" value="{{$product->id}}" name="submit">Edit</a>
                                <a href="{{url('products/delete/'.$product->id)}}" value="{{$product->id}}" style="width: 50px" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td class="colspan-8">Items not present in database</td>
                    </tr>
                    @endif
                </tbody>
            </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>   
</body>

</html>