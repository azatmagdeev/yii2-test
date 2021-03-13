<?php

use yii\helpers\Html;

use app\models\Country;

// получаем все строки из таблицы "country" и сортируем их по "name"
$countries = Country::find()->orderBy('name')->all();
//echo '$countries = <pre>'.print_r($countries,true).'</pre>';//todo remove it!
// получаем строку с первичным ключом "US"
$country = Country::findOne('US');
echo '$country = <pre>'.print_r($country,true).'</pre>';//todo remove it!
// отобразит "United States"
echo $country->name;

// меняем имя страны на "U.S.A." и сохраняем в базу данных
$country->name = 'U.S.A.';
$country->save();

?>
<ul>
    <li>Вы:<?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>