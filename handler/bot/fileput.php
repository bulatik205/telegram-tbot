<?php
require_once 'app.php';

$botDir = __DIR__ . '/../../bot/';
$currentDir = __DIR__ . '/';

function configCreate($botDir, $appName, $appToken, $appAdmin): void
{
    if (!mkdir($botDir . "config/", 0755)) {
        echo ("\033[31>> Directory /bot/config/ don`t created.\033[0m");
        exit;
    } else {
        echo ("\033[32m>> Directory /bot/config/ success created.\033[0m\n");

        require_once "config.php";
        $config = generateConfig($appName, $appToken, $appAdmin);

        if (!file_put_contents($botDir . "config/config.php", $config)) {
            echo ("\033[31>> File /bot/config/config.php don`t created.\033[0m");
            exit;
        } else {
            echo ("\033[32m>> File /bot/config/config.php success created.\033[0m\n");
        }
    }
}

function indexCreate($botDir): void
{
    require_once "index.php";
    $index = generateIndex();

    if (!file_put_contents($botDir . "index.php", $index)) {
        echo ("\033[31>> File /bot/index.php don`t created.\033[0m");
        exit;
    } else {
        echo ("\033[32m>> File /bot/index.php success created.\033[0m\n");
    }
}

function copyWebhook($botDir, $currentDir): void
{
    $sourceFile = $currentDir . "webhook.php";
    $destFile = $botDir . "config/webhook.php";
    if (!copy($sourceFile, $destFile)) {
        echo ("\033[31m>> File config/webhook.php don`t created.\033[0m\n");
        exit;
    } else {
        echo ("\033[32m>> File config/webhook.php success created.\033[0m\n");
    }
}

configCreate($botDir, $appName, $appToken, $appAdmin);
indexCreate($botDir);
copyWebhook($botDir, $currentDir);