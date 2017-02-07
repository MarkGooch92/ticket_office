<?php

class User {

    private $user_id = null;
    public $forename = null;
    public $surname = null;
    public $email = null;
    public $password = null;


    function  __construct($user_id) {
        $this->user_id = $user_id;
        $return_value = $this->populate_user_from_db();
        echo $return_value;
    }

    private function populate_user_from_db() {
        //code to populate from db goes here
        return 'xdgudgos';

    }

    function __create_user($forename, $surname, $email, $password) {
        //code to insert to db goes here
        $this->populate_user_from_db();
    }

    private function update_user($attribute, $value) {
        //code to update db goes here
        return true;
    }

    public function destroy_user() {
        //code to destroy in db goes here
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function getForename()
    {
        return $this->forename;
    }

    public function setForename($forename)
    {
        $this->update_user('forename', $forename);
        $this->forename = $forename;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
        $this->update_user('surname', $surname);
        $this->surname = $surname;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->update_user('email', $email);
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->update_user('password', $password);
        $this->password = $password;
    }






}
