<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CSN Cooperativa Financiera</title>
		<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="./css/inicio.css" rel="stylesheet">
	</head>
	<body >
    <div class="login">
    	<div class="formLogin pt-5 mt-5 pb-5 mb-5">
  	  		<div class="col-md-6 col-sm-12 text-center">
                <h6 class="lblNombre">ANTONIO SOLIS ALEMAN</h3>
                <div class="pt-3 mt-3">
                    <img src="img/user.png" alt="" class="img-responsive imgUsuario">
                </div>
  	  		</div>
  	  		<div class="col-md-6 col-sm-12 text-center">
                <h6 class="pb-4 mb-4 labelLogin">LOGIN</h6>
				<form method="post" id="frmAcceso" class="form-signin">
                    <div class="form-field align-items-center pb-3 pt-3">
                        <input type="email" class="form-control txtUserName" id="email" name="email" placeholder="Correo institucional" required autocomplete="off">
                    </div>
                    <div class="form-field align-items-center pb-3 pt-3">
                        <input type="password" class="form-control txtPassword" id="password" name="password" placeholder="Contraseña" required autocomplete="off">
                    </div>
                    <div class="form-field align-items-center pb-3 pt-3 mb-4">
                        <select name="opcionesLogin" id="opcionesLogin" class="form-select">
                            <option value="">Selecciona</option>
                            <option value="educacion0" class="primerNivel">Educación</option>
                            <option value="141" class="segundoNivel">141-Csn Mail</option>
                            <option value="143" class="segundoNivel">143-App Arco</option>
                            <option value="145" class="segundoNivel">145-App_Sgi</option>
                            <option value="159" class="segundoNivel">159-Políticas Csn</option>
                        </select>
                    </div>
                    <button class="w-100 btn btn-lg btn-success btnEntrar mt-4" type="submit">Entrar</button>
                    <div class="mt-4">
                        <label class="infoSpan"><span>DESARROLLO T.I. <br>Ext 260,261 y 262</span></label>
                    </div>
                </form>
  	  		</div>
    	</div>
    </div>
    <!-- jQuery -->

    <script src="./js/jquery-3.6.1.min.js"></script>
    <!-- Bootstrap 5 -->
    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="js/panel.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@microsoft/microsoft-graph-client/lib/graph-js-sdk.js"></script>
    <!-- polyfilling promise -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/es6-promise/dist/es6-promise.auto.min.js"></script>
    <!-- polyfilling fetch -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/whatwg-fetch/dist/fetch.umd.min.js"></script>
    <!-- depending on your browser you might wanna include babel polyfill -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@babel/polyfill@7.4.4/dist/polyfill.min.js"></script>
  </body>
</html>