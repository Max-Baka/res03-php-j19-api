<?php

class UserController extends AbstractController {
    private UserManager $um;

    public function __construct()
    {
        $this->um = new UserManager();
    }

    public function getUsers()
    {
        // get all the users from the manager
        $user=$this->um->getAllUsers();
        // render
        $usersTabl[];
        foreach($users as $user){
            $userTabl=$user ->toArray();
            $userTabl[]=$userTabl;
            }
            $this->render($userTabl);

    public function getUser(string $get)
    {   $email = intval($get);
        // get the user from the manager
        $user = $this->um->getUserByEmail($email);
        $userTabl = $user->toArray();
        // either by email or by id
        $this->render($userTabl);
        // render
    }

    public function createUser(array $post)
    {
        $newUser =  new User($post["username"],$post["lastName"],$post["lastName"],$post["email"]);
        $createUser = this->um->createUser($newUser);
        $createUserTabl = $createUser->toArray();
        // create the user in the manager
        $this->render($createUserTab);
        // render the created user
    }

    public function updateUser(array $post)
    {
        // update the user in the manager
        $newUser =  new User($post["username"],$post["lastName"],$post["lastName"],$post["email"]);
        $updateUser = $this->um->updateUser($newuser);
        $updateUserTabl = $updateUser-> toArray();
        // render the updated user
        $this->render($updateUserTabl);
    }

    public function deleteUser(array $post)
    {
        // delete the user in the manager
        $deleteUser = new User(null["username"],null["lastName"],null["lastName"],null["email"]);
        $deleteUser = $this->um->deleteUser($deleteUser);
        $deleteUserTabl = $deleteUser->toArray();
        // render the list of all users
        $this->render($deleteUserTabl);
    }
}