<?php

function checkEmail ($mail)
{
    if (str_contains($mail, "@") &&  str_contains($mail, ".")) {

        return'Ti sei iscritto correttamente!';
        
    }else{
        return'Email non corretta';
    };
}

?>