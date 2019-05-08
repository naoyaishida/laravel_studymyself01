<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // protected $fillable =['name','email','active'];
    // バリデーションをつけたらモデルに必ず記載する
    protected $fillable = ['name','email','active','company_id'];

    // 他でも何回も同じことが起きる場合はモデルに書けば問題解決
    
    public function getActiveAttribute($attribute)
    {
        return [
            0 => 'Inactive',
            1 => 'active',
        ][$attribute];
    }
    // 条件を分岐させる情報を記載
    public function scopeActive($query)
    {
        return $query->where('active',1);
    }

    public function scopeInactive($query)
    {
        return $query->where('active',0);
    }

    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}
