<?php
    /**
     * User: javierwen(mumu)
     * Date: 2012/12/29 23:42
     */
?>

<?php $this->widget('zii.widgets.CMenu',array(
    'items'=>array(
        array('label'=>'Home', 'url'=>array('post/index')),
        array('label'=>'About', 'url'=>array('site/page', 'view'=>'about')),
        array('label'=>'Contact', 'url'=>array('site/contact')),
        array('label'=>'Login', 'url'=>array('site/login'), 'visible'=>Yii::app()->user->isGuest),
        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('site/logout'), 'visible'=>!Yii::app()->user->isGuest),
        array('label'=>'Home', 'url'=>array('home/index'))
    ),
)); ?>