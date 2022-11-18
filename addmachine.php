<?php 
session_start();
if (!isset($_SESSION['mobile'])) {

  header("location:index.php");
}
?>                
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Krushi Bazaar</title>
  <style type="text/css">
    .form-group .color{
      background-color: lightgray;
    }
  </style>
	<?php include "assets/csslink.php"?>
  <?php include "assets/jslink.php"?>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div>
    <?php include 'navbar.php' ?>
  </div>
    <div id="home" class="caraouselbg">
      <div id="demo" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" id="demo" >
            <img src="img/k23.jpeg" class="img02" alt="Los Angeles"  style="object-fit: cover;" width="1520px"  height="400px" >
            <div class="carousel-caption">
              <h1 class="font-weight-bold" style="font-size: 4em;">Add Equipments for Rent</h1>
            </div>
          </div>
        </div>
        <!-- <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a> -->
      </div>
    </div>

    <div class="productmain1" style="background:linear-gradient(145deg,#2a2b2f 50%,#232427 0%);">
      <div class="container">

        <div class="row">
          <div class="col-lg-12">
            <div class="card" style=" border: 5px solid grey;background:linear-gradient(145deg,#2a2b2f 50%,#232427 0%);">


              <form class="myform" action="machineupload.php" id="myform" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                <div class="card-body" style="color:white;">

                  <div class="form-group"  >
                    <label>Equipment Name</label>
                    <input type="text" name="mtxt" value=""  class="form-control p-3 mb-2 mtxt color" placeholder="Machine Name" required>
                    <span class="error"></span>
                    <!-- <input type="text" name="mobile" id="mobile" placeholder="Enter Username" class="form-control"> -->
                  </div>
                  <div class="form-group">
                    <label>Rent Price(Per Hour)</label>
                    <input type="text" name="price" class="form-control p-3 mb-2 price color" placeholder="Rent Price" required >
                    <span class="error1"></span>
                    <!-- <input type="password" name="password" id="password" placeholder="Enter password" class="form-control"> -->
                  </div>
                  <div class="form-group">
                    <label>Equipment Description</label>
                    <textarea type="text" name="descr" class="form-control p-3 mb-2 descr color" placeholder="Equipment description" required ></textarea>
                    <span class="error2"></span>
                    <!-- <input type="password" name="password" id="password" placeholder="Enter password" class="form-control"> -->
                  </div>
                  <div class="form-group">
                    <label>Equipment Image</label>
                    <input type="file" name="image"  class="form-control image color " id="file" value="" placeholder="" required>
                    <span class="error3"></span>
                    <input type="hidden" name="pcode"  class="form-control pcode " id="pcode" value="<?php echo rand(); ?>" placeholder="" required>
                    <!-- <input type="password" name="password" id="password" placeholder="Enter password" class="form-control"> -->
                  </div>
                  
                  <div class="right">
                    <button type="submit" class="btn btn-primary submit" id="submit" name="submit">Add Equipment</button>
                  </div>
                    <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> -->
                  <!-- <div class="bg-transparent text-center">
                    <button type="button" id="login" name="login" class="btn btn-primary btn-lg login btn-block">Login</button>
                  </div>
                  <div>
                    <a id="link1" class="text-primary text-lg-left link" href="index.php">? Register Here...</a>
                  </div> -->
                </div>
              </form>

            </div>
            <div class="msg text-white"></div>
          </div>
          
        </div>  
      </div>
    </div>
      <section>
        <div class="footer">
          <div class="footertext">
            <span class="rights ml-5">© 2022 Krushi Bazaar Ltd. All rights reserved</span>
            <span class="design p-3 ml-5">© Designed By LDCE Team</span>
            <div class="iconfooter mt-1">
              <a href="#"><i class="fa fa-facebook pr-3"></i></a>
              <a href=""><i class="fa fa-twitter pr-3"></i></a>
              <a href=""><i class="fa fa-instagram "></i></a>
              
            </div>
          </div>
        </div>
      </section>
