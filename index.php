<!DOCTYPE html>
<html lang="en">

<head>

    <title>Credit Management</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <!-- BOOTSTRAP CSS FRAME -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">     

       <!--ICON-->
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

       <!--BOOTSTRAP JAVASCIPT -->
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<style>
 body {
    background-color:  #66a3ff;
  }
 .header {
    text-align: center;
    /*margin-top: 5px; */
    background-color: #0066ff;
    height: 100px;
    font-style: italic;
  }
  h2{
   transform: translate(1%, 80%);
  }
 .footer {
    background-color: #0066ff;
    height: 70px;
    font-style: italic;
 /*   margin-left: 15px;
    margin-right: 15px; */

  }
  
 .position {
    margin-top: 205px;
    margin-bottom:220px;
 }

</style>
</head>
<body>
      <header class="header">
         <div class="col-12 align-self-center">
          
             <h2>Credit Management</h2>  
         
        </div>
      </header>

      <div class="container">
          <div class="text-center position">
           <h3>Click here to view all the Users.</h3>
           <a href="GetDetails.php"><input type="button" class="btn btn-info" Value="VIEW USERS"></a><br><br>

           <h3>Click here for Transaction</h3>
           <a href="SelectedUsers.php"><input type="button" class="btn btn-success" Value="Credit Transfer"></a>
          </div>
      </div>
      
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-4 align-self-center">
                        <div class="text-center">
                            <a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/profile.php?id=100008357132686"><i class="fa fa-facebook"></i></a>
                            <a class="btn btn-social-icon btn-linkedin" href="https://www.linkedin.com/in/isha-patel-020957189/"><i class="fa fa-linkedin "></i></a>                      
                            <a class="btn btn-social-icon btn-instagram" href="https://www.instagram.com/issha.__/?hl=en"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                      <div class="col-auto">
                         <p>Designed by- <b>Patel Isha</b></p>
                      </div>
                </div>
            </div>
        </footer>

</body>
</html>
