<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    //protected $table = 'user_articles';
    //protected $primaryKey = 'article_id';
    //public $incrementing = false;

    // public $timestamps = false;
    // public const CREATED_AT = 'created';
    // public const UPDATED_AT = 'updated';

    // protected $dates = ['activated_at', 'updated_at', 'created_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getTitleDescriptionAttribute($value)
    {
        return $this->title  . ' ' . $this->description;
    }
}
