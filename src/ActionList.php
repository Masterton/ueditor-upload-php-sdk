<?php

/**
 * @author Masterton
 * @version 1.0.0
 * @time 2017-8-14 14:55:04
 */

namespace Ueditor;

class ActionList
{
    private $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function listFile($start=0, $size=0)
    {
        $allowFiles = $this->config['fileManagerAllowFiles'];
        $listSize = $this->config['fileManagerListSize'];
        $path = $this->config['fileManagerListPath'];

        /* 获取参数 */
        $size = $size == 0 ? $listSize : $size;
        $start = $start == 0 ? 0 : $start;
        $end = $start + $size;

        /* 获取文件列表 */
        $path = $this->config['DOCUMENT_ROOT'] . (substr($path, 0, 1) == "/" ? "":"/") . $path;
        $files = $this->getfiles($path, $allowFiles);

        if (!count($files)) {
            return [
                "state" => "no match file",
                "list" => [],
                "start" => $start,
                "total" => count($files)
            ];
        } else {
            /* 获取指定范围的列表 */
            $len = count($files);
            for ($i = min($end, $len) - 1, $list = array(); $i < $len && $i >= 0 && $i >= $start; $i--){
                $list[] = $files[$i];
            }
            //倒序
            //for ($i = $end, $list = array(); $i < $len && $i < $end; $i++){
            //    $list[] = $files[$i];
            //}

            /* 返回数据 */
            $result [
                "state" => "SUCCESS",
                "list" => $list,
                "start" => $start,
                "total" => count($files)
            ];
        }
    }

    public function listImage($start, $size)
    {
        $allowFiles = $this->config['imageManagerAllowFiles'];
        $listSize = $this->config['imageManagerListSize'];
        $path = $this->config['imageManagerListPath'];

        /* 获取参数 */
        $size = $size == 0 ? $listSize : $size;
        $start = $start == 0 ? 0 : $start;
        $end = $start + $size;

        /* 获取文件列表 */
        $path = $this->config['DOCUMENT_ROOT'] . (substr($path, 0, 1) == "/" ? "":"/") . $path;
        $files = $this->getfiles($path, $allowFiles);

        if (!count($files)) {
            return [
                "state" => "no match file",
                "list" => [],
                "start" => $start,
                "total" => count($files)
            ];
        } else {
            /* 获取指定范围的列表 */
            $len = count($files);
            for ($i = min($end, $len) - 1, $list = array(); $i < $len && $i >= 0 && $i >= $start; $i--){
                $list[] = $files[$i];
            }
            //倒序
            //for ($i = $end, $list = array(); $i < $len && $i < $end; $i++){
            //    $list[] = $files[$i];
            //}

            /* 返回数据 */
            $result [
                "state" => "SUCCESS",
                "list" => $list,
                "start" => $start,
                "total" => count($files)
            ];
        }
    }

    /**
     * 遍历获取目录下的指定类型的文件
     * @param $path
     * @param array $files
     * @return array
     */
    public function getfiles($path, $allowFiles, &$files = array())
    {
        if (!is_dir($path)) return null;
        if(substr($path, strlen($path) - 1) != '/') $path .= '/';
        $handle = opendir($path);
        while (false !== ($file = readdir($handle))) {
            if ($file != '.' && $file != '..') {
                $path2 = $path . $file;
                if (is_dir($path2)) {
                    getfiles($path2, $allowFiles, $files);
                } else {
                    if (preg_match("/\.(".$allowFiles.")$/i", $file)) {
                        $files[] = array(
                            'url'=> substr($path2, strlen($_SERVER['DOCUMENT_ROOT'])),
                            'mtime'=> filemtime($path2)
                        );
                    }
                }
            }
        }
        return $files;
    }
}