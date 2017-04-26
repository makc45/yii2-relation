<?php
namespace makc45\relation\controller;

class DefaultController extends yii\web\Controller
{
    public function action() {
        return $this->render('index',[
            'message' => 'test',
            ]);
    }
}
