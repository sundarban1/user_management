<?php
namespace Sundarban\Project\Register;
class Controller
{
    public function index(){




        if(isset($_POST['Register'])) {



            $data = $_POST;

            if(isset($_FILES)){
                $image_file = $_FILES['Upload'];


                $targetDirectory = 'src/uploads/';
                move_uploaded_file(
                // Temp image location
                    $image_file["tmp_name"],

                    // New image location
                   "src/uploads/" . $image_file["name"]
                );

            }

            $data['profile_image'] = isset($image_file) ? $image_file['name']:"";

            $registerModel = new Model();
            $registerModel->saveUser($data);



        }



        $view = 'src/Register/view.html.php';
        include 'src/Template/template.php';
    }

}
