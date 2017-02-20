<?php
    /**
     * Created by PhpStorm.
     * User: scott
     * Date: 2/19/17
     * Time: 7:27 PM
     */

    $post_data = $_POST;

    $words = array(
        "word", "letter", "number", "person", "pen", "class", "people",
        "sound", "water", "side", "place", "man", "men", "woman", "women",
        "boy", "girl", "year", "day", "week", "month", "name", "sentence",
        "line", "air", "land", "home", "hand", "house", "picture", "animal",
        "mother", "father", "brother", "sister", "world", "head", "page",
        "country", "question", "answer", "school", "plant", "food", "sun",
        "state", "eye", "city", "tree", "farm", "story", "sea", "night",
        "day", "life", "north", "south", "east", "west", "child", "children",
        "example", "paper", "music", "river", "car", "foot", "feet", "book",
        "science", "room", "friend", "idea", "fish", "mountain", "horse",
        "watch", "color", "face", "wood", "list", "bird", "body", "dog",
        "family", "song", "door", "product", "wind", "ship", "area",
        "rock", "order", "fire", "problem", "piece", "top", "bottom",
        "king", "space");

    $base_pass = null;

    foreach (range(0, $post_data['numWords']) as $i) {
        $rand_key = array_rand($words, 1);
        if($i==0) {
            $base_pass = $base_pass . $words[$rand_key];
        }
        else{
            $base_pass = $base_pass . "_" . $words[$rand_key];
        }
    }

    $password = $base_pass;

    if ($post_data['numIncludeChecked']){
        $password = $password.$post_data['numIncluded'];
    }

    if ($post_data['symbolIncludeChecked']){
        $password = $password.$post_data['symbolIncluded'];
    }

    echo "Your password: ".$password;

?>