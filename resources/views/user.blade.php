<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 01 - api</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body style="padding:20px">

<div class="container-fluid">
    <div class="row">
    <div class="col-md-4">
         <div class="card">
             <div class="card-header">
                Add new user
             </div>
             <div class="card-body">
                 <form action= "{{route('user.add')}}" method = "post" enctype = multipart/form-data> 
                                    @csrf
                                                <div class="form-group">
                                                    <h5>First Name <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                    <input type="text" name="first_name" class="form-control"  value="">
													</div>
													
                                                </div>
                                                 <div class="form-group">
                                                    <h5>Last Name <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                    <input type="text" name="last_name" class="form-control"  value="">
													</div>
                                                </div>
                                                <div class="form-group">
                                                    <h5>Email <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                    <input type="text" name="email" class="form-control"  value="">
													</div>
                                                </div>
                                        
                                                <div class="form-group">
                                                    <h5>User photograph <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input id="image" type="file" name="user_image" class="form-control" >
                                                    </div>
												
                                                </div>
                                        <div class="text-xs-right">
                                            <a type="submit" class="btn btn-rounded btn-info m-5" href="{{route('user.add') }}">Add</a>
                                        </div>
                                    </form>
             </div>
         </div>

    </div>
    <div class="col-md-8">
        <h1>User Management</h1>   


<table class="table stripped">
    <thead>
        <tr>
        <th>S/N</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Photo</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>
        
    </thead>
    <tbody>
        @php 
        $i=1;
        @endphp
        @foreach($data as $user)
        <tr>
            <td>{{$i++}}</td>
            <td>{{$user->first_name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->email}}</td>
            <td><img src="{{$user->avatar}}" alt="" srcset=""> </td>
            <td><a href="{{route('user.update', $user->id)}}" class="btn btn-rounded btn-info ">Edit</a></td>
			<td><a id="delete" href="{{route('user.delete', $user->id)}}" class="btn btn-rounded btn-danger">Delete</a></td>
        </tr>
        
@endforeach
    </tbody>
</table>

    </div>

    </div>

</div>


</body>
</html>