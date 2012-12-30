<?php

    class AboutController extends Controller
    {

        public function actionIndex()
        {
            return $this->render('index');
        }

        public function actionContact()
        {
            return $this->render('contact');
        }
    }
?>