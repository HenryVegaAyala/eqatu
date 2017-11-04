<?php

$params = require(__DIR__ . '/params.php');
$db = require(__DIR__ . '/db.php');

$config = [
    'id' => 'basic-console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log', 'assetsAutoCompress'],
    'controllerNamespace' => 'app\commands',
    'components' => [
        'assetsAutoCompress' =>
            [
                'class'                         => '\skeeks\yii2\assetsAuto\AssetsAutoCompressComponent',
                'enabled'                       => true,

                'readFileTimeout'               => 3,           //Time in seconds for reading each asset file

                'jsCompress'                    => true,        //Enable minification js in html code
                'jsCompressFlaggedComments'     => true,        //Cut comments during processing js

                'cssCompress'                   => true,        //Enable minification css in html code

                'cssFileCompile'                => true,        //Turning association css files
                'cssFileRemouteCompile'         => false,       //Trying to get css files to which the specified path as the remote file, skchat him to her.
                'cssFileCompress'               => true,        //Enable compression and processing before being stored in the css file
                'cssFileBottom'                 => false,       //Moving down the page css files
                'cssFileBottomLoadOnJs'         => false,       //Transfer css file down the page and uploading them using js

                'jsFileCompile'                 => true,        //Turning association js files
                'jsFileRemouteCompile'          => false,       //Trying to get a js files to which the specified path as the remote file, skchat him to her.
                'jsFileCompress'                => true,        //Enable compression and processing js before saving a file
                'jsFileCompressFlaggedComments' => true,        //Cut comments during processing js

                'htmlCompress'                  => true,        //Enable compression html
                'noIncludeJsFilesOnPjax'        => true,        //Do not connect the js files when all pjax requests
                'htmlCompressOptions'           =>              //options for compressing output result
                    [
                        'extra' => false,        //use more compact algorithm
                        'no-comments' => true   //cut all the html comments
                    ],
            ],
        'assetManager' => [
            'linkAssets' => false,
            'appendTimestamp' => true,
            'converter' => [
                'class' => 'yii\web\AssetConverter',
                'commands' => [
                    'less' => ['css', 'lessc {from} {to} --no-color'],
                    'ts' => ['js', 'tsc --out {to} {from}'],
                ],
            ],
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
    ],
    'params' => $params,

    'controllerMap' => [
        'fixture' => [
            'class' => 'yii\faker\FixtureController',
        ],
        'clean-vendors' => [
            'class' => 'mbrowniebytes\yii2cleanvendors\CleanVendorsController',
        ],
    ],

];

if (YII_ENV_DEV) {
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
