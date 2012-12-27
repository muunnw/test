<?php
/**
 * User: javierwen(mumu)
 * Date: 2012/12/27 11:40
 */

class DefaultController extends Controller
{
    public $layout='column2';

    public function actionIndex()
    {
        return $this->render('index');
    }
}
?>