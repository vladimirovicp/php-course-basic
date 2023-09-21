<?php
    include 'config.php'
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <!-- <link href="starter-template.css" rel="stylesheet"> -->

    <title>PHP часть 1. Основы PHP</title>

    <style>
    .card-deck{
      margin-top: 20px      
    }

    .card-body img{
      display: block;
      margin: 0 auto 15px;

    }
    .card-footer{
      background: transparent;
      border: 0;
    }
    </style>
  </head>
  <body>

  <?php
    include 'inc/nav.inc.php';
  ?>

<div class="container">

<div class="row">
<div class="col-md-3 col-sm-3 ">
        
  <h4>Категория</h4>
  
  <div class="row">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
 <hr>
         
 <h4>Цена</h4>
  
  <div class="row">
    <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-default">от</span>
    </div>
    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> &nbsp;
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-sm">до</span>
    </div>
    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">&nbsp;

    <button type="button" class="btn btn-success">Найти</button>    
  </div>
  </div>
 <hr>  
  <h4>Издательство</h4>

  <div class="row">
  <ul class="list-group col-md-12 col-sm-12">
    <li class="list-group-item">
      <input type="checkbox"   id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Первое</label>
    </li>
    <li class="list-group-item">
      <input type="checkbox" id="exampleCheck2">
      <label class="form-check-label" for="exampleCheck2">Второе</label>
    </li>
    <li class="list-group-item">
      <input type="checkbox" id="exampleCheck3">
      <label class="form-check-label" for="exampleCheck3">Третье</label>
    </li>
    <li class="list-group-item">
      <button type="button" class="btn btn-success">Найти</button>    
    </li>
  </ul>

  </div>
 <hr>

 
</div>

<div class="col-md-9 col-sm-9 ">
  <h1>Каталог</h1>

  <div class="card-deck"> 
      <div class="card">        
        <div class="card-body">
          <img src="http://placehold.it/150x220"  alt="...">
          <h3 class="card-title">1200руб</h3>
          <p class="card-text"><small class="text-muted">Автор: dfgdfg</small></p>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. Издательство: <a href="#">Полезное</a></p>
        </div>
        <div class="card-footer">
          <button type="button" class="btn btn-primary">В корзину</button>
        </div>
       </div>

      <div class="card">
        <div class="card-body">
          <img src="http://placehold.it/150x220"  alt="...">
          <h3 class="card-title">800руб</h3>
          <p class="card-text"><small class="text-muted">Автор: sdgfgfg</small></p>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="card-footer">
          <button type="button" class="btn btn-primary">В корзину</button>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <img src="http://placehold.it/150x220"  alt="...">
          <h3 class="card-title">2100руб</h3>
          <p class="card-text"><small class="text-muted">Автор: dfgd</small></p>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="card-footer">
          <button type="button" class="btn btn-primary">В корзину</button>
        </div>
      </div>
      
  </div>


  <div class="card-deck">

      <div class="card">        
        <div class="card-body">
          <img src="http://placehold.it/150x220"  alt="...">
          <h3 class="card-title">1200руб</h3>
          <p class="card-text"><small class="text-muted">Автор: dfgdfg</small></p>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. Издательство: <a href="#">Полезное</a></p>
        </div>
        <div class="card-footer">
          <button type="button" class="btn btn-primary">В корзину</button>
        </div>
       </div>

      <div class="card">
        <div class="card-body">
          <img src="http://placehold.it/150x220"  alt="...">
          <h3 class="card-title">800руб</h3>
          <p class="card-text"><small class="text-muted">Автор: sdgfgfg</small></p>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="card-footer">
          <button type="button" class="btn btn-primary">В корзину</button>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <img src="http://placehold.it/150x220"  alt="...">
          <h3 class="card-title">2100руб</h3>
          <p class="card-text"><small class="text-muted">Автор: dfgd</small></p>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="card-footer">
          <button type="button" class="btn btn-primary">В корзину</button>
        </div>
      </div>
      
  </div>


</div>

   
</div>

  
</div>

<div class="container">
     

  </div><!-- /.container -->

      <?php
        include 'inc/footer.inc.php';
      ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>