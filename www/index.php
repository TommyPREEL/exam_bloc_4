<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

include("config.php");

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

if ($page === 'login') {
    include("login.php");
} elseif ($page === 'books') {
    include("books.php");
} elseif ($page === 'new_loan') {
    include("new_loan.php");
} elseif ($page === 'loan') {
    include("loan.php");
} else {
    include("home.php");
}

include("footer.php");
?>
