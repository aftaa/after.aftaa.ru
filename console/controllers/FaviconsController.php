<?php

namespace console\controllers;

use common\models\Link;
use yii\console\Controller;

class FaviconsController extends Controller
{
    public function actionIndex()
    {
        $links = Link::find()->all();
        foreach ($links as $link) {
            $link->icon = str_replace('/favicons/', '', $link->icon);
            $link->save();
        }
        exit(0);
    }

}
