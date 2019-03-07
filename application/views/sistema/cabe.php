
<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Prueba De Desarrollo</title>
    <link href="<?=base_url('/assets/plugins/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('/assets/plugins/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('/assets/css/propio.css')?>" rel="stylesheet">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Mantenimiento
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?= site_url('alumnos') ?>">Alumnos</a>
                            <a class="dropdown-item" href="<?= site_url('cursos') ?>">Cursos</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Reportes
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?= site_url('reportes') ?>">Cursos</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <hr>
    </div>
<?
if(false){
    ?></body></html><?
}
?>
