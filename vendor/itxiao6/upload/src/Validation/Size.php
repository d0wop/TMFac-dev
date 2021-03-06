<?php
namespace Itxiao6\Upload\Validation;
use Itxiao6\Upload\Validation\Base;
use Itxiao6\Upload\Exception\UploadException;

/**
 * 文件大小验证
 * Class Size
 * @package Itxiao6\Upload\Validation
 */
class Size implements Base
{
    /**
     * 错误信息
     * @var null | string
     */
    protected $Message = null;
    /**
     * 文件大小
     * @var null | string
     */
    protected $fileSize = null;
    /**
     * 文件最大尺寸
     * @var null | string
     */
    protected $MaxSize = null;
    /**
     * 文件最小尺寸
     * @var null | string
     */
    protected $MinSize = null;

    /**
     * 构造方法
     * Size constructor.
     * @param int $MaxSize
     * @param int $MinSize
     */
    public function __construct($MaxSize=2000,$MinSize=1)
    {
        $this -> MaxSize = $MaxSize;
        $this -> MinSize = $MinSize;
    }

    /**
     * 获取错误消息
     */
    public function getMessage()
    {
        return $this -> Message;
    }

    /**
     * 验证
     * @param $file
     * @return bool
     */
    public function validation($file)
    {
        # 获取文件大小
        $this -> fileSize = ceil(filesize($file['tmp_name'])/1024); //转为kb
        if($this -> fileSize > $this -> MaxSize){
            $this -> Message = '文件超出最大的尺寸的限制:'.$this -> MaxSize.'kb';
            # 抛出异常
            throw new UploadException($this->getMessage());
        }
        if($this -> fileSize < $this -> MinSize){
            $this -> Message = '文件低于最小的尺寸的限制:'.$this -> MinSize.'kb';
            throw new UploadException($this->getMessage());
        }
        return true;
    }
}
