<!DOCTYPE html>
<html lang="en">
    <!--
            Autor: Ricardo Santiago Tomé.
            Utilidad: Este programa consiste en construir una pagina web que cargue registros en la tabla Departamento desde un array departamentosnuevos
                      utilizando una consulta preparada.
            Fecha-última-revisión: 22-11-2022.
    -->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">
        <meta name="author" content="Ricardo Santiago Tomé">
        <link rel="stylesheet" href="../webroot/css/estilosPlantilla.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" type="image/png" sizes="96x96" href="../../webroot/images/favicon-96x96.png">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>Script carga inicial</title>
    </head>
    <body>
        <header>
            <h1>Scripts proyecto tema 5</h1>
            <h2>Script carga inicial</h2>
        </header>
        <main>
            <article>
                <h3>Scripts de carga inicial entorno de explotación</h3>
                <?php
                require_once '../core/validacionFormularios.php';
                require_once '../config/confDB.php';
                try {
                    //Establecimiento de la conexión 
                    $DB208DWESLoginLogoff = new PDO(DSN, NOMBREUSUARIO, PASSWORD);
                    $insercion = $DB208DWESLoginLogoff->prepare(<<<SQL
                    use DAW208DBProyectoTema5;
                    insert into T02_Departamento (T02_CodDepartamento,T02_DescDepartamento,T02_FechaCreacionDepartamento,T02_VolumenNegocio) 
                    values("DAW","Despliegue Aplcaciones Web",1668384061,2000);
                    insert into T02_Departamento  (T02_CodDepartamento,T02_DescDepartamento,T02_FechaCreacionDepartamento,T02_VolumenNegocio) 
                    values("DWC","Desarrollo Web Entorno Cliente",1668384061,1000);
                    insert into T02_Departamento  (T02_CodDepartamento,T02_DescDepartamento,T02_FechaCreacionDepartamento,T02_VolumenNegocio)
                    values("DWS","Desarrollo Web Entorno Servidor",1668384061,3000);
                    insert into T02_Departamento  (T02_CodDepartamento,T02_DescDepartamento,T02_FechaCreacionDepartamento,T02_VolumenNegocio)
                    values("DIW","Diseño Interfaces Web",1668384061,4000);
                    insert into T02_Departamento  (T02_CodDepartamento,T02_DescDepartamento,T02_FechaCreacionDepartamento,T02_VolumenNegocio)
                    values("EIE","Empresa e Iniciativa Emprendedora",1668384061,2);
                    insert into T01_Usuario(T01_CodUsuario,T01_Password,T01_DescUsuario,T01_FechaHoraUltimaConexion) values
                    ('heraclio',sha2(concat('heraclio','paso'),256),'Heraclio', FROM_UNIXTIME('1609380121')),
                    ('alberto',sha2(concat('alberto','paso'),256),'Alberto', FROM_UNIXTIME('1609380121')),
                    ('amor',sha2(concat('amor','paso'),256),'Amor', FROM_UNIXTIME('1609380121')),
                    ('antonio',sha2(concat('antonio','paso'),256),'Antonio', FROM_UNIXTIME('1609380121')),
                    ('carmen',sha2(concat('carmen','paso'),256),'Carmen',FROM_UNIXTIME('1609380121')),
                    ('ricardo',sha2(concat('ricardo','paso'),256),'Ricardo', FROM_UNIXTIME('1609380121')),
                    ('david',sha2(concat('david','paso'),256),'David', FROM_UNIXTIME('1609380121')),
                    ('luis',sha2(concat('luis','paso'),256),'Luis', FROM_UNIXTIME('1609380121')),
                    ('otalvaro',sha2(concat('otalvaro','paso'),256),'Alejandro', FROM_UNIXTIME('1609380121')),
                    ('josue',sha2(concat('josue','paso'),256),'Josue', FROM_UNIXTIME('1609380121')),
                    ('manuel',sha2(concat('manuel','paso'),256),'Manuel', FROM_UNIXTIME('1609380121')),
                    ('admin',sha2(concat('admin','paso'),256),'Administrador', FROM_UNIXTIME('1609380121'));
                SQL);
                    $insercion->execute(); //Ejecuto la consulta
                    if ($insercion) {
                        echo "<h3>Insercion ejecutada con exito</<h3>";
                        $resultadoDepartamentos = $DB208DWESLoginLogoff->query("select * from T02_Departamento");
                    }
                } catch (PDOException $excepcion) { //Código que se ejecutará si se produce alguna excepción
                    //Almacenamos el código del error de la excepción en la variable $errorExcepcion
                    $errorExcep = $excepcion->getCode();
                    //Almacenamos el mensaje de la excepción en la variable $mensajeExcep
                    $mensajeExcep = $excepcion->getMessage();

                    echo "<span style='color: red;'>Error: </span>" . $mensajeExcep . "<br>"; //Mostramos el mensaje de la excepción
                    echo "<span style='color: red;'>Código del error: </span>" . $errorExcep; //Mostramos el código de la excepción
                } finally {
                    // Cierre de la conexión.
                    unset($DB208DWESLoginLogoff);
                }
                ?>
                <a href="../indexProyectoTema4.php"><img src="../webroot/volver.png" alt="volver" class="volver2" /></a>
            </article>
        </main>
        <footer>
            <p>2022-23  IES LOS SAUCES. <a href="../../../index.html" id="enlacePrincipal" title="Enlace a Index Principal">Ricardo Santiago Tomé</a> © Todos los derechos reservados</p>
            <a href="https://github.com/RicardoSantom" target="blank" id="github" title="RicardoSantom en GitHub">
            </a>
            <a href="https://www.linkedin.com/in/ricardo-santiago-tom%C3%A9/" id="linkedin" title="Ricardo Santiago Tomé en Linkedim" target="_blank"></a>
            <a href="../../doc/curriculumRicardo.pdf" class="material-icons" title="Curriculum Vitae Ricardo Santiago Tomé" target="_blank" id="curriculum"><span class="material-icons md-18">face</span></a>
            <a href="../indexProyectoTema5.php" id="enlaceSecundario" title="Enlace a Index Proyecto Tema5">Index Proyecto Tema5</a>
        </footer>
    </body>
</html>