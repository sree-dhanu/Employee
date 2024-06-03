<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body
    {
        background-color:lightyellow;
    }
    form
    {
        font-weight:bold;
    }
    .card{
        width:750px;
        float:left;
    }
    

    
  </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <!-- <div class="col-md-4"></div> -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-text"><h2 style="color:blue">REGISTRATION</h2></div>
                    </div>
                    <div class="card-body">
                        @foreach($empdata as $value)
                        <form action="/emprofileupdate/{{$value->id}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" name="empname" id="ename" value="{{$value->empname}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="dob">Date Of Birth:</label>
                                <input type="date" name="dob" id="dob1" value="{{$value->dob}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="gend">Gender:</label><br>
                                <input type="text" name="gender" value="{{$value->gender}}" class="form-control">
                                <!-- <input type="radio" name="gender" id="gend1">&nbsp<label for="male">Male&nbsp</label>
                                <input type="radio" name="gender" id="gend2" >&nbsp<label for="female">Female&nbsp</label> -->
                            </div>
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <textarea name="address" id="adrs" rows="3" column="5" class="form-control" value="{{$value->address}}">{{$value->address}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="name">Email:</label>
                                <input type="email" name="empmail" id="empemail" value="{{$value->email}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="name">Contact:</label>
                                <input type="tel" name="phn" id="phn1" value="{{$value->phone}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="name">Designation:</label>
                                <input type="text" name="desig" id="desig1" value="{{$value->designation}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="name">Username:</label>
                                <input type="text" name="uname" id="user" value="{{$value->username}}" class="form-control">
                            </div>
                             <div class="form-group">
                                <label for="name">Password:</label>
                                <input type="password" name="passwd" id="passwd1" value="{{$value->password}}" class="form-control">
                            </div>
                            <input type="submit" name="sub" id="sub1" value="Register" class="btn btn-success">
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-4"></div> -->
        </div>
    </div>
</body>
</html>