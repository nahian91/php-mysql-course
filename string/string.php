<?php
    // $str = "we love our country";
    //echo strtoupper($str);
    //echo strtolower($str);
    // echo ucfirst($str);
    // echo lcfirst($str);
    //echo ucwords($str);

    // $str = "We Love Our Country. Our Country is Best in this World. hello Country";
    // echo strlen($str);
    // echo str_word_count($str, 1);
    // echo '<pre>';
        // print_r(str_word_count($str, 1));
        // print_r(str_word_count($str, 2));
    // echo '</pre>';


    // $colors = ['red', 'green', 'blue'];

    // $find = ['Our', 'Country', 'Best'];
    // $replace = ['My', 'City', 'Awesome'];

    // echo str_replace($find, $replace, $str);

    // echo '<pre>';
    //     print_r(str_ireplace('GREEN', 'orange', $colors));
    // echo '</pre>';

    // $str = "We Love PHP. We Learning PHP Language";

    // $explode = explode(' ', $str, -3);

    // echo '<pre>';
    //     print_r($explode);
    // echo '</pre>';

    // $array = array('Red', 'Green', 'Blue', 'Orange');

    // $implode = implode('<br/>', $array);
    
    // echo '<pre>';
    //     print_r($implode);
    // echo '</pre>';

    // $str = "<h1>We Love PHP <b>very</b> <i>much.</i></h1>";

    // echo strip_tags($str, '<h1>, <i>');

    // $str = "We Love Our Country";
    // echo wordwrap($str, 2, '<br/>', true);

    // $str = "We Love Our Country";

    // // $arr = str_split($str, 3);

    // // echo '<pre>';
    // //     print_r($arr);
    // // echo '</pre>';

    // echo chunk_split($str, 2, '///');

    
    // $str = "We love our Country. best Country in this world";

    // echo strpos($str, 'Country').'<br/>';
    // echo strrpos($str, 'Country').'<br/>';

    // echo stripos($str, 'countrY').'<br/>';
    // echo strripos($str, 'country');

    // $str = "We love our country";
    // echo substr($str, -10, -4);
    
    $str = '&lt;a href=&quot;https://www.anahian.com&quot;&gt; anahian.com&lt;/a&gt;';

    //echo html_entity_decode($str); 

    $str1 = '<a href="https://www.anahian.com"> anahian.com</a>';
    // echo htmlentities($str); 

    $str2 = "This is some &lt;b&gt;bold&lt;/b&gt; text.";

    // echo htmlspecialchars_decode($str2);

    $str3 = "This is some <b><i>Bold</i></b> text";
    echo htmlspecialchars($str3);


?>