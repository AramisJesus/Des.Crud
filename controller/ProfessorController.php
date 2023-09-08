<?php
require_once $_SERVER ['DOCUMENT_ROOT'] .'/'. FOLDER . '/model/ProfessorModel.php';

Class ProfessorController {
    const CONTROLLER_FOLDER = '/professor';

    public function listar () {
        //instanciar a model
        //chamar o metodo listar na model
        $professorModel = new ProfessorModel();
        $listaProfessores= $professorModel ->listar();
        $_REQUEST ['professores'] = $listaProfessores;
      
        require_once $_SERVER ['DOCUMENT_ROOT'] . '/' . FOLDER .'/view' . self::CONTROLLER_FOLDER . '/listarProfessorView.php';
    }

    public function salvar() 
    {
        if($_SERVER['REQUEST_METHOD']== 'GET') {
            require_once $_SERVER['DOCUMENT_ROOT']. '/' . FOLDER .'/view'. self::CONTROLLER_FOLDER .'/ProfessorForm.php';
        } elseif ($_SERVER['REQUEST_METHOD']== 'POST') {
            $nome = $_POST ['nome'];
            $idade =$_POST ['idade'];

            $professorModel = new ProfessorModel();
            $professorModel ->salvarModel($nome,$idade);

            header('Location: http://localhost:/' . FOLDER .'/?controller=Professor&acao=listar');
            exit();

        }

       

       
    }




}