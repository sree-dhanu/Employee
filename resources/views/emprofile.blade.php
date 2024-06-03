<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee View</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
 <style>
    .card{
        background-color:#E3DAB9;
        width: 1250px;
    }
    body
    {
        background-color:lightblue;
    }
 </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="card"> 
                <div class="card-header bg-primary">
                    <div class="card-text">
                        <label for=""><h2>Employee Registration Details</h2></label>
                    </div>
                </div>
                <div class="card-body">
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>EMPLOYEE NAME</th>
                        <th>DATE OF BIRTH</th>
                        <th>GENDER</th>
                        <th>ADDRESS</th>
                        <th>EMAIL</th>
                        <th>CONTACT</th>
                        <th>DESIGNATION</th>
                        <th>USERNAME</th>
                        <th>PASSWORD</th>
                    </thead>

                    <tbody>
                    @foreach($empdetail as $value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->empname}}</td>
                        <td>{{$value->dob}}</td>
                        <td>{{$value->gender}}</td>
                        <td>{{$value->address}}</td>
                        <td>{{$value->email}}</td>
                        <td>{{$value->phone}}</td>
                        <td>{{$value->designation}}</td>
                        <td>{{$value->username}}</td>
                        <td>{{$value->password}}</td>
                        <td><a href="/empprofiledit/{{$value->id}}" class="btn btn-primary">Edit</a></td>
                        <td><a href="/empprofildelete/{{$value->id}}" class="btn btn-primary">Delete</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
            <br><br>
            <a href="/logout" class="btn btn-dark text-white">Logout</a>

            </div>
        </div>
       
    </div>
</body>
</html>