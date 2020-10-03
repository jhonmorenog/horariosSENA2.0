<!DOCTYPE html>
<html>
    <head lang="es">
        <link href="web/boostrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <link href="web/css/mensajes.css" rel="stylesheet" type="text/css"/>


        <script src="web/boostrap/js/jquery.js" type="text/javascript"></script>
        <script src="web/boostrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="web/js/ajax.js" type="text/javascript"></script>
        <script src="web/js/f.js" type="text/javascript"></script>

        <meta name="viewport" content="width=device-width, user-scalable=no">
        <meta charset="UTF-8">
        <title>Horarios</title>

        <style>

            .banner{
                position: absolute;
                width: 100%;
                height: 154px;
                background-color: #0d384c;
                z-index: 3;
                bottom: 0;

            }

            .login{
                position: absolute;
                width: 303px;
                height: 331px;
                box-shadow: 13px -11px 26px -2px #000;
                z-index: 3;
                border-radius: 0px 0px 0px 64px;
                top: 0px;
                right: 0px;
            }
            .formulario{
                padding: 62px 21px 22px 21px;
            }
            .videoFondo{
                width:auto;
                height: auto;

            }



        </style>

    </head>
    <body style="background-color: #0d384c;">
        <div id="a"></div>



        <!--        Se agrega el video de fondo-->
        <video autoplay loop muted="muted" class="videoFondo"  >
            <source src="source/video/Background - 9584.mp4" type="video/mp4">

        </video>
        <!--banner en la parte inferios-->
        <!--        <div class="banner">
                </div>-->
        <!--Formulario de login-->
        <div class="login bg-white ">
            <div>
                <form id="form1" class="formulario" method="post">

                    <div class="form-group">
                        <label for="documento">Documento:</label>
                        <input type="number"name="documento" id="fDocumento" class="form-control">
                    </div>
                    <div class="form-group ">
                        <label for="clave">Contraseña:</label>
                        <input type="password" name="clave" id="fClave" class="form-control">
                    </div>
                    <div class="form-group ">
                        <button type="button" id="entrar" class="btn btn-success">Entrar</button>
                        <a href="#" class="nav-link" style="float: right;">¿olvidó la contraseña?</a>
                    </div>
                </form>
            </div>
            
        </div>

    </body>
</html>
