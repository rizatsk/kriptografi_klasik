<?php
function enkripsi($data) {
    $data = strtolower($data);
    $find = array("a","b","c","d","e","f","g","h","i","j","k","l"
            ,"m","n","o","p","q","r","s","t","u","v","w","x","y","z"
            ,"1","2","3","4","5","6","7","8","9","0"," ");

    $replace =   array("~","!","@","#","$","%","^","&","*","(",")","_","-",
            "+","=","|","}","{","[","]",";",":","?",">",".","<"
            ,"hj", "qk", "gd", "tq", "bo", "mn", "yt", "lm", "jq", "rz","op");

    $result = str_replace($find, $replace, $data);
    return $result;
}

function dekripsi($data) {
    $data = strtolower($data);
    $replace = array("a","b","c","d","e","f","g","h","i","j","k","l"
                ,"m","n","o","p","q","r","s","t","u","v","w","x","y","z"
                ,"1","2","3","4","5","6","7","8","9","0"," ");
                
    $find =  array("~","!","@","#","$","%","^","&","*","(",")","_","-"
            ,"+","=","|","}","{","[","]",";",":","?",">",".","<"
            ,"hj", "qk", "gd", "tq", "bo", "mn", "yt", "lm", "jq", "rz", "op");

    $result = str_replace($find, $replace, $data);
    return $result;
}

?>