<?php
    /**
     * User: javierwen(mumu)
     * Date: 2012/12/29 23:42
     */
?>

<?php //$this->widget('zii.widgets.CMenu',array(
//    'items'=>array(
//        array('label'=>'Home', 'url'=>array('post/index')),
//        array('label'=>'About', 'url'=>array('site/page', 'view'=>'about')),
//        array('label'=>'Contact', 'url'=>array('site/contact')),
//        array('label'=>'Login', 'url'=>array('site/login'), 'visible'=>Yii::app()->user->isGuest),
//        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('site/logout'), 'visible'=>!Yii::app()->user->isGuest),
//        array('label'=>'Home', 'url'=>array('home/index'))
//    ),
//)); ?>
<div id="nav" class="main_contents">
    <div class="nav_c">
        <div class="list">
            <ul>
                <li class="first"><a href="/" target="">HOME</a></li>
                <li class=""><a href="/about-us.html" target="">ABOUT US</a></li>
                <li class=""><a href="/products/" target="">PRODUCTS</a></li>
                <li class=""><a href="/news/" target="">NEWS</a></li>
                <li class=""><a href="/download/" target="">DOWNLOAD</a></li>
                <li class=""><a href="/feedback.php" target="">FEEDBACK</a></li>
                <li class=""><a href="/contact-us.html" target="">CONTACT US</a></li>
            </ul>
        </div>
        <div class="search">
            <form action="/search.php" name="search_form" method="get">
                <table width="90%" align="center" border="0" cellspacing="0" cellpadding="0">
                    <tbody><tr>
                        <td height="23"><input class="form_input" value="Search Site" name="Keyword" style="color:#999;" onfocus="if(this.value=='Search Site'){this.value=''; this.style.color='#333';}" onblur="if(this.value==''){this.value='Search Site'; this.style.color='#999';};"></td>
                        <td><input type="image" name="imageField" src="/images/search.jpg"></td>
                    </tr>
                    </tbody></table>
            </form>
        </div>
        <div class="clear"></div>
    </div>
</div>