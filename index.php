<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App ('Gamer');
$app->initLayout('Centered');
$button = $app->add (['Button','gaish']);
$button -> icon = 'find';
$button -> addClass('big red');
$IMG = 'https://i.ytimg.com/vi/w7zOrVVz36M/maxresdefault.jpg';
$Label = $app->add(['Label', 'gaish','image'=>$IMG]);
$button ->addClass ('massive blue');

$icon = $app->add (['Image',$IMG]);

echo 2+2;
echo "2"+"2";
$Label = $app->add (['Label','gaish']);
$Text = $app->add (['Text','rf3egkjprkgpk[4h5jk4p[5jptkjgkertkgkk3jhfgjkdkdjkfjhlokhgkfbgfrjgbghjdhjhggjgkurwajhjgrtkhgkttyhjtyyjytjytjytj']);
$Message = $app->add (['Message','doma ja']);
