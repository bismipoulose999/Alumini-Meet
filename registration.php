<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumini Meet</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body class="bgcolor">
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registration.php">Registration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          
        </ul>
      </nav>
    <div class="container">
        <div class="row">
          <div class="col"></div>
            <div class="col">
            <center><h1>Registration</h1></center>
            <table class="table">
              <tr>
                <td>Name</td>
                <td><input type="text" class="form-control"></td>
              </tr>
              <tr>
                <td>Admission number</td>
                <td><input type="text" class="form-control"></td>
              </tr>
              <tr>
                <td>Address</td>
                <td><input type="text" class="form-control"></td>
              </tr>
              <tr>
                <td>PassOutYear</td>
                <td><input type="text" class="form-control"></td>
              </tr>
              <tr>
                <td>Gender</td>
                <td>
                  <div class="radio">
                    <label><input type="radio" name="optradio" checked>Male</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="optradio">Female</label>
                  </div>
                </td>
                
              </tr>
              <tr>
                <td>Contact</td>
                <td><input type="text" class="form-control"></td>
              </tr>
              <tr>
                <td>Mail Id</td>
                <td><input type="email" class="form-control"></td>
              </tr>
              <tr>
                <td><button class="btn btn-primary">REGISTER</button></td>
                <td></td>
              </tr>
            </table>
            </div>
            <div class="col"></div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>  
</body>
</html>