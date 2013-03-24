<?php

//kontroler 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Site extends CI_Controller {

    public function index($a=0, $b=0) {

        //$a = 10;
        //$b = 11;
        //wczytanie modelu
        $this->load->model('math');

        date_default_timezone_set('Europe/Warsaw');
        $data['title'] = 'Zegar';
        $data['time'] = date(DATE_ATOM, time());

        $data['a'] = $a;
        $data['b'] = $b;
        $data['sum'] = $this->math->add($a, $b);
        $data['dif'] = $this->math->sub($a, $b);

        $this->load->view("home", $data);


        // To bylo na poczatku
        // echo "<h2>Hellow_world</h2>";
        // echo "</br>";
        // $this->hello();
        // echo "</br>";
        // $this->load->model("math");
        // echo $this->math->add(2, 2);
    }

    public function hello($name ='anonymous') {
        echo "Funkcja Hello", $name;
        //żeby sie pokazala to link http://localhost:8080/Tutorial/index.php/site/hello   na koncu nazwa funkcji
    }

    //link http://localhost:8080/Tutorial/index.php/site/about
    public function about() {
        $this->load->view("view_about", array(
            //klucz => 'wartosc'
            'title' => 'O autorze',
            'x' => 'xx',
            'y' => 'yy'
        ));
    }

    public function persons() {
        $this->load->model("person");

        $this->load->view("view_persons", array(
        'title' => 'Lista osób',
        'persons' => $this->person->getAll()
        ));
    }

}

?>
