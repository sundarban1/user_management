<?php
namespace Sundarban\Project\Register;
use Sundarban\Project\Includes\Database;

class Model
{
    public function saveUser($data){

        $firstName = $data['fname'];
        $lastName = $data['lname'];
        $email = $data['email'];
        $password = $data['password'];
        $phone = $data['phone'];
        $profile_image = $data['profile_image'];
        $role = 'user';
        $gender = $data['gender'];
        $created_at = date('Y-m-d H:i:s');
        $updated_at = date('Y-m-d H:i:s');

        $sql = "INSERT INTO users(first_name, last_name, email, password, phone, profile_image, role, gender, created_at, updated_at)
                VALUES ('$firstName', '$lastName', '$email', '$password', '$phone', '$profile_image', '$role', '$gender', '$created_at', '$updated_at')";


        $database = new Database();
        $database->insertRow($sql);
    }
}
