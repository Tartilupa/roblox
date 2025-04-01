<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ime = htmlspecialchars($_POST["ime"]);
    $email = htmlspecialchars($_POST["email"]);

    $to = "lenartlindic27@gmail.com"; // Tvoj email
    $subject = "Nova prošnja za registracijo";
    $message = "Ime: $ime\nEmail: $email\n\nPreveri uporabnika in odobri dostop.";
    $headers = "From: noreply@tvojadomena.com";

    if (mail($to, $subject, $message, $headers)) {
        http_response_code(200);
        echo "Uspešno poslano!";
    } else {
        http_response_code(500);
        echo "Napaka pri pošiljanju!";
    }
}
?>
