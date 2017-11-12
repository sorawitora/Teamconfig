<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form action="do_addinfo.php" method="POST">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                
            </div>
          </div>

            <div class="form-row">
              <div class="col-md-6">
                <label>ชื่อ</label>
                <input class="form-control" name="name" type="text" required=""><br>               

              </div>
              <div class="col-md-6">
                <label>ตำแหน่ง</label>
                <select class="form-control" name="role" type="text">
                        <option value=""></option>
                        <option value="Carry">Carry</option>
                        <option value="Supporter">Supporter</option>
                        <option value="Tanker">Tanker</option>
                        <option value="Ganker">Ganker</option>
                        <option value="Jungler">Jungler</option>
                </select> <br>
              </div>
              
              <div class="col-md-6">
                <label for="exampleConfirmPassword">MMR</label>
                <input class="form-control" name="mmr" type="number" min="0" max="3000" maxlength="4" ><br>  
              </div>

              <div class="col-md-6">
                <label>Rank</label>
                <select class="form-control" name="rank" type="text">
                        <option value=""></option>
                        <option value="Bronze">Bronze</option>
                        <option value="Silver">Silver</option>
                        <option value="Gold">Gold</option>
                        <option value="Diamond">Diamond</option>
                        <option value="Legendary">Legendary</option>
                        <option value="Immortal">Immortal</option>
                </select> <br> 

            </div>
              <div class="col-md-6">
                <!-- <label for="exampleConfirmPassword">Mode</label>
                <input class="form-control" name="mode" type="mode" placeholder="mode"><br>  -->
              </div>
            </div>
          </div>
         <input class="btn btn-primary btn-block" type="submit" value="ตกลง">

        </form>
        
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
