<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (�����)
 * @date 18.09.2015
 */
return
[
    'components'    => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=shop_smarty',
            'username' => 'shop',
            'password' => 'jW4mKYSVRVZPGyNn',
            /*'dsn' => 'pgsql:host=localhost;dbname=test',
            'username' => 'test',
            'password' => 'gk-wIJI4OMIYqOJ4EfW1jD1Yj',*/
            'charset' => 'utf8',
            'enableSchemaCache' => true,
            'schemaCacheDuration' => 3600,
        ]
    ]
];
