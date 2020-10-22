<?php
/**
 * @copyright   Copyright (c) http://careyshop.cn All rights reserved.
 *
 * CareyShop    WeChat 服务层基类
 *
 * @author      zxm <252404501@qq.com>
 * @date        2020/10/19
 */

namespace app\common\wechat\service;

use app\common\wechat\Params;
use app\common\wechat\WeChat;

class CareyShop
{
    /**
     * 控制器版本号
     * @var string
     */
    public $version = 'v1';

    /**
     * 错误信息
     * @var string
     */
    public $error = '';

    /**
     * WeChat 实列
     * @var mixed|null
     */
    private $wechat = null;

    /**
     * 外部请求参数容器
     * @var mixed|null
     */
    public $params = null;

    /**
     * CareyShop constructor.
     * @access public
     * @param array $params
     */
    public function __construct(array $params = [])
    {
        $this->initWeChat($params);
    }

    /**
     * 实际创建 WeChat 实列
     * @access public
     * @param array $params 请求参数
     * @return $this
     * @throws
     */
    public function initWeChat(array $params)
    {
        if (isset($params['code'])) {
            $this->params = new Params($params);
            $this->wechat = (new WeChat($params['code']))->getApp();
        }

        return $this;
    }

    /**
     * 获取 WeChat 实例化
     * @access public
     * @param string $plate 板块名称
     * @return mixed
     * @throws
     */
    public function getApp(string $plate)
    {
        if (!$this->wechat) {
            throw new \Exception('WeChat未实例化');
        }

        return $this->wechat->$plate;
    }

    /**
     * 设置错误信息
     * @access public
     * @param string $value 错误信息
     * @return false
     */
    public function setError(string $value)
    {
        $this->error = $value;
        return false;
    }

    /*
     * 获取错误信息
     * @access public
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }
}
