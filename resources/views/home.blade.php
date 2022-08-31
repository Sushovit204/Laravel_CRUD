<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="/app.css">
    <link rel="stylesheet" href="/app.css">
    <link href="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous">
    <title>Product Catalogue</title>

</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6">
                <form action="" method="POST" >
                    @csrf
                    <div class="mb-3">
                        <label for="name"  class="form-label" >Product Name</label>
                        <input type="text" class="form-control" id="name" name="name" required="true" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" required="true" autocomplete="off" id="description" name="description">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                @if (session()->has('status'))
                <div class="alert alert-success">
                        {{session('status')}}
                </div>
                @endif
            </div>

            <div class="col-sm-6">
                <table class="table table-hover">
                    <thread>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thread>
                    <tbody>
                        @foreach ($products as $prod)
                        <tr>
                             <th>{{$prod->id}}</th>
                            <td>{{$prod->name}}</td>
                            <td>{{$prod->description}}</td>
                            <td>
                                <a href="{{url('/edit',$prod->id)}}" class="btn btn-info btn-sm" onclick="return confirm('Edit the data')">Edit</a>
                                <a href="{{url('/delete',$prod->id)}}"class="btn btn-danger btn-sm" onclick="return confirm('Are you Sure want to delete')" >Delete</a>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>