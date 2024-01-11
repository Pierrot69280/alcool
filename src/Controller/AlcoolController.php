<?php

namespace App\Controller;

use App\Entity\Alcool;
use App\Repository\AlcoolRepository;
use Core\Controller\Controller;
use Core\Http\Response;

class AlcoolController extends Controller
{

    public function index():Response{

        $alcoolRepo = new AlcoolRepository();
        $alcools = $alcoolRepo->findAll();





        return $this->render("alcool/index", [
            "alcools" => $alcools,
            "titleName" => "Mes bons alcools à moi"
        ]);
    }

    public function show():Response{

        if (isset($_GET['id']) && ctype_digit($_GET['id'])){
            $id = $_GET['id'];
        }else{
            return $this->redirect();
        }


        $alcoolRepo = new AlcoolRepository();
        $alcool = $alcoolRepo->find($id);

        return $this->render("alcool/show",[
            "alcool" =>$alcool,
            "titleName"=>"Mon alcool"
        ]);

    }


    public function delete():Response{
        if (isset($_GET['id']) && ctype_digit($_GET['id'])){
            $id = $_GET['id'];
        }else{
            return $this->redirect();
        }
        $alcoolRepo = new AlcoolRepository();
        $alcool = $alcoolRepo->delete($id);

        return $this->redirect("?type=alcool&action=index");


    }
    public function create():Response
    {
        $name =null;
        $description =null;
        $degree =null;

        if(!empty($_POST['name'])){$name = $_POST['name'];}
        if(!empty($_POST['description'])){$description = $_POST['description'];}
        if(!empty($_POST['degree'])){$degree = $_POST['degree'];}

        if($name && $description && $degree)
        {
            $alcool = new Alcool();
            $alcool->setName($name);
            $alcool->setDescription($description);
            $alcool->setDegree($degree);

            $sportRepository = new AlcoolRepository();

            $sportRepository->save($alcool);

            return $this->redirect("?type=alcool&action=index");

        }



        return $this->render("alcool/create", []);
    }
    public function edit(){}


}