<!--     <div class="productmain1">
  <div id="message"></div> -->
  <!-- Button trigger modal -->
 <!--    <div class="producttxt">
      <h2>Add Machine</h2>
      <p>Rent yours Own Machines </p>
      </div>
      <div class="btnproduct">
      <button type="submit" class="btn btn-primary btnproduct" data-toggle="modal" data-target="#exampleModal">
      Add Machine
      </button>
    </div> -->

    <!-- Modal -->
<!--     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"  class="text-center" style="font-size: 2em ">Add Machines</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <form action="machineupload.php" id="myform" method="post" accept-charset="utf-8" enctype="multipart/form-data">

              <input type="text" name="mtxt" value="" class="form-control p-3 mb-2 mtxt" placeholder="Machine Name" required>
              <span class="error"></span>
              <input type="text" name="price" class="form-control p-3 mb-2 price" placeholder="Rent Price" required >
              <span class="error1"></span>




              <textarea type="text" name="descr" class="form-control p-3 mb-2 descr" placeholder="Machine description" required ></textarea>
              <span class="error2"></span>
              <input type="file" name="image"  class="form-control image " id="file" value="" placeholder="" required>
              <span class="error3"></span>
              <input type="hidden" name="pcode"  class="form-control pcode " id="pcode" value="<?php echo rand(); ?>" placeholder="" required>
              <div class="modal-footer">

                <button type="submit" class="btn btn-primary submit" id="submit" name="submit">AddMachines</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div> -->
  </div>
  <?php include "assets/jslink.php"?>

</body>
</html>
</script>

<script type="text/javascript">


  $(document).ready(function(){

    $('#submit').click(function() {
      var mtxt=$('.mtxt').val();
      var price=$('.price').val();
      var descr=$('.descr').val();
      var image=$('.image').val();
      var pcode=$('.pcode').val();

      var pat1=/^[a-zA-Z]*$/;
      var pat2=/^[0-9]*$/;


      if (mtxt=="" && descr=="" && price=="" && image=="") {

        $('.mtxt').addClass('is-invalid');
        $('.descr').addClass('is-invalid');
        $('.price').addClass('is-invalid');
        $('.image').addClass('is-invalid');
        $('.error3').show();
        $('.error3').css('color','red');
        $('.error3').html('Please Fill All The fields ');

      }else{

        if(mtxt=="") {

          $('.mtxt').addClass('is-invalid');
          $('.error').show();
          $('.error').css('color','red');
          $('.error').html('This Should not be empty ');

        }else{
         if (!pat1.test(mtxt)) {
          $('.mtxt').addClass('is-invalid');
          $('.error').show();
          $('.error').css('color','red');
          $('.error').html('Enter Charecters Only');

        }else{
         $('.mtxt').addClass('is-valid');
         $('.mtxt').removeClass('is-invalid');
         $('.error').hide();
       }
     }
     if (price=="") {
      $('.price').addClass('is-invalid');
      $('.error1').show();
      $('.error1').css('color','red');
      $('.error1').html('This Should not be empty ');

    }else{


      if (!pat2.test(price)) {
        $('.price').addClass('is-invalid');
        $('.error1').show();
        $('.error1').css('color','red');
        $('.error1').html('Enter Number only ');

      }else{
       $('.price').addClass('is-valid');
       $('.price').removeClass('is-invalid');
       $('.error1').hide();
     }


   }


   if (descr=="") {

    $('.descr').addClass('is-invalid');
    $('.error2').show();
    $('.error2').css('color','red');
    $('.error2').html('This Should not be empty ');
  }
  else{

   $('.descr').addClass('is-valid');
   $('.descr').removeClass('is-invalid');
   $('.error2').hide();
 }


 if (image=="") {

  $('.image').addClass('is-invalid');
  $('.error3').show();
  $('.error3').css('color','red');
  $('.error3').html('This should not be empty ');
}
else{
 $('.image').addClass('is-valid');
 $('.image').removeClass('is-invalid');
 $('.error3').hide();
}




$.ajax({

  url:"machineupload.php",
  type:"POST",
  contentType:false,
  processData:false,
  data:{
    login:1,
    mtxt:mtxt,
    price:price,
    descr:descr,
    pcode:pcode
  },
  success:function(data){
    $('#message').html(data);
  }



});

}


});


  });
</script>
