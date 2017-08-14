<?php

/**
 * @author Masterton
 * @version 1.0.0
 * @time 2017-8-14 14:42:49
 */

namespace Ueditor;

class Ueditor
{
    /**
     * Ueditor Configure
     * @var array
     */
    private $config;


    public function __construct(array $config)
    {
        $this->config = Config($config);
    }

    /**
     * 上传图片
     *
     */
    public function uploadImage()
    {
        $uploadImage = new ActionUpload();
    }

    /**
     * 上传涂鸦
     *
     */
    public function uploadScrawl()
    {
        $uploadScrawl = new ActionUpload();
    }

    /**
     * 上传视频
     *
     */
    public function uploadVideo()
    {
        $uploadVideo = new ActionUpload();
    }

    /**
     * 上传文件
     *
     */
    public function uploadFile()
    {
        $uploadFile = new ActionUpload();
    }

    /**
     * 列出图片
     *
     */
    public function listImage()
    {
        $listImage = new ActionList();
    }

    /**
     * 列出文件
     *
     */
    public function listFile()
    {
        $listFile = new ActionList();
    }

    /**
     * 抓取远程文件
     *
     */
    public function catchImage()
    {
        $catchImage = new ActionCrawler();
    }
}