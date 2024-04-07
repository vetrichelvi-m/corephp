<?php
$tokens = array(
    'USER_FIRST_NAME' => 'John',
    'USER_EMAILl' => 'john@smith.com',
    'USER_LAST_NAME'=>'Smith'
);

$pattern = '[[%s]]';

$map = array();
foreach($tokens as $var => $value)
{
    $map[sprintf($pattern, $var)] = $value;
}
$template='<html>
<head>
    <title>Hello [[USER_FIRST_NAME]]</title>
</head>
<body>
    <p>Hi, [[USER_FIRST_NAME]] !</p>
    <p><a href="mailto:[[USER_EMAILl]]">[[USER_EMAILl]]</a></p>
</body>
</html>';
echo $output = strtr($template, $map);
?>