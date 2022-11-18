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
              <h1 class="font-weight-bold" style="font-size: 4em;">Add Agro Prduce for Sell</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="productmain2"  style="background:linear-gradient(145deg,#2a2b2f 50%,#232427 0%);">
      <div class="container">

        <div class="row">
          <div class="col-lg-12">
            <div class="card" style=" border: 5px solid grey;background:linear-gradient(145deg,#2a2b2f 50%,#232427 0%);">


              <form action="upload.php" id="myform" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                <div class="card-body" style="color:white">

                  <div class="form-group">
                    <label>Produce Name</label>
                    <input type="text" name="mtxt" value="" class="form-control p-3 mb-2 mtxt color" placeholder="Produce Name" required>
                     <span class="error"></span>
                  </div>
                  
                  <div class="form-group">
                    <label>Produce Price(Per Kg/Ltr)</label>
                    <input type="text" name="price" class="form-control p-3 mb-2 price color" placeholder="Produce Price" required >
                    <span class="error1"></span>
                  </div>
                  
                  <div class="form-group">
                    <label>Produce Quantity</label>
                     <input type="number" min='1' name="qty" class="form-control p-3 mb-2 qty color" placeholder="quantity" required>
                    <span class="error5"></span>
                  </div>
                  
                  <div class="form-group">
                    <label>Unit(Kg/dz/ltr)</label>
                    <select class="form-control unit color" placeholder="quantity" id="unit" name="unit" >
                      <option selected disabled="">--Select--</option>
                      <option value="kg" >Kg</option>
                      <option value="dozen">dz</option>
                      <option value="Litre">Ltr</option>
                    </select>
                    <div class="error4"></div>
                  </div>

                  <div class="form-group">
                    <label>Produce Type</label>
                    <select class="form-control cat color" placeholder="Category" id="cat" name="cat" >
                      <option selected disabled>--Select--</option>
                      <option  value="Fruits" >FRUITS</option>
                      <option  value="Vegetables">VEGETABLES</option>
                      <option  value="CropS">CROPS</option>
                      <option  value="Pesticide">PESTICIDE</option>
                      <option  value="Seeds">SEEDS</option>
                      <option value="Fertilizer" >FERTILIZER</option>
                      <option  value="Plant-Nutrition">PLANT NUTRITION</option>
                      <option  value="Other">OTHER</option>
                    </select>
                    <div class="error6"></div>
                  </div>

                   <div class="form-group">
                    <label>Produce Description</label>
                    <textarea type="text" name="descr" class="form-control p-3 mb-2 descr color" placeholder="Produce description" required ></textarea>
                     <span class="error2"></span>
                  </div>

                  <div class="form-group">
                    <label>Produce Image</label>
                    <input type="file" name="image"  class="form-control image color" id="file" value="" placeholder="" required>
                    <span class="error3"></span>
                    <input type="hidden" name="pcode"  class="form-control pcode color " id="pcode" value="<?php echo rand(); ?>" placeholder="" required>
                  </div>
                  
                  <div class="right">
                    <button type="submit" class="btn btn-primary submit" id="submit" name="submit">Add Produce</button>
                  </div>
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

   <!-- <div class="productbg"></div>
	<div class="productmain">
    <div id="message"></div> -->
    <!-- Button trigger modal -->
    <!-- <div class="producttxt">
    	<h2>Add Product</h2>
    	<p>Yours Own Market </p>
    </div>
    <div class="btnproduct">
<button type="submit" class="btn btn-primary btnproduct" data-toggle="modal" data-target="#exampleModal">
 Add Product
</button>
</div> -->

