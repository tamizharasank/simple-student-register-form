<!doctype html>
<html lang="en" ng-app="my">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Simple student Registration Form</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>
<?php
$localhost='localhost';
$username='root';
$password='root';
$dbname='pana';
$conn = mysqli_connect($localhost,$username,$password,$dbname);
if(! $conn ) {
die('Could not connect: ' . mysqli_error());
}   
include('login.php'); // Includes Login Script


$sql = "SELECT * from register where mobile = '$user'";
$result=mysqli_query($conn,$sql);

$json=array();
if (!$result) {
    die('Could not get data: ' . mysqli_error());
}
else{
while ($row = mysqli_fetch_array($result)) {
    
    // echo '{"name":'.$row['name'].',"price":'.$row['price'].'},';
    $rown['name']=$row['name'];
    $rown['dob']=$row['dob'];
    $rown['roll']=$row['roll'];   
    $rown['state']=$row['state'];   
    $rown['city']=$row['city'];   
    $rown['mobile']=$row['mobile'];   
    $rown['address']=$row['address']; 
    $rown['email']=$row['email'];   
    $rown['password']=$row['password'];     
?>
<body background="city.jpg" ng-controller="myctrl">
    <center><h1 class="text-success">Welcome <?php echo $row['name']; ?></h1></center>
    <div class="wrapper">
        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <b id="logout"><a href="logout.php">Log Out</a></b>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Register Form</h4>
                                    <p class="category">Complete your Form</p>
                                </div>
                                <div class="card-content">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label">
                                                    <label class="control-label">Name</label>
                                                    <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label">
                                                    <label class="control-label">Email ID</label>
                                                    <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label">
                                                    <label class="control-label">Date of Birth</label>
                                                    <input type="text" format="DD-MM-YYYY" class="form-control" name="dob" value="<?php echo date('d/m/Y',strtotime($row['dob'])); ?>" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label">
                                                    <label class="control-label">Password</label>
                                                    <input type="password" class="form-control" name="password" ng-model="dat.password" required="required">
                                                </div>
                                            </div>                                            
                                        </div> -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label">
                                                    <label class="control-label">Roll</label>
                                                    <input type="text" class="form-control" name="roll" value="<?php echo $row['roll']; ?>" required="required">
                                                </div>
                                            </div>                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label">
                                                    <label class="control-label">Mobile No</label>
                                                    <input type="text" id="mobile" maxlength="10" class="form-control" name="mobile" value="<?php echo $row['mobile']; ?>" required="required">
                                                </div>
                                            </div>                                            
                                        </div>                                                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label">
                                                    <label class="control-label">address</label>
                                                    <input type="text" class="form-control" name="address" value="<?php echo $row['address']; ?>" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label">
                                                    <label class="control-label">City</label>
                                                    <input type="text" class="form-control" name="city" value="<?php echo $row['city']; ?>" required="required">
                                                </div>
                                            </div>                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label">
                                                    <label class="control-label">State</label>
                                                    <input type="text" class="form-control" name="state" value="<?php echo $row['state']; ?>" required="required">
                                                </div>
                                            </div>
                                        </div>                                        
                                        <!-- <button ng-click="add()" name="dat" class="btn btn-primary pull-left">Register</button>
 -->                                        <div class="clearfix"></div>
                                    </form>
<!--                                     <div class="alert alert-success" ng-show="shh">
    <div class="container-fluid">
      <div class="alert-icon">
        <i class="material-icons">check</i>
      </div>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true"><i class="material-icons">clear</i></span>
      </button>
      <b>Success Alert:</b> <span>{{succ}}</span>
    </div>
</div> -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="http://cdnjs.cloudflare.com/ajax/libs/angular-ui/0.4.0/angular-ui.min.js"></script>
<script src="js/angular.js"></script>
<!-- <script type="text/javascript">
var app = angular.module("my",[]);
app.controller("myctrl",function($scope,$http,$window,$location){
$scope.h = "tamizh";
$http.get("user.php").success(function (data) {
  $scope.dat = data;
  alert(JSON.stringify(data));

}); 

    });

    </script> -->
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/material.min.js" type="text/javascript"></script>
<script src="js/material-dashboard.js?v=1.2.0"></script>
</body>
</html>
<?php
}

}

?>
