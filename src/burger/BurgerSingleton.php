 <?php
use PDO;

class BurgerSingleton
{
    private static $instance = null;
    const USER = '###';
    const PASS = '###';
    private $dbh;

    private function __construct()
    {
        $this->dbh = new PDO('mysql:host=localhost;dbname=3-2', self::USER, self::PASS);
    }

    public function dbh()
    {
        return $this->dbh;
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self;
        }

        return self::$instance;
    }
}
