<?php
class Principal extends Controller
{
    public function __construct() {
        parent::__construct();
        session_start();
    }
    
    //vista index
    public function index()
    {
      
    }

    //vista about
    public function about()
    {
        $data['title'] = 'Nuestro equipo';
        $this->views->getView('principal', "about", $data);
    }

     //Shop
     public function shop()
     {
         $data['title'] = 'Nuestros Productos';
         $this->views->getView('principal', "shop", $data);
     }

      //destalles
      public function detail($id_producto)
      {
          $data['title'] = '---------------';
          $this->views->getView('principal', "detail", $data);
      }

       //contacto
       public function contactos()
       {
           $data['title'] = 'Contactos';
           $this->views->getView('principal', "contact", $data);
       }


}