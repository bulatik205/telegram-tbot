<?php
function generateConfig($appName, $appToken, $appAdmin): string
{
    $config = "<?php\n";
    $config .= "# Configuration for you app\n";
    $config .= "\$appName = \"$appName\";\n";
    $config .= "\$appToken = \"$appToken\";\n";
    $config .= "\$appAdmin = \"$appAdmin\";\n\n";
    $config .= "\$database_username = \"root\"; # Edit, if need\n";
    $config .= "\$database_password = \"\"; # Edit, if need\n";
    $config .= "\$database_host = \"localhost\"; # Edit, if need\n";
    $config .= "\$database_database = \"main\"; # Edit, if need\n";
    $config .= "#\$main_pdo = new PDO(\n";
    $config .= "#    \"mysql:host=\$database_host;dbname=\$database_database;charset=utf8mb4\",\n";
    $config .= "#    \$database_username,\n";
    $config .= "#    \$database_password,\n";
    $config .= "#    [\n";
    $config .= "#        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,\n";
    $config .= "#        PDO::ATTR_EMULATE_PREPARES => true,\n";
    $config .= "#        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC\n";
    $config .= "#    ]\n";
    $config .= "#);\n";
    $config .= "?>";

    return $config;
}