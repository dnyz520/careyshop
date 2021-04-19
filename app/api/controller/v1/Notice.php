<?php
/**
 * @copyright   Copyright (c) http://careyshop.cn All rights reserved.
 *
 * CareyShop    通知系统控制器
 *
 * @author      zxm <252404501@qq.com>
 * @version     v1.1
 * @date        2021/4/20
 */

namespace app\api\controller\v1;

use app\api\controller\CareyShop;

class Notice extends CareyShop
{
    /**
     * 方法路由器
     * @access protected
     * @return void
     */
    protected static function initMethod()
    {
        self::$route = [
            // 根据渠道获取事件列表
            'get.notice.event' => ['getNoticeEvent', \app\careyshop\model\NoticeEvent::class],
        ];
    }
}
