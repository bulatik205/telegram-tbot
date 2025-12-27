<?php
function getApp($name) : string {
    $returnString = "";
    $whileStatus = true;

    while ($whileStatus) {
        echo ("\033[37m>> Send " . $name . ": \033[0m\n");
        $returnString = trim(fgets(STDIN));

        if ($returnString == "") {
            echo ("\033[31m>> You send empty, please send " . $name . "\033[0m\n");
            continue;
        }

        break;
    }

    return $returnString;
}

function getToken($name) : string {
    $returnString = "";
    $whileStatus = true;

    while ($whileStatus) {
        echo ("\033[37m>> Send " . $name . ": \033[0m\n");
        $returnString = trim(fgets(STDIN));

        if ($returnString == "") {
            echo ("\033[31m>> You send empty, please send " . $name . "\033[0m\n");
            continue;
        }

        echo ("\033[33m>> " . $name . " >> \033[35m" . $returnString . "\033[33m << ? If yes, send [Y], else [N]. Other input equal [N]\033[0m\n");
        $status = trim(fgets(STDIN));

        if ($status == "Y") break;
    }

    return $returnString;
}

$appToken = getToken("Telegram Bot API Token");
$appName = getApp("App name");
$appAdmin = getApp("Telegram-account admin link");