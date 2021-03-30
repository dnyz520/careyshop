<?php
/**
 * @copyright   Copyright (c) http://careyshop.cn All rights reserved.
 *
 * CareyShop    服务层基类
 *
 * @author      zxm <252404501@qq.com>
 * @date        2020/7/21
 */

namespace app\careyshop\service;

class CareyShop
{
    /**
     * 控制器版本号
     * @var string
     */
    public string $version = 'v1';

    /**
     * 错误信息
     * @var string
     */
    public string $error = '';

    /**
     * 设置错误信息
     * @access public
     * @param string $value 错误信息
     * @return false
     */
    public function setError(string $value): bool
    {
        $this->error = $value;
        return false;
    }

    /*
     * 获取错误信息
     * @access public
     * @return string
     */
    public function getError(): string
    {
        return $this->error;
    }
}
