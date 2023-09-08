<?php
require_once $_SERVER ['DOCUMENT_ROOT'] .'/'. FOLDER . '/model/EstudanteModel.php';

Class EstudanteController {
    const CONTROLLER_FOLDER = '/estudante';

    public function listar () {
        //instanciar a model
        //chamar o metodo listar na model
        $estudanteModel = new EstudanteModel();
        $listaEstudantes= $estudanteModel ->listar();
        $_REQUEST ['estudantes'] = $listaEstudantes;
      
        require_once $_SERVER ['DOCUMENT_ROOT'] . '/' . FOLDER .'/view' . self::CONTROLLER_FOLDER . '/listarEstudanteView.php';
    }

    public function salvar() 
    {
        if($_SERVER['REQUEST_METHOD']== 'GET') {
            require_once $_SERVER['DOCUMENT_ROOT']. '/' . FOLDER .'/view'. self::CONTROLLER_FOLDER .'/EstudanteForm.php';
        } elseif ($_SERVER['REQUEST_METHOD']== 'POST') {
            $nome = $_POST ['nome'];
            $idade =$_POST ['idade'];

            $estudanteModel = new EstudanteModel();
            $estudanteModel ->salvarModel($nome,$idade);

            header('Location: http://localhost:/' . FOLDER .'/?controller=Estudante&acao=listar');
            exit();

        }

       

       
    }




}