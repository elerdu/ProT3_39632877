<?php
namespace App\Controllers;
use App\Models\usuarios_model;
use CodeIgniter\Controller;

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

    public function formvalidation()
{
    $imput = $this->validate([
        'nombre'        => 'required|min_length[3]',
        'apellido'      => 'required|min_length[3]|max_length[25]',
        'direccion'     => 'required|min_length[3]|max_length[70]',
        'codigo_postal' => 'required|min_length[3]|max_length[10]',
        'telefono'      => 'required|min_length[3]|max_length[15]',
        'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
        'pass'          => 'required|min_length[3]|max_length[20]',
    ]);

    $formModel = new usuarios_model();

    if (!$imput) {
        $data['titulo'] = 'registro';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/registro', ['validation' => $this->validator]);
        echo view('front/footer_view');
    } else {
        $formModel->save([
            'nombre'        => $this->request->getVar('nombre'),
            'apellido'      => $this->request->getVar('apellido'),
            'direccion'     => $this->request->getVar('direccion'),
            'codigo_postal' => $this->request->getVar('codigo_postal'),
            'telefono'      => $this->request->getVar('telefono'),
            'email'         => $this->request->getVar('email'),
            'pass'          => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
        ]);

        session()->setFlashdata('msg', 'Usuario registrado con éxito');
        return $this->response->redirect('/registro');
    }
}

public function listar()
{
    if (session()->get('perfil_id') != 1) {
        return redirect()->to('/')->with('msg', 'Acceso denegado');
    }

    $model = new usuarios_model();
    $data['usuarios'] = $model->where('baja', 'NO')->findAll();
    $data['titulo'] = 'Panel de administración';
    
    echo view('front/head_view', $data);
    echo view('front/navbar_view');
    echo view('back/usuario/usuario_logueado', $data);
    echo view('front/footer_view');
}

public function editar($id = null)
{
    if (session()->get('perfil_id') != 1) {
        return redirect()->to('/')->with('msg', 'Acceso denegado');
    }

    $model = new usuarios_model();
    $usuario = $model->find($id);

    if (!$usuario) {
        return redirect()->to('/usuarios/listar')->with('msg', 'Usuario no encontrado');
    }

    $data['titulo'] = 'Editar Usuario';
    $data['usuario'] = $usuario;

    echo view('front/head_view', $data);
    echo view('front/navbar_view');
    echo view('back/usuario/editar', $data);
    echo view('front/footer_view');
}

public function actualizar($id = null)
{
    if (session()->get('perfil_id') != 1) {
        return redirect()->to('/')->with('msg', 'Acceso denegado');
    }

    $model = new usuarios_model();

    $data = [
        'nombre'        => $this->request->getVar('nombre'),
        'apellido'      => $this->request->getVar('apellido'),
        'email'         => $this->request->getVar('email'),
        'telefono'      => $this->request->getVar('telefono'),
        'direccion'     => $this->request->getVar('direccion'),
        'codigo_postal' => $this->request->getVar('codigo_postal'),
    ];

    $model->update($id, $data);

    return redirect()->to('/usuarios/listar')->with('msg', 'Usuario actualizado con éxito');
}

public function eliminar($id = null)
{
    if (session()->get('perfil_id') != 1) {
        return redirect()->to('/')->with('msg', 'Acceso denegado');
    }

    $model = new usuarios_model();

    // Verificamos si el usuario existe
    $usuario = $model->find($id);
    if (!$usuario) {
        return redirect()->to('/usuarios/listar')->with('msg', 'Usuario no encontrado');
    }

    // Actualizamos el campo baja a 'SI'
    $model->update($id, ['baja' => 'SI']);

    return redirect()->to('/usuarios/listar')->with('msg', 'Usuario eliminado correctamente');
}
}