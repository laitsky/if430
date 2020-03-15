<?php
$dbname = "ushop";
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if($conn->connect_error) die("Tidak dapat terhubung dengan database!");


function sanitize_string($var)
{
    global $conn;
    $var = strip_tags($var);
    $var = htmlentities($var);
    if (get_magic_quotes_gpc())
        $var = stripslashes($var);
    return $conn->real_escape_string($var);
}

function sql_query($query)
{
    global $conn;
    $res = $conn->query($query);
    if (!$res) die("Query tidak valid!");
    return $res;
}

function destroy_session()
{
    $_SESSION = array();

    if (session_id() != "" || isset($_COOKIE[session_name()]))
        setcookie(session_name(), '', time() - 2592000, '/');
}
