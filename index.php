<?php
 // include 'funciones/conexion.php';
?>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="unlam_favicon.ico">

    <title>TP Seguridad y Calidad en Aplicaciones Web</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/offcanvas.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  <style type="text/css"></style></head>

  <body style="">
    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://getbootstrap.com/examples/offcanvas/#">Trabajo Practico 2013</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="http://getbootstrap.com/examples/offcanvas/#">Home</a></li>
            <!-- <li><a href="http://getbootstrap.com/examples/offcanvas/#about">About</a></li>
            <li><a href="http://getbootstrap.com/examples/offcanvas/#contact">Contact</a></li> -->
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->

    <div class="container">

      <div class="row">

        <div class="col-xs-12 col-sm-9">
          <div class="row">
          <div class="col-lg-12">
            <div class="row">
              
              <h1 id="tables" class="col-8 col-sm-8 col-lg-8">Precios de esta semana</h1>
              <div class="col-4 col-sm-4 col-lg-4">
                  <select class="semana">
                    <option>Desde 25/11/2013 al 01/12/2013</option>
                    <option>Desde 18/11/2013 al 24/12/2013</option>
                    <option>Desde 11/11/2013 al 17/12/2013</option>
                    <option>Desde 04/11/2013 al 10/12/2013</option>
                  </select>
                </div>

            </div>            <div class="productos bs-example table-responsive">
              <table class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Producto</th>                 
                    <th>Precio Maximo</th>
                    <th>Precio Minimo</th>
                    <th>Promedio</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                  </tr>
                  <tr>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                  </tr>
                  <tr>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                  </tr>
                  <tr class="success">
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                  </tr>
                  <tr class="danger">
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                  </tr>
                  <tr class="warning">
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                  </tr>
                  <tr class="active">
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                  </tr>
                </tbody>
              </table>
            </div><!-- /example -->
          </div>

          <div class="col-lg-12">
            <div class="panel panel-default col">
            <div id="desplega-comentarios"  class="row">
              <div class="panel-heading col-lg-10 col-xs-10 col-sm-10" >Comentarios</div>
              <div class="col-lg-2 col-xs-2 col-sm-2 drop-down">
                <i class="glyphicon glyphicon-chevron-down "></i>
              </div>
              
            </div>
              <div class="panel-body comentarios-desplegados">
                <div class="comments">
                <div class="row comentario"><strong class="col-lg-4">Autor:</strong><p class="col-lg-8">Contenido  del comentario.</p></div>
                <div class="row comentario"><strong class="col-lg-4">Autor:</strong><p class="col-lg-8">Contenido  del comentario.</p></div>
                <div class="row comentario"><strong class="col-lg-4">Autor:</strong><p class="col-lg-8">Contenido  del comentario.</p></div>
                <div class="row comentario"><strong class="col-lg-4">Autor:</strong><p class="col-lg-8">Contenido  del comentario.</p></div>
                <div class="row comentario"><strong class="col-lg-4">Autor:</strong><p class="col-lg-8">Contenido  del comentario.</p></div>
                <div class="row comentario"><strong class="col-lg-4">Autor:</strong><p class="col-lg-8">Contenido  del comentario.</p></div>
                <div class="row comentario"><strong class="col-lg-4">Autor:</strong><p class="col-lg-8">Contenido  del comentario.</p></div>
              </div>
                  <form class="bs-example form-horizontal">
                <fieldset>
                    <label for="inputComentario" class="col-lg-4 control-label hide">Comentario</label>
                    <div class="col-lg-8 col-xs-8 col-sm-10">
                      <input type="text" class="form-control" id="inputComentario" placeholder="Comentario">
                    </div>
                    <div class="row col-lg-4 ">
                      <button type="submit" class="btn btn-primary">Submit</button> 
                    </div>
                </fieldset>
              </form>
              </div>
            </div>
          </div>

        </div>        
        </div><!--/span-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <div class="list-group">
            <div class="well">
<!-- Solo se muestra si el user no esta logueado -->
<?php 
if (isset($_SESSION)) {
   ?>
              <form class="bs-example form-horizontal">
                <fieldset>
                  <legend>Login</legend>
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-4 control-label">Email</label>
                    <div class="col-lg-8">
                      <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword" class="col-lg-4 control-label">Password</label>
                    <div class="col-lg-8">
                      <input type="password" class="form-control" id="inputPassword" placeholder="Password">            
                    </div>
                  </div>                  
                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-7">
                      <button type="submit" class="btn btn-primary">Submit</button> 
                    </div>
                  </div>
                </fieldset>
              </form>
<?php 
} else { ?>
              <div class="bs-example">
                <legend>Bienvenido</legend>
                <p class="text-muted"><a href=''>Cerrar sesi&oacute;n</a></p>
              </div>
              <form class="bs-example form-horizontal">
                <fieldset>
                  <legend>Insertar</legend>
                  <div class="form-group">
                    <label for="inputProducto" class="col-lg-4 control-label">Producto</label>
                    <div class="col-lg-8">
                                        <select class="producto">
                    <option>Producto</option>
                    <option>Producto</option>
                    <option>Producto</option>
                    <option>Producto</option>
                  </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPrecio" class="col-lg-4 control-label">Precio</label>
                    <div class="col-lg-8">
                      <input type="text" class="form-control" id="inputPrecio" placeholder="$">
                    </div>
                  </div>                  
                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-7">
                      <button type="submit" class="btn btn-primary">Submit</button> 
                    </div>
                  </div>
                </fieldset>
              </form>
              <?php 
              } ?>
            </div>
          </div>
        </div><!--/span-->
      </div><!--/row-->

        

      <hr>

      <footer>
        <p>© Figueredo, Montero, H&aacute;ylan, Martinez, Cardoso | Trabajo pr&aacute;ctico final de Seguridad y Calidad de aplicaciones Web</p>
      </footer>

    </div><!--/.container-->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./js/jquery-1.10.2.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/offcanvas.js"></script>
  

</body></html>