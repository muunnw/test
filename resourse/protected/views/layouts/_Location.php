<?php
    /**
     * User: javierwen(mumu)
     * Date: 2012/12/30 00:03
     */
?>

<?php
    if(isset($this->breadcrumbs)):
        $this->widget('zii.widgets.CBreadcrumbs', array(
            'links'=>$this->breadcrumbs,
        ));
    endif;
?>