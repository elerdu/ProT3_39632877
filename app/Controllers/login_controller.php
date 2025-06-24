<?php 
namespace App\Controllers;
use App\Models\usuarios_model;
use CodeIgniter\Controller;

class login_controller extends BaseController
{
    public function index ()
    {
        helper(['form', 'url']);

        $dato['titulo']='login';
        echo view('front/head_view', $dato);
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer_view');
    }

public function auth()
{
    $session = session();
    $model = new usuarios_model();

    $email = $this->request->getVar('email');
    $password = $this->request->getVar('pass');

    $data = $model->where('email', $email)->first();

    if ($data) {
        $pass = $data['pass'];
        $ba = $data['baja'];

        if ($ba == 'SI') {
            $session->setFlashdata('msg', 'Usuario dado de baja');
            return redirect()->to('/login');
        }

        if (password_verify($password, $pass)) {
            // Guardar sesión
            $ses_data = [
                'id_usuario'     => $data['id_usuario'],
                'nombre'         => $data['nombre'],
                'apellido'       => $data['apellido'],
                'direccion'      => $data['direccion'],
                'codigo_postal'  => $data['codigo_postal'],
                'telefono'       => $data['telefono'],
                'email'          => $data['email'],
                'perfil_id'      => $data['perfil_id'],
                'logged_in'      => true
            ];
            $session->set($ses_data);
            session()->setFlashdata('msg', '¡¡Bienvenido!!');

            // Redirigir según el perfil
            if ($data['perfil_id'] == 1) {
                return redirect()->to('/usuarios/listar');
            } else {
                return redirect()->to('/panel'); ///cliente/inicio
            }

        } else {
            $session->setFlashdata('msg', 'Contraseña Incorrecta');
            return redirect()->to('/login');
        }

    } else {
        $session->setFlashdata('msg', 'No existe el Email o es Incorrecto');
        return redirect()->to('/login');
    }
}

    //


    public function logout (){
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
