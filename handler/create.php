<?php
if (file_exists('bot') && is_dir('bot')) {
    echo("\033[31m>> Directory /bot/ already created. Please, delete directory /bot/ and try.\033[0m");
    exit;
}

if (!mkdir('bot', 0755)) {
    echo("\033[31>> Directory /bot/ don`t created.\033[0m");
    exit;
} else {
    echo("\033[32m>> Directory /bot/ success created.\033[0m\n");
}