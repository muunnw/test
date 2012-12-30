<?php
    //$this is the controller
    $this->pageTitle = Yii::app()->name;
    $this->breadcrumbs = array();


    Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl."/static/js/jquery/jquery-ui-1.8.16.min.js", CClientScript::POS_END);

?>
