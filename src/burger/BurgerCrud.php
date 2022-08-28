 <?php

 require_once 'BurgerSingleton.php';

 class BurgerCrud
 {
    private $instance;

    public function __construct()
    {
        $this->instance = BurgerSingleton::getInstance();
    }

    public function create($order)
    {        
        $prepare = $this->instance
            ->dbh()
            ->prepare("
                insert into orders (`order`, `name`, `email`, `phone`, `street`)
                values (:order,:name,:email,:phone,:street)
            ");

        $prepare->execute([
            'order' => 1,
            'name' => $order['name'],
            'email' => $order['email'],
            'phone' => $order['phone'],
            'street' => $order['street'],
        ]);

        return $this->read($order['email']);
    }

    public function read($email)
    {
        $prepare = $this->instance
            ->dbh()
            ->prepare("select * from orders where `email` = ?");

        $prepare->execute([$email]);

        return $prepare->fetch(PDO::FETCH_ASSOC);
    }

    public function update($order, $id)
    {
        $prepare = $this->instance
            ->dbh()
            ->prepare("update orders set `order` = ? where `id` = ?");

        return $prepare->execute([$order, $id]);
    }

    public function delete($id)
    {
        $prepare = $this->instance
            ->dbh()
            ->prepare("delete from orders where id = ?");

        return $prepare->execute([$id]);
    }
 }
