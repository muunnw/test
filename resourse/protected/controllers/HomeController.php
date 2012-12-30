<?php
/**
 * User: javierwen(mumu)
 * Date: 2012/12/27 11:40
 */

class HomeController extends Controller
{

    public function actionIndex()
    {
        $mu = "My hello world!";
        return $this->render('index', $mu);
    }
}
?>