<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"  class="text-center" style="font-size: 2em ">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="upload.php" id="myform" method="post" accept-charset="utf-8" enctype="multipart/form-data">

         <input type="text" name="mtxt" value="" class="form-control p-3 mb-2 mtxt" placeholder="Product Name" required>
         <span class="error"></span>
         <input type="text" name="price" class="form-control p-3 mb-2 price" placeholder="Product Price(Per Kg/Ltr)" required >
         <span class="error1"></span>

         <select class="form-control unit" placeholder="quantity" id="unit" name="unit" >
          <option selected disabled="">--Select--</option>
          <option value="kg" >Kg</option>
          <option value="dozen">dozen</option>
          <option value="Litre">Litre</option>
          <input type="text" name="qty" placeholder="quantity" class="form-control">
        </select>
        <div class="error4"></div>


        <select class="form-control cat" placeholder="Category" id="cat" name="cat" >
          <option selected disabled>--Select--</option>
          <option value="Fertilizer" >FERTILIZER</option>
          <option  value="Fruits" >FRUITS</option>
          <option  value="Vegetables">VEGETABLE</option>
          <option  value="Vegetables">Other</option>
        </select>
        <div class="error4"></div>

        <textarea type="text" name="descr" class="form-control p-3 mb-2 descr" placeholder="Product description" required ></textarea>
        <span class="error2"></span>
        <input type="file" name="image"  class="form-control image " id="file" value="" placeholder="" required>
        <span class="error3"></span>
        <input type="hidden" name="pcode"  class="form-control pcode " id="pcode" value="<?php echo rand(); ?>" placeholder="" required>
        <div class="modal-footer">

          <button type="submit" class="btn btn-primary submit" id="submit" name="submit">AddProduct</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>

  </div>
</div> -->
</div>
</div>
<?php include "assets/jslink.php"?>

</body>
</html>
</script>

<script type="text/javascript">


  $(document).ready(function(){

    $('#submit').click(function() {
      var mtxt=$('.mtxt').val();
      var cat=$('.cat :selected').text();
      var unit=$('.unit :selected').text();
      var price=$('.price').val();
      var quantity=$('.qty').val();
      var descr=$('.descr').val();
      var image=$('.image').val();
      var pcode=$('.pcode').val();

      var pat1=/^[a-zA-Z]*$/;
      var pat2=/^[0-9]*$/;


      if (mtxt==""  && cat=="--Select--" && unit=="--Select--" && quantity==""  && descr=="" && price=="" && image=="") {

        $('.mtxt').addClass('is-invalid');
        $('.cat').addClass('is-invalid');
        $('.unit').addClass('is-invalid');
        $('.qty').addClass('is-invalid');
        $('.descr').addClass('is-invalid');
        $('.price').addClass('is-invalid');
        $('.image').addClass('is-invalid');
        $('.error3').show();
        $('.error3').css('color','red');
        $('.error3').html('Please Fill All The fields ');

      }else{
        $('.productmain2').css("height","1024px");

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
    if (unit=="--Select--") {
      $('.unit').addClass('is-invalid');
      $('.error').show();
      $('.error4').css('color','red');
      $('.error4').html('Please Select any one option ');
    }else{
      $('unit').addClass('is-valid');
      $('.unit').removeClass('is-invalid');
      $('.error4').hide();
    }


    if (cat=="--Select--") {
      $('.cat').addClass('is-invalid');
      $('.error').show();
      $('.error6').css('color','red');
      $('.error6').html('Please Select any one option ');
    }else{
      $('cat').addClass('is-valid');
      $('.cat').removeClass('is-invalid');
      $('.error6').hide();
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

  if (quantity=="") {
      $('.qty').addClass('is-invalid');
      $('.error5').show();
      $('.error5').css('color','red');
      $('.error5').html('This Should not be empty ');

    }else{
      if (quantity<1) {
        $('.qty').addClass('is-invalid');
        $('.error5').show();
        $('.error5').css('color','red');
        $('.error5').html('Please enter minimum quantity ');

      }else{
       $('.qty').addClass('is-valid');
       $('.qty').removeClass('is-invalid');
       $('.error5').hide();
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

  url:"upload.php",
  type:"POST",
  contentType:false,
  processData:false,
  data:{
    login:1,
    mtxt:mtxt,
    cat:cat,
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
