<?php
namespace FormItem\AliyunOss;

use Bootstrap\Provider;
use Bootstrap\RegisterContainer;
use FormItem\AliyunOss\Controller\AliyunOssController;
use FormItem\AliyunOss\FormType\AudioOss\AudioOss;
use FormItem\AliyunOss\FormType\AudiosOss\AudiosOss;
use FormItem\AliyunOss\FormType\FileOss\FileOss;
use FormItem\AliyunOss\FormType\FilesOss\FilesOss;
use FormItem\AliyunOss\FormType\PictureOss\PictureOss;
use FormItem\AliyunOss\FormType\PictureOssIntercept\PictureOssIntercept;
use FormItem\AliyunOss\FormType\PicturesOss\PicturesOss;
use FormItem\AliyunOss\FormType\PicturesOssIntercept\PicturesOssIntercept;

class AliyunOssProvider implements Provider {

    public function register(){
        RegisterContainer::registerFormItem('audio_oss', AudioOss::class);
        RegisterContainer::registerFormItem('audios_oss', AudiosOss::class);
        RegisterContainer::registerFormItem('file_oss', FileOss::class);
        RegisterContainer::registerFormItem('files_oss', FilesOss::class);
        RegisterContainer::registerFormItem('picture_oss', PictureOss::class);
        RegisterContainer::registerFormItem('pictures_oss', PicturesOss::class);
        RegisterContainer::registerFormItem('picture_oss_intercept', PictureOssIntercept::class);
        RegisterContainer::registerFormItem('pictures_oss_intercept', PicturesOssIntercept::class);

        RegisterContainer::registerController('extends', 'AliyunOss', AliyunOssController::class);

        RegisterContainer::registerSymLink(WWW_DIR . '/Public/aliyun-oss', __DIR__ . '/../asset/aliyun-oss');
    }
}