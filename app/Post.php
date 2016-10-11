<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends \Eloquent
{




    static function shortenText($text, $word_count)
    {
        if (str_word_count($text) > $word_count) {
            $words = str_word_count($text, 2);
            $pos = array_keys($words);
            $text = substr($text, 0, $pos[$word_count]) . '...';
        }
        return $text;
    }
}
