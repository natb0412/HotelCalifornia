<?php
//inkludering av filer
session_start();
require_once '../config/database.php';
require_once '../Include/functions.php';

//henter brukernavn og passord fra skjema
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
$username = $_POST['username'];
$password = $_POST['password'];

//koble til database, lager sql query med gitt brukernavn
$conn = getDbConnection();
$stmt = $conn->prepare("SELECT id, passord, brukertype FROM brukere WHERE brukernavn = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

    if($user = $result->fetch_assoc()) //sjekker om brukernavn samsvarer med et i databasen
    {
        //sjekker gitt passord, mot passord-hashen i databasen
        if (password_verify($password, $user['password']))
        //Hvis vellykket, sett session variabler for bruker og brukertype
        {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_type'] = $user['user_type'];
            echo "Innlogging vellykket, Velkommen!";
        }
        else
        {
            echo "Feil passord!"; //ved feil passord, duh!
        }
    }
    else
    {
        echo "Bruker ikke funnet!"; //Hvis brukernavn ikke finnes i database, duh!
    }

$stmt->close();
$conn->close();


}
?>