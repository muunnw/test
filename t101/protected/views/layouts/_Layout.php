<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <meta name="author" content="mumu" />
    <meta name="keywords" content="Wholesale-Buy Wholesale Products from Chinese Wholesaler">
    <meta name="description" content="Wholesale-Buy Wholesale Products from Chinese Wholesaler">

    <link rel="stylesheet" type="text/css" href="<?php echo CUrl::cssUrl(array('global.css', 't101')) ?>" media='screen' />
    <link rel="stylesheet" type="text/css" href="<?php echo CUrl::cssUrl(array('lib.css', 't101')) ?>" media='screen' />
    <link rel="stylesheet" type="text/css" href="<?php echo CUrl::cssUrl(array('style.css', 't101')) ?>" media='screen' />
    <?php //echo CHtml::cssFiles(array('global.css','lib.css','style.css')); ?>

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

</head>

<body>
<div class="wrapper">
    <div id="header" class="main_contents">
        <?php
            $this->beginContent('//layouts/_Header');
            echo $content;
            $this->endContent();
        ?>
    </div>

    <div id="nav" class="main_contents">
        <?php
            $this->beginContent('//layouts/_Menu');
            echo $content;
            $this->endContent();
        ?>
    </div>

    <div id="main" class="main_contents">
        <div class="main m_contents">
            <div id="station">
                <?php
                $this->beginContent('//layouts/_Location');
                echo $content;
                $this->endContent();
                ?>
            </div>
            <div><img src="<?php echo CUrl::imgUrl(array('split_bg_top.png', 't101')) ?>"></div>
            <div id="contents">

                <div class="siteLefter">
                    <?php
                    $this->beginContent('//layouts/_Aside');
                    echo $content;
                    $this->endContent();
                    ?>
                </div>

                <div class="siteRighter">
                    <?php echo $content; ?>
                </div>
                <div class="clear"></div>

            </div>
            <div><img src="<?php echo CUrl::imgUrl(array('split_bg_bottom.png', 't101')) ?>"></div>
        </div>
    </div>

    <div id="footer" class="main_contents">
        <?php
            $this->beginContent('//layouts/_Footer');
            echo $content;
            $this->endContent();
        ?>
    </div>

</div>

<?php

    Yii::app()->clientScript->registerScriptFile(CUrl::jsUrl(array('jquery-1.8.3.min.js', 'jquery')), CClientScript::POS_HEAD);

//Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl."/static/js/jquery/jquery-1.8.3.min.js", CClientScript::POS_END);

?>

</body>
</html>