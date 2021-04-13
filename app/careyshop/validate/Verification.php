<?php
/**
 * @copyright   Copyright (c) http://careyshop.cn All rights reserved.
 *
 * CareyShop    验证码验证器
 *
 * @author      zxm <252404501@qq.com>
 * @date        2017/7/20
 */

namespace app\careyshop\validate;

class Verification extends CareyShop
{
    /**
     * 验证规则
     * @var string[]
     */
    protected $rule = [
        'mobile' => 'number|length:7,15',
        'email'  => 'email|max:60',
        'code'   => 'integer|max:6',
        'number' => 'max:60',
    ];

    /**
     * 字段描述
     * @var string[]
     */
    protected $field = [
        'mobile' => '手机号',
        'email'  => '邮箱地址',
        'code'   => '验证码',
        'number' => '手机号或邮箱地址',
    ];

    /**
     * 场景规则
     * @var string[]
     */
    protected $scene = [
        'sms'   => [
            'mobile' => 'require|number|length:7,15',
        ],
        'email' => [
            'email' => 'require|email|max:60',
        ],
        'check' => [
            'number' => 'require|max:60',
        ],
    ];
}
