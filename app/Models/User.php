<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent 模型类，默认使用user负数表
 * Class User
 * @package App\Models
 */
class User extends Model
{
    /**
     * 数据库连接设置
     * @var string
     */
    protected $connection = 'default';

}