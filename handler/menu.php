<?php
if (count($argv) == 1) {
    echo ("\033[1;36m Welcome to tbot! \033[0m\n\n");
    echo ("\033[35m Documntation: \n");
    echo ("\033[36m Developer: bulatik205 \n\n");
    echo ("\033[1;3;37m Send command: >> \033[0m \033[1;32m php tbot make \033[1;3;37m << for start \033[0m");
}

if (isset($argv[1]) && $argv[1] == "make") {
    require_once "create.php";
    require_once "bot/fileput.php";
}