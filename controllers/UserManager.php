<?php

class UserManager extends AbstractManager {

    public function getAllUsers() : array
    {
        // get all the users from the database
         $query = $this->db->prepare("SELECT * FROM users");
         $query-> execute();
         $getAllUsers = $query->fetch(PDO::FETCH_ASSOC);
         $userTabl= [];
         foreach (getAllUsers as user){
             
         }
         return $userTabl;
    }

    public function getUserById(int $id) : User
    {
        // get the user with $id from the database
    }

    public function createUser(User $user) : User
    {
        // create the user from the database

        // return it with its id
    }

    public function updateUser(User $user) : User
    {
        // update the user in the database

        // return it
    }

    public function deleteUser(User $user) : array
    {
        // delete the user from the database

        // return the full list of users
    }
}