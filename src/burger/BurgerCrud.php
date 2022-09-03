<?php

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

        $order['order'] = 1;
        $prepare->execute($order);

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

    public function createTableIfNotExists()
    {
        return $this->instance
            ->dbh()
            ->query(
                "CREATE TABLE `orders` (
                    `id` bigint(20) NOT NULL AUTO_INCREMENT,
                    `order` bigint(20) NOT NULL,
                    `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                    `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                    `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                    `street` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                    PRIMARY KEY (`id`)
                  ) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;"
            );
    }
}
