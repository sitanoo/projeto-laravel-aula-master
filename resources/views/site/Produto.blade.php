
@extends('site.layout')

@section('titulo')
    {{$titulo}}
@stop

@section('conteudo')


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Produtos</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para este template -->
    <link href="album.css" rel="stylesheet">
  </head>

  <body>

    
    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading display-1">Produtos</h1>
          <p class="lead text-muted"></p>
          
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                  <img class="card-img-top" src="https://www.gsuplementos.com.br/upload/growth-layout-personalizado/produto/185/01-desk.png" height="300px" width="100px" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Produto 1</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                     
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="https://www.gsuplementos.com.br/upload/growth-layout-personalizado/produto/82/product.png" height="300px" width="100px" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"></p>
                  <p class="card-text">Produto 2</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" data-src="https://www.gsuplementos.com.br/upload/growth-layout-personalizado/produto/2/product.png" height="300px" width="100px" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Produto 3</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>

            

    </main>

    <footer class="text-muted">
      <div class="container">
        
        
      </div>
    </footer>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
  </body>
</html>
