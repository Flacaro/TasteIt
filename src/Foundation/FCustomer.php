<?php


namespace App\Foundation;


use App\Foundation\admin\FCoupon;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\Favourites;
use App\Models\Order;
use PDO;

class FCustomer extends FConnection {
    function __construct()
    {
        parent::__construct('customers', 'Customer');
    }

    public function getUserFromReview($reviewId){
        //select
    }
    //exist ma con un check della password in più
    public function authentication($email, $password){
        $pdo = FConnection::connect();
        $query = "SELECT * FROM customers WHERE email='".$email. "' AND password='".$password."'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $row = $stmt->fetch();
        if($row==NULL) {
            return false;
        }
        else{
            return true;
        }
    }
//load ma con email invece che con id
    public function getByEmail($email){
        $pdo = FConnection::connect();
        $query = "SELECT * FROM customers WHERE email= '".$email."'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $cus=$stmt->fetch();
        $customer= new Customer;
        $cart= new Cart;
        $fav= new Favourites;
        $customer->setId($cus[0]);
        $customer->setName($cus[1]);
        $customer->setSurname($cus[2]);
        $customer->setEmail($cus[3]);
        $customer->setPassword($cus[4]);
        $fav->setId($cus[5]);
        $fcart=new FCart();
        $cart=$fcart->load($cus[6]);
        $customer->setFav($fav);
        $customer->setCart($cart);
        //print_r($cus);
        //$stmt->debugDumpParams();
        return $customer;
    }
//cart e fav vuoti, solo id, se vogliamo i prodotti dobbiamo caricarli
    public function load($id){
        $pdo = FConnection::connect();
        $query = "SELECT * FROM customers WHERE id= ".$id;
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $cus=$stmt->fetch();
        $cart= new Cart;
        $fav= new Favourites;
        $customer= new Customer;
        $customer->setId($cus[0]);
        $customer->setName($cus[1]);
        $customer->setSurname($cus[2]);
        $customer->setEmail($cus[3]);
        $customer->setPassword($cus[4]);
        $fav->setId($cus[5]);
        $cart->setId($cus[6]);
        //$stmt->debugDumpParams();
        return $customer;
    }

    public function exist($email) {
        $pdo = FConnection::connect();
        $query = "SELECT email FROM customers WHERE email='".$email . "'" . " UNION (select email from restaurant where email ='" . $email . "')";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $row = $stmt->fetch();
        if($row==NULL) {
            return false;
        }
        else{
            return true;
        }
    }
    //questa serve in fase di registrazione, al customer viene assegnato un carrello vuoto, una lista di preferiti vuota, non ha nessun ordine inserire in db, in NESSUN altro punto del
    //sito dobbiamo poter dare la possibilità al customer inserirsi nel db (quindi non avremo mai bisogno di fare store ad un customer che ha già ordini/prodotti nel carrello etc...)
    public function store($customer){
        $pdo = FConnection::connect();
        $name=$customer->getName();
        $surname=$customer->getSurname();
        $email=$customer->getEmail();
        $password=$customer->getPassword();
        $cart= new Cart;
        $fcart=new FCart;
        $c=$fcart->store($cart);
        $fav= new Favourites;
        $ffav=new FFavourites();
        $f=$ffav->store($fav);
        $query='insert into `customers`(`name`, `surname`, `email`, `password`, `favId`, `cartId`) VALUES (\''. $name .'\',\''.$surname.'\',\''.$email.'\',\''.$password.'\','.$f.','.$c.')';
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        //$stmt->debugDumpParams();
    }

//l'update del customer si limita a email, password, nome, cognome, per quanto riguarda il carrello, i preferiti, le carte di credito etc usiamo i foundation specifici
//(altrimenti rischiamo di svuotare il db se ad esempio abbiamo un oggetto cliente di cui in quel momento non ci interessa il carrello, settandoglielo a null)
    public function update($customer){
        $pdo = FConnection::connect();
        $id=$customer->getId();
        $name=$customer->getName();
        $surname=$customer->getSurname();
        $email=$customer->getEmail();
        $password=$customer->getPassword();
        $query="UPDATE `customers` SET `name`='.$name.',`surname`='.$surname.',`email`='.$email.',`password`='.$password.' WHERE id=".$id;
        $stmt = $pdo->prepare($query);
        $stmt->execute();
    }
//devo cancellare anche tutte le cose relative al cliente (gli ordini rimarrebbero senza un cliente??)
    /*public function delete($id){
        $pdo = FConnection::connect();
        $query="delete from customers where id=".$id;
        $stmt = $pdo->prepare($query);
        $stmt->execute();
    }*/

    //serve per visualizzare la lista degli ordini dell'utente (per vedere i prodotti richiamiamo una funzione a parte quando clicchi sull'ordine specifico)
    public function getCustomerOrders($id){
        $pdo = FConnection::connect();
        $query= "select * from orders where customerId=".$id;
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $orders = $stmt->fetchAll();
        $o=[];
        $fcoupon=new FCoupon();
        $fpayment=new FPaymentMethod();
        $faddress=new FAddress();
        foreach ($orders as $order){
            $ord=new Order;
            $ord->setId($order[0]);
            $ord->setCreationDate($order[1]);
            $ord->setTotal($order[2]);
            $ord->setArrivalTime($order[3]);
            $ord->setCoupon($fcoupon->load($order[4]));
            $ord->setCustomerId($order[5]);
            $ord->setPayment($fpayment->load($order[6]));
            $ord->setState($order[7]);
            $ord->setAddress($faddress->load($order[8]));
            array_push($o, $ord);
        }
        print_r($o);
        return $o;
    }

    public function loadNameSurname($id){
        $pdo = FConnection::connect();
        $query = 'select name, surname from customers where id='.$id;
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $cus = $stmt->fetch();
        $customer=new Customer;
        $customer->setId($id);
        $customer->setName($cus[0]);
        $customer->setSurname($cus[1]);
        return $customer;
    }

    public function getAll(){
        $pdo = FConnection::connect();
        $query= "SELECT * FROM customers";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $custs = $stmt->fetchAll();
        //$stmt->debugDumpParams();
        $customers = [];
        print_r($custs);
        foreach ($custs as $cust) {
            $c = new Customer();
            $cart = new FCart();
            $fav = new FFavourites();
            $c->setId($cust[0]);
            $c->setName($cust[1]);
            $c->setSurname($cust[2]);
            $c->setEmail($cust[3]);
            $c->setFav($fav->load($cust[5]));
            $c->setCart($cart->load($cust[6]));
            array_push($customers, $c);
        }
        print_r($customers);
        return $customers;
    }
}