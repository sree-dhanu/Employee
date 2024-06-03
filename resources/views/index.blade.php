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
        background-image:url('/images/reg.jpg');
    }
    form
    {
        font-weight:bold;
    }
    .card{
        width:750px;
        
    }
    

    
  </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <div class="card-text"><h2 style="color:blue">REGISTRATION</h2></div>
                    </div>
                    <div class="card-body">
                        <form action="/empregAction" method="POST" id="form_reg">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" name="empname" id="ename" placeholder="Enter your name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="dob">Date Of Birth:</label>
                                <input type="date" name="dob" id="dob1" placeholder="enter your date of birth" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="gend">Gender:</label><br>
                                <input type="radio" name="gender" id="gend1" value="male">&nbsp<label for="male">Male&nbsp</label>
                                <input type="radio" name="gender" id="gend2" value="female">&nbsp<label for="female">Female&nbsp</label>
                            </div>
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <textarea name="address" id="adrs" rows="3" column="5" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="name">Email:</label>
                                <input type="email" name="empmail" id="empemail" placeholder="Enter your mailid" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="name">Contact:</label>
                                <input type="text" name="phn" id="phn1" placeholder="Enter your contact number" class="form-control" min="10">
                            </div>
                            <div class="form-group">
                                <label for="name">Designation:</label>
                                <input type="text" name="desig" id="desig1" placeholder="Enter your designation" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Username:</label>
                                <input type="text" name="uname" id="user" placeholder="Enter your username" class="form-control">
                            </div>
                             <div class="form-group">
                                <label for="name">Password:</label>
                                <input type="password" name="passwd" id="passwd1" placeholder="Enter your password" class="form-control">
                            </div>
                            <input type="submit" name="sub" id="sub1" value="Register" class="btn btn-success">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>
</html>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>
<script type="text/javascript">
 $("#form_reg").validate({
    rules:
    {
        empname:
        {
            required:true
        },
        dob:
        {
            required:true
        },
        gender:
        {
            required:true
        },
        
        empmail:
        {
            required:true,
            email:true
        },
        phn:
         {
            
            matches:"[0-9]+",
            minlength:10,
            maxlength:10
        },
       
        
        uname:
        {
            required:true,
            minlength:6
        },
        passwd:
        {  
            required:true,
            minlength:8,
            maxlength:15
        }
        
    }
 });
</script>
