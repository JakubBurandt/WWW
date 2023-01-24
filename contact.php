<?php
function PokazKontakt()
{
    $kontakt = '
    <form action="mailto: jakub.burandt@student.uwm.edu.pl" method="post">
        <div class="mb-3">
            <label for="leInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="InputEmail1" placeholder="name@example.com">
            <div id="emailHelp" class="form-text">We will never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="InputName1" class="form-label">Name</label>
            <input type="Name" class="form-control" id="InputName1">
        </div>
        <div class="mb-3">
            <label for="InputComment1" class="form-label">Comment</label>
            <textarea class="form-control" id="InputComment1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    ';

}

            





function WyslijMailaKontakt($odbiorca)
{
    if (empty($_POST['temat']) || empty($_POST['tresc']) || empty($_POST['email']))
    {
        echo '[nie_wypelniles_pola]';
        echo PokazKontakt();
    }
    else
    {
        $mail['subiect'] = $_POST['temat'];
        $mail['body'] = $_POST['tresc'];
        $mail['sender'] = $_POST['email'];
        $mail['recipient'] = $odbiorca;

        $header = "From: Formularz kontaktowy <"$mail['sender'].">\n";
        $header .= "MIME-Version: 1.0\nContent-Type: text/plain; charset=utf-8\nContent-Transfer-Encoding: 8bit";
        $header .= "X-Sender: <".$mail['sender'].">\n";
        $header .= "X-Mailer: PRapWWW mail 1.2\n";
        $header .= "X-Priority: 3\n";
        $header .= "Return-Path: <".$mail['sender'].">\n";

        mail($mail['reciptient'],$mail['subiect'],$mail['body'],$header);

        echo '[wiadomosc_wyslana]';
    
    }
}
?>