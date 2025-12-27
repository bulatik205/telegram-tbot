<?php
function generateIndex(): string
{
    $index = "<?php\n";
    $index .= "require 'config/config.php';\n";
    $index .= "\$update = json_decode(file_get_contents('php://input'), true);\n";
    $index .= "\$json_response = json_encode(\$update, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);\n";
    $index .= "function sendAPI(\$data, \$url)\n";
    $index .= "{\n";
    $index .= "    \$ch = curl_init();\n";
    $index .= "    curl_setopt(\$ch, CURLOPT_URL, \$url);\n";
    $index .= "    curl_setopt(\$ch, CURLOPT_POST, true);\n";
    $index .= "    curl_setopt(\$ch, CURLOPT_POSTFIELDS, http_build_query(\$data));\n";
    $index .= "    curl_setopt(\$ch, CURLOPT_RETURNTRANSFER, true);\n";
    $index .= "    curl_exec(\$ch);\n";
    $index .= "}\n\n";
    $index .= "if (isset(\$update['message'])) {\n";
    $index .= "    \$chatId = \$update['message']['from']['id'];\n";
    $index .= "    \$firstName = \$update['message']['from']['first_name'];\n";
    $index .= "    \$url = \"https://api.telegram.org/bot\$appToken/sendMessage\";\n";
    $index .= "    \$data = [\n";
    $index .= "        'chat_id' => \$chatId,\n";
    $index .= "        'parse_mode' => 'HTML',\n";
    $index .= "        'text' => '✋ Hello, ' . \$firstName . '. You in ' . \$appName . ' bot!'\n";
    $index .= "    ];\n\n";
    $index .= "    sendAPI(\$data, \$url);\n";
    $index .= "}";
    $index .= "?>";

    return $index;
}