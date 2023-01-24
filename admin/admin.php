<?php
include('../cfg.php');
function FormularzLogowania()
{
    $wynik = '
    <div class="logowanie">
        <h1 class="heading">Panel CMS:</h1>
            <div class="logowanie">
                <form method="post" name="LoginForm" enctype="multipart/form-data" action="'.$_SERVER['REQUEST_URI'].'">
                    <table class="logowanie">
                        <tr><td class="log4_t">[email]</td><td><input type="text" name="login_email" class="logowanie" /></td></tr>
                        <tr><td class="log4_t">[haslo]</td><td><input type="password" name="login_pass" class="logowanie" /></td></tr>
                        <tr><td>&nbsp;</td><td><input type="submit" name="x1_submit" class="logowanie" value="zaloguj" /></td></tr>
                    </table>
                </form>
            </div>
    </div>
    ';
    return $wynik;
}
FormularzLogowania()

    $query = "SELECT * FROM page_list WHERE id='$id_clear' ORDER BY data DESC LIMIT 10";
    $result = mysqli_query($link, $query);

    while($row = mysqli_fetch_array($result))
    {
        $row['id'].' '.$row['tytul'].' <br />';
    }



function ListaPodstron()
{
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $baza   = 'moja_strona';

    $conn = mysqli_connect($dbhost , $dbuser, $dbpass, $baza);

    $zapytanie_sql = 'SELECT * FROM page_list';
    $wyniki = mysqli_query($conn, $zapytanie_sql);
    
    $button = '
    <form method="post" name="button">
        <input type="button" class="btn btn-light" value="Usuń"/>
        <input type="button" class="btn btn-light" value="Edytuj"/>
    </form>
    ';

    while($wiersz = mysqli_fetch_array($wyniki)) {
    echo 'id= ' .  $wiersz['id'] . ' page_title= ' . $wiersz['page_title'];
    echo $button;
    }
 
}
?>