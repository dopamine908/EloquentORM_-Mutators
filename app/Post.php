<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'OneToManyPost';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'OneToManyPostId';

    /**
     * 定義存取器
     * 其中 UserIid 是你想要存取的欄位，並要使用「駝峰式」命名
     * 當 Eloquent 在嘗試取得 UserIid / user_iid 屬性的值時
     * 該存取器就會自動被呼叫
     *
     * @return string
     */
    public function getUserIidAttribute() {
        return 'User'.$this->attributes['UserId'].'-iid-edit';

    }

    /**
     * 定義存取器
     * 其中 UserId 是你想要存取的欄位，並要使用「駝峰式」命名
     * 當 Eloquent 在嘗試取得 UserId / user_id 屬性的值時
     * 該存取器就會自動被呼叫
     *
     * @return string
     */
    public function getUserIdAttribute($value) {
        return 'User'.$value.'-edit';

    }

    /**
     * 定義存取器
     * 其中 FullData 是你想要存取的欄位，並要使用「駝峰式」命名
     * 當 Eloquent 在嘗試取得 FullData / full_data 屬性的值時
     * 該存取器就會自動被呼叫
     *
     * @return string
     */
    public function getFullDataAttribute() {
        return $this->UserId.'----'.$this->Post;
    }

    /**
     * 定義修改器
     * 修改器用在資料保存到資料庫之前進行一定處理
     * 滿足需求後再存到資料庫
     * 指定Post值之後會觸發
     * Post都轉成小寫存至資料庫
     * @param $value
     */
    public function setPostAttribute($value) {
        $this->attributes['Post'] = strtolower($value);
    }

    /**
     * 定義修改器
     * 修改器用在資料保存到資料庫之前進行一定處理
     * 滿足需求後再存到資料庫
     * 指定UserId值之後會觸發
     * UserId都+1存至資料庫
     * @param $value
     */
    public function setUserIdAttribute($value) {
        $this->attributes['UserId'] = $value+1;
    }
}
