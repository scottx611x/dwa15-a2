<?php

class PasswordGen {

    private $base_pass = null;
    private $post_data = null;
    private $words = null;

    function __construct($data, $filename) {
        /**
         Set POST data, and read words array from file upon class instantiation
         */
        $this->post_data = $data;
        $this->words = file($filename, FILE_IGNORE_NEW_LINES);
    }

    public function makePassword(){
        /**
        Public method to generate an xkcd-like password
         */
        foreach (range(1, $this->post_data['numWords']) as $i)
        {
            $rand_key = array_rand($this->words, 1);
            if ($i==1) {
                $this->base_pass = $this->base_pass . $this->words[$rand_key];
            }
            else{
                $this->base_pass = $this->base_pass . "-" . $this->words[$rand_key];
            }
        }

        $password = $this->base_pass;

        if ($this->post_data['numIncludeChecked'] == "true") {
            $password = $password . $this->post_data['numIncluded'];
        }

        if ($this->post_data['symbolIncludeChecked'] == "true") {
            $password = $password . $this->post_data['symbolIncluded'];
        }

        echo $password;
    }

} # eoc

# Instantiate new PasswordGen class
$pGen = new PasswordGen($_POST, "assets/data/words.txt");

#Run makePassword method
$pGen->makePassword();