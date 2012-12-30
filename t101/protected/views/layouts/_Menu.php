

    <div class="nav_c">
        <div class="list">
            <?php $this->widget('zii.widgets.CMenu',array(
                'items'=>array(
                    array('label'=>'HOME', 'url'=>array('home/index'), 'itemOptions'=>array('class'=>'first')),
                    array('label'=>'ABOUT US', 'url'=>array('about/index')),
                    array('label'=>'PRODUCTS', 'url'=>array('product/index')),
                    array('label'=>'NEWS', 'url'=>array('news/index')),
                    array('label'=>'DOWNLOAD', 'url'=>array('download/index')),
                    array('label'=>'FEEDBACK', 'url'=>array('feedback/index')),
                    array('label'=>'CONTACT US', 'url'=>array('about/contact')),
                ),
            )); ?>
        </div>
        <div class="search">
            <form action="/search.php" name="search_form" method="get">
                <table width="90%" align="center" border="0" cellspacing="0" cellpadding="0">
                    <tbody><tr>
                        <td height="23"><input class="form_input" value="Search Site" name="Keyword" style="color:#999;" onfocus="if(this.value=='Search Site'){this.value=''; this.style.color='#333';}" onblur="if(this.value==''){this.value='Search Site'; this.style.color='#999';};"></td>
                        <td><input type="image" name="imageField" src="<?php echo CUrl::imgUrl(array('search.jpg', 't101')) ?>"></td>
                    </tr>
                    </tbody></table>
            </form>
        </div>
        <div class="clear"></div>
    </div>
