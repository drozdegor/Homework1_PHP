<?php
echo 'Текущий файл: ' . __FILE__ . ', строка: ' . __LINE__ . PHP_EOL;
$multilineText = <<<EOT
Это многострочный текст,
созданный с помощью heredoc синтаксиса.
Он может содержать несколько строк.
EOT;
echo $multilineText . PHP_EOL . PHP_EOL;
$a = 'Рыба';
$b = 'человек';
$resultPhrase = $a . ' рыбою сыта, а ' . $b . ' человеком';
echo $resultPhrase;
?>
