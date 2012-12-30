<?php
    /**
     * User: javierwen(mumu)
     * Date: 2012/12/29 22:53
     */
?>
<?php  /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8" />
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
    <!--S Header-->
    <div class="wrapper-header">
        <?php
            $this->beginContent('//layouts/_Header');
            echo $content;
            $this->endContent();
        ?>
    </div>
    <!--E Header-->

    <!--S TopMenu-->
    <div class="wrapper-menu">
        <div class="menu">
            <?php
                $this->beginContent('//layouts/_Menu');
                echo $content;
                $this->endContent();
            ?>
        </div>
    </div>
    <!--E TopMenu-->

    <!--S Location-->
    <div class="wrapper-location">
        <div class="location">
            <?php
                $this->beginContent('//layouts/_Location');
                echo $content;
                $this->endContent();
            ?>
        </div>
    </div>
    <!--E Location-->

    <!--S Content-->
    <div class="wrapper-content">
        <div class="main">
            <div class="container">
                <!--S RightContainer-->
                <div class="right-container">
                    <?php echo $content; ?>
                </div>
                <!--E RightContainer-->
                <!--S LeftContainer-->
                <div class="left-container">
                    <?php
                        $this->beginContent('//layouts/_Aside');
                        echo $content;
                        $this->endContent();
                    ?>
                </div>
                <!--E LeftContainer-->
            </div>
        </div>
    </div>
    <!--S Content-->

    <!--S Footer-->
    <div class="wrapper-footer">
        <?php
            $this->beginContent('//layouts/_Footer');
            echo $content;
            $this->endContent();
        ?>
    </div>
    <!--E Footer-->

</div>

<?php

    Yii::app()->clientScript->registerScriptFile(CUrl::jsUrl(array('jquery-1.8.3.min.js', 'jquery')), CClientScript::POS_HEAD);

//Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl."/static/js/jquery/jquery-1.8.3.min.js", CClientScript::POS_END);

?>

</body>
</html>