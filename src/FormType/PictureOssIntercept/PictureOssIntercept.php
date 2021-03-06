<?php
namespace FormItem\AliyunOss\FormType\PictureOssIntercept;

use Illuminate\Support\Str;
use Qscmf\Builder\FormType\FormType;
use Think\View;

class PictureOssIntercept implements FormType {

    public function build(array $form_type){
        $view = new View();
        $view->assign('form', $form_type);
        $content = $view->fetch(__DIR__ . '/picture_oss_intercept.html');
        return $content;
    }
}