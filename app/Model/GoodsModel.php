<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class GoodsModel extends Model
{
    //

    protected $table="p_order_goods";
    protected $primaryKey ="rec_id";
    //关闭时间戳
    public $timestamps=false;

    // 黑名单属性
    protected $guarded=[];



}
