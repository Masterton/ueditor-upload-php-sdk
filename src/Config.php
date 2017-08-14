<?php

/**
 * @author Masterton
 * @version 1.0.0
 * @time 2017-8-14 16:03:28
 * 前后端通信相关的配置
 */

namespace Ueditor;

class Config
{
    private $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }


    /* 上传图片配置项 */
    /**
     * 执行上传图片的action名称
     * 
     */
    public function getImageActionName()
    {
        $imageActionName = "uploadimage";
        return !empty($this->config['imageActionName']) ? $this->config['imageActionName'] : $imageActionName;
    }

    /**
     * 提交的图片表单名称
     * 
     */
    public function getImageFieldName()
    {
        $imageFieldName = "upfile";
        return !empty($this->config['imageFieldName']) ? $this->config['imageFieldName'] : $imageFieldName;
    }

    /**
     * 上传大小限制，单位B
     * 
     */
    public function getImageMaxSize()
    {
        $imageMaxSize = 2048000;
        return !empty($this->config['imageMaxSize']) ? $this->config['imageMaxSize'] : $imageMaxSize;
    }

    /**
     * 上传图片格式显示
     * 
     */
    public function getImageAllowFiles()
    {
        $imageAllowFiles = [".png", ".jpg", ".jpeg", ".gif", ".bmp"];
        return !empty($this->config['imageAllowFiles']) ? $this->config['imageAllowFiles'] : $imageAllowFiles;
    }

    /**
     * 是否压缩图片,默认是true
     * 
     */
    public function getImageCompressEnable()
    {
        $imageCompressEnable = true; /* 是否压缩图片,默认是true */
        return !empty($this->config['imageCompressEnable']) ? $this->config['imageCompressEnable'] : $imageCompressEnable;
    }

    /**
     * 图片压缩最长边限制
     * 
     */
    public function getImageCompressBorder()
    {
        $imageCompressBorder = 1600; /* 图片压缩最长边限制 */
        return !empty($this->config['imageCompressBorder']) ? $this->config['imageCompressBorder'] : $imageCompressBorder;
    }

    /**
     * 插入的图片浮动方式
     * 
     */
    public function getImageInsertAlign()
    {
        $imageInsertAlign = "none"; /* 插入的图片浮动方式 */
        return !empty($this->config['imageInsertAlign']) ? $this->config['imageInsertAlign'] : $imageInsertAlign;
    }

    /**
     * 图片访问路径前缀
     * 
     */
    public function getImageUrlPrefix()
    {
        $imageUrlPrefix = ""; /* 图片访问路径前缀 */
        return !empty($this->config['imageUrlPrefix']) ? $this->config['imageUrlPrefix'] : $imageUrlPrefix;
    }

    /**
     * 提交的图片表单名称
     * 
     */
    public function getImagePathFormat()
    {
        $imagePathFormat = "/ueditor/php/upload/image/{yyyy}{mm}{dd}/{time}{rand:6}";
        return !empty($this->config['imagePathFormat']) ? $this->config['imagePathFormat'] : $imagePathFormat;
        /* 上传保存路径,可以自定义保存路径和文件名格式 */
        /* {filename} 会替换成原文件名,配置这项需要注意中文乱码问题 */
        /* {rand:6} 会替换成随机数,后面的数字是随机数的位数 */
        /* {time} 会替换成时间戳 */
        /* {yyyy} 会替换成四位年份 */
        /* {yy} 会替换成两位年份 */
        /* {mm} 会替换成两位月份 */
        /* {dd} 会替换成两位日期 */
        /* {hh} 会替换成两位小时 */
        /* {ii} 会替换成两位分钟 */
        /* {ss} 会替换成两位秒 */
        /* 非法字符 \ : * ? " < > | */
        /* 具请体看线上文档: fex.baidu.com/ueditor/#use-format_upload_filename */
    }


    /* 涂鸦图片上传配置项 */
    /**
     * 执行上传涂鸦的action名称
     * 
     */
    public function getScrawlActionName()
    {
        $scrawlActionName = "uploadscrawl"; /* 执行上传涂鸦的action名称 */
        return !empty($this->config['scrawlActionName']) ? $this->config['scrawlActionName'] : $scrawlActionName;
    }

    /**
     * 提交的图片表单名称
     * 
     */
    public function getScrawlFieldName()
    {
        $scrawlFieldName = "upfile"; /* 提交的图片表单名称 */
        return !empty($this->config['scrawlFieldName']) ? $this->config['scrawlFieldName'] : $scrawlFieldName;
    }

    /**
     * 上传保存路径,可以自定义保存路径和文件名格式
     * 
     */
    public function getScrawlPathFormat()
    {
        /* 上传保存路径,可以自定义保存路径和文件名格式 */
        $scrawlPathFormat = "/ueditor/php/upload/image/{yyyy}{mm}{dd}/{time}{rand:6}";
        return !empty($this->config['scrawlPathFormat']) ? $this->config['scrawlPathFormat'] : $scrawlPathFormat;
    }

    /**
     * 上传大小限制，单位B
     * 
     */
    public function getScrawlMaxSize()
    {
        $scrawlMaxSize = 2048000; /* 上传大小限制，单位B */
        return !empty($this->config['scrawlMaxSize']) ? $this->config['scrawlMaxSize'] : $scrawlMaxSize;
    }

    /**
     * 图片访问路径前缀
     * 
     */
    public function getSscrawlUrlPrefix()
    {
        $scrawlUrlPrefix = ""; /* 图片访问路径前缀 */
        return !empty($this->config['scrawlUrlPrefix']) ? $this->config['scrawlUrlPrefix'] : $scrawlUrlPrefix;
    }

    /**
     * 提交的图片表单名称
     * 
     */
    public function getScrawlInsertAlign()
    {
        $scrawlInsertAlign = "none";
        return !empty($this->config['scrawlInsertAlign']) ? $this->config['scrawlInsertAlign'] : $scrawlInsertAlign;
    }


    /* 截图工具上传 */
    /**
     * 执行上传截图的action名称
     * 
     */
    public function getSnapscreenActionName()
    {
        $snapscreenActionName = "uploadimage"; /* 执行上传截图的action名称 */
        return !empty($this->config['snapscreenActionName']) ? $this->config['snapscreenActionName'] : $snapscreenActionName;
    }

    /**
     * 上传保存路径,可以自定义保存路径和文件名格式
     * 
     */
    public function getSnapscreenPathFormat()
    {
        /* 上传保存路径,可以自定义保存路径和文件名格式 */
        $snapscreenPathFormat = "/ueditor/php/upload/image/{yyyy}{mm}{dd}/{time}{rand:6}";
        return !empty($this->config['snapscreenPathFormat']) ? $this->config['snapscreenPathFormat'] : $snapscreenPathFormat;
    }

    /**
     * 图片访问路径前缀
     * 
     */
    public function getSnapscreenUrlPrefix()
    {
        $snapscreenUrlPrefix = ""; /* 图片访问路径前缀 */
        return !empty($this->config['snapscreenUrlPrefix']) ? $this->config['snapscreenUrlPrefix'] : $snapscreenUrlPrefix;
    }

    /**
     * 插入的图片浮动方式
     * 
     */
    public function getSnapscreenInsertAlign()
    {
        $snapscreenInsertAlign = "none"; /* 插入的图片浮动方式 */
        return !empty($this->config['snapscreenInsertAlign']) ? $this->config['snapscreenInsertAlign'] : $snapscreenInsertAlign;
    }


    /* 抓取远程图片配置 */
    /**
     * 插入的图片浮动方式
     * 
     */
    public function getCatcherLocalDomain()
    {
        $catcherLocalDomain = ["127.0.0.1", "localhost", "img.baidu.com"];
        return !empty($this->config['catcherLocalDomain']) ? $this->config['catcherLocalDomain'] : $catcherLocalDomain;
    }

    /**
     * 执行抓取远程图片的action名称
     * 
     */
    public function getCatcherActionName()
    {
        $catcherActionName = "catchimage"; /* 执行抓取远程图片的action名称 */
        return !empty($this->config['catcherActionName']) ? $this->config['catcherActionName'] : $catcherActionName;
    }

    /**
     * 提交的图片列表表单名称
     * 
     */
    public function getCatcherFieldName()
    {
        $catcherFieldName = "source"; /* 提交的图片列表表单名称 */
        return !empty($this->config['catcherFieldName']) ? $this->config['catcherFieldName'] : $catcherFieldName;
    }

    /**
     * 上传保存路径,可以自定义保存路径和文件名格式
     * 
     */
    public function getCatcherPathFormat()
    {
        /* 上传保存路径,可以自定义保存路径和文件名格式 */
        $catcherPathFormat = "/ueditor/php/upload/image/{yyyy}{mm}{dd}/{time}{rand:6}";
        return !empty($this->config['catcherPathFormat']) ? $this->config['catcherPathFormat'] : $catcherPathFormat;
    }

    /**
     * 图片访问路径前缀
     * 
     */
    public function getCatcherUrlPrefix()
    {
        $catcherUrlPrefix = ""; /* 图片访问路径前缀 */
        return !empty($this->config['catcherUrlPrefix']) ? $this->config['catcherUrlPrefix'] : $catcherUrlPrefix;
    }

    /**
     * 上传大小限制，单位B
     * 
     */
    public function getCatcherMaxSize()
    {
        $catcherMaxSize = 2048000; /* 上传大小限制，单位B */
        return !empty($this->config['catcherMaxSize']) ? $this->config['catcherMaxSize'] : $catcherMaxSize;
    }

    /**
     * 抓取图片格式显示
     * 
     */
    public function getCatcherAllowFiles()
    {
        $catcherAllowFiles = [".png", ".jpg", ".jpeg", ".gif", ".bmp"]; /* 抓取图片格式显示 */
        return !empty($this->config['catcherAllowFiles']) ? $this->config['catcherAllowFiles'] : $catcherAllowFiles;
    }


    /**
     * 执行上传视频的action名称
     * 
     */
    public function getVideoActionName()
    {
        $videoActionName = "uploadvideo"; /* 执行上传视频的action名称 */
        return !empty($this->config['videoActionName']) ? $this->config['videoActionName'] : $videoActionName;
    }

    /**
     * 提交的视频表单名称
     * 
     */
    public function getVideoFieldName()
    {
        $videoFieldName = "upfile"; /* 提交的视频表单名称 */
        return !empty($this->config['videoFieldName']) ? $this->config['videoFieldName'] : $videoFieldName;
    }

    /**
     * 上传保存路径,可以自定义保存路径和文件名格式
     * 
     */
    public function getVideoPathFormat()
    {
        /* 上传保存路径,可以自定义保存路径和文件名格式 */
        $videoPathFormat = "/ueditor/php/upload/video/{yyyy}{mm}{dd}/{time}{rand:6}";
        return !empty($this->config['videoPathFormat']) ? $this->config['videoPathFormat'] : $videoPathFormat;
    }

    /**
     * 视频访问路径前缀
     * 
     */
    public function getVideoUrlPrefix()
    {
        $videoUrlPrefix = ""; /* 视频访问路径前缀 */
        return !empty($this->config['videoUrlPrefix']) ? $this->config['videoUrlPrefix'] : $videoUrlPrefix;
    }

    /**
     * 上传大小限制，单位B，默认100MB
     * 
     */
    public function getVideoMaxSize()
    {
        $videoMaxSize = 102400000; /* 上传大小限制，单位B，默认100MB */
        return !empty($this->config['videoMaxSize']) ? $this->config['videoMaxSize'] : $videoMaxSize;
    }

    /**
     * 上传视频格式显示
     * 
     */
    public function getVideoAllowFiles()
    {
        /* 上传视频格式显示 */
        $videoAllowFiles = [
        ".flv", ".swf", ".mkv", ".avi", ".rm", ".rmvb", ".mpeg", ".mpg",
        ".ogg", ".ogv", ".mov", ".wmv", ".mp4", ".webm", ".mp3", ".wav", ".mid"];
        return !empty($this->config['videoAllowFiles']) ? $this->config['videoAllowFiles'] : $videoAllowFiles;
    }


    /* 上传文件配置 */
    /**
     * controller里,执行上传视频的action名称
     * 
     */
    public function getFileActionName()
    {
        $fileActionName = "uploadfile"; /* controller里,执行上传视频的action名称 */
        return !empty($this->config['fileActionName']) ? $this->config['fileActionName'] : $fileActionName;
    }

    /**
     * 提交的文件表单名称
     * 
     */
    public function getFileFieldName()
    {
        $fileFieldName = "upfile"; /* 提交的文件表单名称 */
        return !empty($this->config['fileFieldName']) ? $this->config['fileFieldName'] : $fileFieldName;
    }

    /**
     * 上传保存路径,可以自定义保存路径和文件名格式
     * 
     */
    public function getFilePathFormat()
    {
        /* 上传保存路径,可以自定义保存路径和文件名格式 */
        $filePathFormat = "/ueditor/php/upload/file/{yyyy}{mm}{dd}/{time}{rand:6}";
        return !empty($this->config['filePathFormat']) ? $this->config['filePathFormat'] : $filePathFormat;
    }

    /**
     * 文件访问路径前缀
     * 
     */
    public function getFileUrlPrefix()
    {
        $fileUrlPrefix = ""; /* 文件访问路径前缀 */
        return !empty($this->config['fileUrlPrefix']) ? $this->config['fileUrlPrefix'] : $fileUrlPrefix;
    }

    /**
     * 上传大小限制，单位B，默认50MB
     * 
     */
    public function getFileMaxSize()
    {
        $fileMaxSize = 51200000; /* 上传大小限制，单位B，默认50MB */
        return !empty($this->config['fileMaxSize']) ? $this->config['fileMaxSize'] : $fileMaxSize;
    }

    /**
     * 上传文件格式显示
     * 
     */
    public function getFileAllowFiles()
    {
        /* 上传文件格式显示 */
        $fileAllowFiles = [
            ".png", ".jpg", ".jpeg", ".gif", ".bmp",
            ".flv", ".swf", ".mkv", ".avi", ".rm", ".rmvb", ".mpeg", ".mpg",
            ".ogg", ".ogv", ".mov", ".wmv", ".mp4", ".webm", ".mp3", ".wav", ".mid",
            ".rar", ".zip", ".tar", ".gz", ".7z", ".bz2", ".cab", ".iso",
            ".doc", ".docx", ".xls", ".xlsx", ".ppt", ".pptx", ".pdf", ".txt", ".md", ".xml"
        ];
        return !empty($this->config['fileAllowFiles']) ? $this->config['fileAllowFiles'] : $fileAllowFiles;
    }


    /* 列出指定目录下的图片 */
    /**
     * 执行图片管理的action名称
     * 
     */
    public function getImageManagerActionName()
    {
        $imageManagerActionName = "listimage"; /* 执行图片管理的action名称 */
        return !empty($this->config['imageManagerActionName']) ? $this->config['imageManagerActionName'] : $imageManagerActionName;
    }

    /**
     * 指定要列出图片的目录
     * 
     */
    public function getImageManagerListPath()
    {
        $imageManagerListPath = "/ueditor/php/upload/image/"; /* 指定要列出图片的目录 */
        return !empty($this->config['imageManagerListPath']) ? $this->config['imageManagerListPath'] : $imageManagerListPath;
    }

    /**
     * 每次列出文件数量
     * 
     */
    public function getImageManagerListSize()
    {
        $imageManagerListSize = 20; /* 每次列出文件数量 */
        return !empty($this->config['imageManagerListSize']) ? $this->config['imageManagerListSize'] : $imageManagerListSize;
    }

    /**
     * 图片访问路径前缀
     * 
     */
    public function getImageManagerUrlPrefix()
    {
        $imageManagerUrlPrefix = ""; /* 图片访问路径前缀 */
        return !empty($this->config['imageManagerUrlPrefix']) ? $this->config['imageManagerUrlPrefix'] : $imageManagerUrlPrefix;
    }

    /**
     * 插入的图片浮动方式
     * 
     */
    public function getImageManagerInsertAlign()
    {
        $imageManagerInsertAlign = "none"; /* 插入的图片浮动方式 */
        return !empty($this->config['imageManagerInsertAlign']) ? $this->config['imageManagerInsertAlign'] : $imageManagerInsertAlign;
    }

    /**
     * 列出的文件类型
     * 
     */
    public function getImageManagerAllowFiles()
    {
        $imageManagerAllowFiles = [".png", ".jpg", ".jpeg", ".gif", ".bmp"]; /* 列出的文件类型 */
        return !empty($this->config['imageManagerAllowFiles']) ? $this->config['imageManagerAllowFiles'] : $imageManagerAllowFiles;
    }


    /* 列出指定目录下的文件 */
    /**
     * 执行文件管理的action名称
     * 
     */
    public function getFileManagerActionName()
    {
        $fileManagerActionName = "listfile"; /* 执行文件管理的action名称 */
        return !empty($this->config['fileManagerActionName']) ? $this->config['fileManagerActionName'] : $fileManagerActionName;
    }

    /**
     * 指定要列出文件的目录
     * 
     */
    public function getFileManagerListPath()
    {
        $fileManagerListPath = "/ueditor/php/upload/file/"; /* 指定要列出文件的目录 */
        return !empty($this->config['fileManagerListPath']) ? $this->config['fileManagerListPath'] : $fileManagerListPath;
    }

    /**
     * 文件访问路径前缀
     * 
     */
    public function getFileManagerUrlPrefix()
    {
        $fileManagerUrlPrefix = ""; /* 文件访问路径前缀 */
        return !empty($this->config['fileManagerUrlPrefix']) ? $this->config['fileManagerUrlPrefix'] : $fileManagerUrlPrefix;
    }

    /**
     * 每次列出文件数量
     * 
     */
    public function getFileManagerListSize()
    {
        $fileManagerListSize = 20; /* 每次列出文件数量 */
        return !empty($this->config['fileManagerListSize']) ? $this->config['fileManagerListSize'] : $fileManagerListSize;
    }

    /**
     * 列出的文件类型
     * 
     */
    public function getFileManagerAllowFiles()
    {
        /* 列出的文件类型 */
        $fileManagerAllowFiles = [
            ".png", ".jpg", ".jpeg", ".gif", ".bmp",
            ".flv", ".swf", ".mkv", ".avi", ".rm", ".rmvb", ".mpeg", ".mpg",
            ".ogg", ".ogv", ".mov", ".wmv", ".mp4", ".webm", ".mp3", ".wav", ".mid",
            ".rar", ".zip", ".tar", ".gz", ".7z", ".bz2", ".cab", ".iso",
            ".doc", ".docx", ".xls", ".xlsx", ".ppt", ".pptx", ".pdf", ".txt", ".md", ".xml"
        ];
        return !empty($this->config['fileManagerAllowFiles']) ? $this->config['fileManagerAllowFiles'] : $fileManagerAllowFiles;
    }
}