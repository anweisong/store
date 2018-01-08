<html>
    <head>
        <title>Laravel</title>

        <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

        <style>
            body {
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
                margin-bottom: 40px;
            }

            .quote {
                font-size: 24px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">phone</div>
                <div class="quote">{{ Inspiring::quote() }}</div>
            </div>
        </div>
    </body>
</html>
<?php
use Flc\Dysms\Client;
use Flc\Dysms\Request\SendSms;

$config = [
    'accessKeyId'    => 'LTAIfutjoO1bxWJl',
    'accessKeySecret' => 'Iyd2DTiaX3LeGh1b3crysnfp4jDX4Z',
];

$client  = new Client($config);
$sendSms = new SendSms;
$sendSms->setPhoneNumbers('18152045226');
$sendSms->setSignName('小李的店');
$sendSms->setTemplateCode('SMS_120375820');
$sendSms->setTemplateParam(['code' => rand(100000, 999999)]);
$sendSms->setOutId('demo');

print_r($client->execute($sendSms));