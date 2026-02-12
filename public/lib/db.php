<?

namespace Main;

class DB {
    static private $instance;

    static function getInstance() {
        if (!isset(self::$instance)) {
//            PGSQL
            self::$instance = new self();
        }
    }
}

$connect = mysqli_connect('localhost', 'root', '', 'redmouse');
R::setup('mysql:host=localhost; dbname=redmouse', 'root', '');
session_start();
?>