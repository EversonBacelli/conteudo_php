<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    


    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
    
    
  
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="download.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="download.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="download.png" class="d-block w-100" alt="...">
    </div>
  </div>
</div>


    <p id="1"> Texto</p>
    <input type="button"  value='Exibir Alerta'>
    <button type="button" id='2' class="btn btn-dark" onclick="fAjax(document.getElementById(1).innerHTML)">Dark</button>
    


    <script type="text/javascript"> 
       function fAjax(login){
         $.ajax({
          url: './index.php',
          data: {login: login},
          type: 'post',
          success: function(){
            alert(login);
          }
         }
           
         )
       };
    </script>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script   src="https://code.jquery.com/jquery-3.6.0.js"   integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>   
    <script src="js/jQuery/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>