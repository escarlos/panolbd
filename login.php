<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
	<title>Login</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">	
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<!--<script src="validarRUT.js"></script>-->
</head>
<body>
<div class="container">    
     
    <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3"> 
        
        <div class="row">                
            <div class="iconmelon">
              <svg viewBox="0 0 70 32">
                <g filter="">
                  <use xlink:href="#git"></use>
                </g>
              </svg>
            </div>
        </div>
        
        <div class="panel panel-default" >
            <div class="panel-heading">
                <div class="panel-title text-center">PAÑOL DUOC UC</div>
            </div>     
            <form action="<?=URL?>controlador/valida.php" method="post" accept-charset="utf-8">


            <div class="panel-body" >

               
                   
                    <div class="input-group" >
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="user" type="text" class="form-control" name="user" value="" placeholder="Rut"  />                                        
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                    </div>                                                                  

                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                            <button type="submit" href="#" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-log-in"></i> Log in</button>                          
                        </div>
                    </div>

                  

            </div>     
                </form>
        </div>  
    </div>
</div>
<div >
   <div id="block-block-8" class="block block--block block--block-8" style="
    margin-top: 20%;
">
        <div class="block__content">
    <div class="foot-info">
			<div class="auxi">
				<div class="col1">Informaciones <strong><br>
2 2999 3862</strong><br>
<br>
<strong>Duoc UC</strong><br>
Instituto Profesional<br>
Centro 
				de Formación Técnica Duoc UC </div>
				<div class="logo"><img title="" alt="" src="http://www.duoc.cl/pa/sites/all/themes/palm/images/logo_acre.jpg"></div>
				<div class="col2"><strong>Instituto Profesional Duoc UC<br>
Acreditado<br>
                </strong>desde agosto 2010 hasta agosto 2017 <br>
Docencia de Pregrado<br>
Gestión Institucional <br>
</div>
				<div class="col3"><strong>Centro de Formación Técnica Duoc UC<br>
                </strong><strong>Acreditado</strong><br>
desde noviembre 2011 hasta noviembre 2017<br>
Docencia de Pregrado<br>
Gestión Institucional </div>
			</div>
		</div>  </div>
</div>
          </div>

            
  </div>
<div class="pre-footer-wrapper">
<div class="inside-wrapper">
 </div>
</div>
<div class="footer-wrapper">
  <footer class="l-footer" role="contentinfo">
  <div class="inside-wrapper">
      <div class="l-region l-region--footer">
    <div id="block-block-3" class="block block--block block--block-3">
        <div class="block__content">
    <ul><li>© Copyright Duoc UC 2015</li><li><img src="http://www.duoc.cl/pa/sites/all/themes/palm/images/logo-footer.png"></li></ul>  </div>
</div>
  </div>
  </div>
  </footer>
</div>
</div>
</body>
</html>