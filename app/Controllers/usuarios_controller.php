<?php
namespace App\Controllers;
Use App\Models\usuarios_model;
Use CodeIgniter\Controller;

class usuarios_controller extends Controller {
    public function __construct(){
    helper(['form', 'url']);
    }

    public function create () {

        $dato['titulo']='Registro';
        echo view('front/head_view',$dato);
        echo view('front/navbar_view');
        echo view('back/usuario/registro');
        echo view('front/footer_view');
    }

    public function formvalidation () {
        $imput = $this->validate([
            'nombre'        => 'required|min_length[3]',
            'apellido'      => 'required|min_length[3]|max_length[25]',
            'direccion'     => 'required|min_length[3]|max_length[70]',
            'codigo_postal' => 'required|min_length[3]|max_length[10]',
            'telefono'      => 'required|min_length[3]|max_length[15]',
            'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'pass'          => 'required|min_length[3]|max_length[20]',
        ],
    );
    
    $formModel = new usuarios_model();

    if (!$imput) {
        $data['titulo']='registro';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('back/usuario/registro', ['validation' => $this->validator]);
        echo view('front/footer_view');
    
    } else {
        $formModel->save([
            'nombre'        => $this->request->getvar('nombre'),
            'apellido'      => $this->request->getvar('apellido'),
            'direccion'     => $this->request->getvar('direccion'),
            'codigo_postal' => $this->request->getvar('codigo_postal'),
            'telefono'      => $this->request->getvar('telefono'),
            'email'         => $this->request->getvar('email'),
            'pass'          => password_hash($this->request->getvar('pass'), PASSWORD_DEFAULT)
            // password_hash () crea un nuevo hash de contraseña usando un algoritmo de hash de unico sentido, es decir encripta las contraseñas.
        ]);

        //flashdata funciona solo en redirigir la funcion en el controlador en la vista de carga, es decir que te redirige al terminar el registro a una parte de la pagina.
            session()->setflashdata('msg','Usuario registrado con exito');
            return $this->response->redirect('/login');
        }
    }
}
