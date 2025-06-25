<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='Pagina Principal';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/footer_view');
    }
    public function principal()
    {
        $data['titulo']='Pagina Principal';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/footer_view');
    }
    public function acerca_de()
    {
        $data['titulo']='Acerca de';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/acerca_de');
        echo view('front/footer_view');
    }
    public function quienes_somos()
    {
        $data['titulo']='Quienes Somos';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/quienes_somos');
        echo view('front/footer_view');
    }
    public function registro()
    {
        $data['titulo']='Registro Usuario';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('back/usuario/registro');
        echo view('front/footer_view');
    }
    public function login()
    {
        $data['titulo']='Login usuario';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer_view');
    }
    public function contacto()
    {
        $data['titulo']='Contacto';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/contacto');
        echo view('front/footer_view');
    }
    public function soporte()
    {
        $data['titulo']='Soporte';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/soporte');
        echo view('front/footer_view');
    }
        public function catalogo()
    {
        $data['titulo']='Catalogo';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/catalogo');
        echo view('front/footer_view');
    }
        public function preguntas_frecuentes()
    {
        $data['titulo']='Preguntas Frecuentes';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/preguntas_frecuentes');
        echo view('front/footer_view');
    }
        public function editar()
    {
        $data['titulo']='Preguntas Frecuentes';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('back/usuario/editar');
        echo view('front/footer_view');
    }
    public function usuario_logueado()
    {
        $data['titulo']='Preguntas Frecuentes';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('back/usuario/usuario_logueado');
        echo view('front/footer_view');
    }
}
