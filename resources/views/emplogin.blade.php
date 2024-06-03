<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
   
    /* .form-container {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh; /* vh stands for viewport height 
} */


.jumbotron {
  /* min-width: 585px; 
  */
  width:100%;
  margin: 150px auto;
  display: flex;
  justify-content: center;
  margin: 250px 150px 150px 50px;
  background-color:#B9B5BF;
  opacity:0.7;
  /* border: 0.08em solid black; */
}
body
{
    background-image:url('/images/login.jpg');
    height: 50px;
}

</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"> 

            </div>
            <div class="col-md-4"> 
                <div class="jumbotron">
                   
                    <div class="form-container">
                <form action="/emploginAction" method="post" class="loginform ">
                    @csrf
                <h1 style="color:green"><center>LoGiN</center></h1>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><img src="/images/usericon_green.png" alt="greenuser" width="25px" height="25px"></span>
                        </div>
                         <input type="text" name="user" id="user1" placeholder="enter your username" class="form-control" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><img src="/images/passicon_green.png" alt="greenpass" width="25px" height="25px"></span>
                        </div>
                        <input type="password" name="pass" id="pass1" placeholder="enter your password" class="form-control" required>
                    </div>

                    <button class="btn btn-success float-right" name="login" id="login">LoGiN</button>
                    
                </form>  
                @if(session('error'))
                <p style="color:red">
                {{session('error')}}
                </p>
                @endif
                

                </div>
                </div>
                </div>
                <div class="col-md-4"> 
                
                </div>
        </div>
    </div>
    <!-- <form action="/adminloginAction" method="post">

    </form> -->
</body>
</html>