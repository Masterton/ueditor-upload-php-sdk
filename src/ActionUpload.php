<?php

/**
 * @author Masterton
 * @version 1.0.0
 * @time 2017-8-14 14:42:58
 */

namespace Ueditor;

class ActioUpload
{
    private $config;
    private $base64;

    public function __construct($config)
    {
        $this->config = $config;
        $this->base64 = "upload";
    }

    /**
     * 上传图片
     *
     */
    public function uploadImage()
    {
        $imageConfig = [
            "pathFormat" => $this->config['imagePathFormat'],
            "maxSize" => $this->config['imageMaxSize'],
            "allowFiles" => $this->config['imageAllowFiles']
        ];
        $fieldName = $this->config['imageFieldName'];

        /* 生成上传实例对象并完成上传 */
        $up = new Uploader($fieldName, $imageConfig, $this->$base64);

        /**
         * 得到上传文件所对应的各个参数,数组结构
         * array(
         *     "state" => "",          //上传状态，上传成功时必须返回"SUCCESS"
         *     "url" => "",            //返回的地址
         *     "title" => "",          //新文件名
         *     "original" => "",       //原始文件名
         *     "type" => ""            //文件类型
         *     "size" => "",           //文件大小
         * )
         */

        /* 返回数据 */
        return $up->getFileInfo();
    }

    /**
     * 上传涂鸦
     *
     */
    public function uploadScrawl()
    {
        $imageConfig = [
            "pathFormat" => $this->config['scrawlPathFormat'],
            "maxSize" => $this->config['scrawlMaxSize'],
            "allowFiles" => $this->config['scrawlAllowFiles'],
            "oriName" => "scrawl.png"
        ];
        $fieldName = $this->config['scrawlFieldName'];

        /* 生成上传实例对象并完成上传 */
        $up = new Uploader($fieldName, $imageConfig, 'base64');
        return $up->getFileInfo();
    }

    /**
     * 上传视频
     *
     */
    public function uploadVideo()
    {
        $imageConfig = [
            "pathFormat" => $this->config['videoPathFormat'],
            "maxSize" => $this->config['videoMaxSize'],
            "allowFiles" => $this->config['videoAllowFiles']
        ];
        $fieldName = $this->config['videoFieldName'];

        /* 生成上传实例对象并完成上传 */
        $up = new Uploader($fieldName, $imageConfig, $this->base64);
        return $up->getFileInfo();
    }

    /**
     * 上传文件
     *
     */
    public function uploadVideo()
    {
        $imageConfig = [
            "pathFormat" => $this->config['filePathFormat'],
            "maxSize" => $this->config['fileMaxSize'],
            "allowFiles" => $this->config['fileAllowFiles']
        ];
        $fieldName = $this->config['fileFieldName'];

        /* 生成上传实例对象并完成上传 */
        $up = new Uploader($fieldName, $imageConfig, $this->base64);
        return $up->getFileInfo();
    }
}