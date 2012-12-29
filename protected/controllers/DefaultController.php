<?php
/**
 * User: javierwen(mumu)
 * Date: 2012/12/27 11:40
 */

class DefaultController extends Controller
{
    public $layout='column1';

    public function actionIndex()
    {
        $mu = "My hello world!";
        return $this->render('index', $mu);
    }
}
?>