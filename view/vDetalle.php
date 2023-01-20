<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">
        <meta name="author" content="Ricardo Santiago Tomé">
        <meta name="copyright" content="Ricardo Santiago Tomé" />
        <meta name="keywords" content="desarrollo,software,servidor,cliente,PHP,HTML,CSS,JavaScript,MySQL,aplicacion,web"/>
        <meta name="description" content="Aplicacion de control de acceso y navegación LoginLogoff, práctica 2ºDAW IES Los Sauces, Benavente"/>
        <link href="webroot/css/fonts.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" type="image/png" sizes="96x96" href="../webroot/images/favicon-96x96.png">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="webroot/css/estilosVistaDetalle.css"/>
        <title>Vista Detalle</title>
    </head>
    <body>
        <header class="headerPropio">
            <h1>Aplicación LoginLogoff</h1>
        </header>
        <main>
            <article>
                <h3>Detalle de variables superglobales <strong>+ </strong>phpinfo</h3>
                <form name="ejercicio" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <input type="submit" id="volverPrograma" value="Volver" name="volverPrograma">
                    </tr>
                    </table>
                </form>
                <?php
                /**
                 * @author Ricardo Santiago Tomé - RicardoSantom en Github https://github.com/RicardoSantom
                 * @version 1.0
                 * @since 15/01/2023
                 */
                if (!empty($_SESSION)) {
                    echo "<table><caption>\$_SESSION'</caption><tr><th>Clave</th><th>Valor</th></tr>";
                    foreach ($_SESSION as $clave => $valor) {
                        echo "<tr>";
                        echo "<td><strong>$clave</strong></td>";
                        if (is_object($valor)) {
                            echo '<td><table><th>Clave</th><th>valor</th>';
                            foreach ($valor as $c => $v) {
                                echo "<tr><th>$c</th>";
                                echo "<td>$v</td></tr>";
                            }
                            echo"</table></td>";
                        } else {
                            echo "<td>" . $valor . "</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";

                    echo "</br>";
                } else {
                    printf('<h3>La variable superglobal $_SESSION está vacía</h3>');
                }

                /*echo "<table><caption>\$_SESSION'</caption><tr><th>Clave</th><th>Valor</th></tr>";
                foreach ($_SESSION['user208DWESLoginLogoff']['Usuario Object'] as $claveObjeto => $valorObjeto) {
                    echo "<tr>";
                    echo "<td><strong>$claveObjeto</strong></td>";
                    echo "<td>" . $valorObjeto . "</td>";
                }
                echo "</tr>";
                echo "</table>";*/
                
                ?>
                <table>
                    <thead>
                        <tr>
                            <td>Atributo</td>
                            <td>Valor</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Fecha Hora Ultima Conexion Anterior</th>
                            <th><?php echo $_SESSION['user208DWESLoginLogoff']->getFechaHoraUltimaConexionAnterior() ?></th>
                        </tr>
                    </tbody>
                </table>
                
                <?php function imprimirTablaVariablesSuperGlobales($aVariableSuperglobal, $sNombreVariableSuperGlobal) {
                    /**
                 * Esta función recibe dos parámetros, con ellos construye una tabla, evalua si el primer parámetro recibido
                 * es null o está vacío; en caso de que así sea, devuelve un mensaje impreso por pantalla declarando que
                 * no hay nada que mostrar de esta variable superglobal, si no, construye una fila por cada pareja de variable - valor 
                 * imprimiendo el valor de cada una de ellas en una celda diferente.
                 *  Esta impresión la realiza con print_r pasándole como primer parámetro en una ocasión el nombre de la variable 
                 * y en otra el valor de esta, y como segundo parámetro un valor booleano que si está establecido a true no mostrará
                 * el primer parámetro, por contra, si está establecido a false si lo mostrará.
                 * @author Ricardo Santiago Tomé - RicardoSantom en Github https://github.com/RicardoSantom
                 * @version 1.0
                 * @since 05/11/2022
                 * @param array $aVariableSuperglobal array que contiene datos de la variable superglobal. Como parámetro la pasamos con el 
                 *  identificador de dicha variable superglobal.
                 * @param string $sNombreVariableSuperGlobal nombre de la variable superglobal abriendo comillas seguidas por la secuencia
                 * de escape \ y a continuación el identificador de la variable supeglobal y para finalizar, cerramos con comillas.
                 */
                    printf('<table class="tablaGlobales"><caption>%s</caption>', $sNombreVariableSuperGlobal);
                    if (is_null($aVariableSuperglobal) || empty($aVariableSuperglobal)) {
                        printf('<thead><th  style="border:none;color:red;text-align:center;">La variable superglobal %s está vacía</th></thead>', $sNombreVariableSuperGlobal);
                    } else {
                        foreach ($aVariableSuperglobal as $nombreSuperglobal => $valorSuperglobal) {
                            if ($nombreSuperglobal == '_SESSION') {
                                
                            } else {
                                if ($nombreSuperglobal == '_SERVER') {
                                    print("<tr>");
                                    print '<td>';
                                    print($sNombreVariableSuperGlobal);
                                    print '</td>';
                                    print '<td>';
                                    echo '<table>';
                                    foreach ($_SERVER as $claveServer => $valorServer) {
                                        echo '<tr>';
                                        print '<td>';
                                        print_r($claveServer);
                                        print '</td>';
                                        print '<td>';
                                        print_r($valorServer);
                                        print '</td>';
                                        echo '</tr>';
                                    }
                                    echo '</table>';
                                    print '</td>';
                                } else {
                                    echo "<tr><th>";
                                    print_r($nombreSuperglobal, $booleanoSuperglobal = false) . "</th>";
                                    echo "<td>";
                                    print_r($valorSuperglobal, $booleanoSuperglobal2 = false) . "</td>";
                                    print "</tr>";
                                }
                            }
                        }
                        echo "</table>";
                    }
                }

                imprimirTablaVariablesSuperGlobales($_COOKIE, "\$_COOKIE");
                imprimirTablaVariablesSuperGlobales($_SERVER, "\$_SERVER");
                imprimirTablaVariablesSuperGlobales($_REQUEST, "\$_REQUEST");
                imprimirTablaVariablesSuperGlobales($GLOBALS, "\$_GLOBALS");
                imprimirTablaVariablesSuperGlobales($_FILES, "\$_FILES");
                imprimirTablaVariablesSuperGlobales($_ENV, "\$_ENV");
                imprimirTablaVariablesSuperGlobales($_POST, "\$_POST");
                imprimirTablaVariablesSuperGlobales($_GET, "\$_GET");
                ?>
                <?php phpinfo();
                ?>
            </article>
        </main>
    </body>
</html>