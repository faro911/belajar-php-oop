<?php
    
    class SocialMedia
    {
        public string $name;
    }

    // final class Facebook extends SocialMedia
    // {

    // }

    // class FakeFacebook extends Facebook // ini akan error karena turunan sudah berhenti di final classs facebook
    // {

    // }

    class Facebook extends SocialMedia
    {
        final public function login(string $username, string $password) : bool
        {
            return true;
        }
    }
    class FakeFacebook extends Facebook
    {
        //ini akan error mesikpun di overide karena function login sudah menggunakan metode final function
        public function login(string $username, string $password) : bool
        {
            return false;
        }
    }

?>