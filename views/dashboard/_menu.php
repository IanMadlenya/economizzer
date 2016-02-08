<?php
use yii\bootstrap\Nav;
echo Nav::widget([
    'activateItems' => true,
    'encodeLabels' => false,
    'items' => [
        [
        'label' => Yii::t('app', 'Select Panel'),
            'items' => [
                [
                    'label' => Yii::t('app', 'Monthly Summary'),
                    'url' => ['/dashboard/overview'],
                    'visible' => !Yii::$app->user->isGuest,
                ],
                [
                    'label'   => Yii::t('app', 'Accomplishment'),
                    'url'     => ['/dashboard/accomplishment'],
                    'visible' => !Yii::$app->user->isGuest,
                ],
                [
                    'label'   => Yii::t('app', 'Annual Performance'),
                    'url'     => ['/dashboard/performance'],
                    'visible' => !Yii::$app->user->isGuest,
                ],
            ],
        ],
    ],
    'options' => ['class' =>'nav-pills nav-stacked'],
]);
?>