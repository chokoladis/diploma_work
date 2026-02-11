<?include 'libs/rb.php';
$connect = mysqli_connect('localhost', 'root', '', 'redmouse');
R::setup('mysql:host=localhost; dbname=redmouse', 'root', '');
session_start();
?>