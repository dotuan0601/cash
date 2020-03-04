<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
class Category extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * Category has many Products
     */

    /**
     * Category has many Categories
     */
    public function subs()
    {
        return $this->hasMany('App\Category', 'parent_id','id');
    }

    public function subsRecursive()
    {
        return $this->subs()->with('subsRecursive');
    }

    /**
     * Category belongs to Category
     */
    public function parent()
    {
        return $this->belongsTo('App\Category', 'parent_id');
    }

    public function getPathAttribute()
    {
        if ($this->parent) {
            return $this->parent->getPathAttribute() . '/' . $this->name;
        } else {
            return $this->name;
        }
    }
    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function posts(){
        return $this->belongsToMany('App\Post');
    }

    public function children()
    {
        return Category::where('parent_id', $this->id)->get();
    }
}
