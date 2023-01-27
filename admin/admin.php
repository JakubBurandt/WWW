<?php
include('../cfg.php');
$_SESSION['logged_in'] = false;

function FormularzLogowania()
{
    $wynik = '
    <div class="logowanie">
        <h1 class="heading">Panel CMS:</h1>
            <div class="logowanie">
                <form method="post" name="LoginForm" enctype="multipart/form-data" action="' . $_SERVER['REQUEST_URI'] . '">
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


echo Logowanie(); 


function Logowanie()
{
    
    $login = $_SESSION['login'];
    $pass = $_SESSION['pass'];
    if (isset($_POST['login_email']) && isset($_POST['login_pass'])) {
        if ($_POST['login_email'] == $login && $_POST['login_pass'] == $pass) {
            $_SESSION['logged_in'] = true;
            ListaPodstron();
        } else {
            echo "Błąd logowania. Spróbuj ponownie.<br>";
            echo FormularzLogowania();
            
        }
    } else {
        if (!$_SESSION['logged_in']) {
            echo FormularzLogowania();
        } else {
            ListaPodstron();
        }
    }
}


function ListaPodstron()
{
    $link = $_SESSION['link'];
    $query = "SELECT * FROM page_list ORDER BY id LIMIT 10";
    $result = mysqli_query($link, $query);

    while ($row = mysqli_fetch_array($result)) {
        echo $row['id'] . ' ' . $row['page_title'] . '
        <form method="post" action="'.$_SERVER['PHP_SELF'].'">
        <button onclick="UsunPodstrone(' . $row['id'] . ')">Usuń</button>
        <input type="submit" value="Edytuj" name="edit"> <br/><br/>
        </form>';
    }
}


function EdytujPodstrone($id){
    $link = $_SESSION['link'];
    $sql = "SELECT * FROM page_list WHERE id = $id LIMIT 1";
    $result = mysqli_query($link, $sql);
    $page = mysqli_fetch_array($result);

    echo '
    <form method="post">
    <input type="hidden" name="id" value="' . $page['id'] . '">
    Tytuł: <input type="text" name="title" value="' . $page['page_title'] . '"><br>
    Treść: <textarea name="content">' . $page['page_content'] . '</textarea><br>
    Aktywna: <input type="checkbox" name="status"';
    if ($page['status'] == 1) {
        echo 'checked';
    }
    echo '<input type="submit" value="Zapisz zmiany">
    </form>';
}


if(isset($_POST['submit']))
{
    EdytujPodstrone('1');
}


function UsunPodstrone($id) {
    $link = $_SESSION['link'];
    if(isset($_SESSION['logged_in'])) {
        $sql = "DELETE FROM pages WHERE id = $id";
        mysqli_query($link, $sql);
        echo "Podstrona usunięta";
    } else {
        echo "Nie jesteś zalogowany. <a href='admin.php'>Zaloguj</a>";
    }
}


?>
