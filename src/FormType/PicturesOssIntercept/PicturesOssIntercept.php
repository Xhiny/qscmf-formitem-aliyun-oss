<?php
namespace FormItem\AliyunOss\FormType\PicturesOssIntercept;

use Qscmf\Builder\FormType\FormType;
use Think\View;

class PicturesOssIntercept implements FormType {

    public function build(array $form_type){
        $view = new View();
        $view->assign('form', $form_type);
        $content = $view->fetch(__DIR__ . '/pictures_oss_intercept.html');
        return $content;
    }
}