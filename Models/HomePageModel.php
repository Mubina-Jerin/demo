<?php
class HomePageModel extends Model
{
    public function create($userName,$password)
    {
        
        $sql = "INSERT INTO user (userName, password) VALUES (:userName, :password)";
        $req = Database::getBdd()->prepare($sql);
        return $req->execute([
            'userName' => $userName,
            'password' => $password,
             ]);
    }
    public function check_user($userName, $password){

        $sql="SELECT * FROM user WHERE userName= '$userName' AND password= '$password'";
        $req=Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetch();
    }
    public function showUser($id)
    {
        $sql = "SELECT * FROM user WHERE id =" . $id;
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetch();
    }
    public function showAllUsers()
    {
        $sql = "SELECT * FROM user";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }
 
}
?>