<?php namespace Laracsv\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id'];

    protected $hidden = ['id', 'parent_id', 'image_path', 'order_index', 'status', 'created_at', 'updated_at'];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
