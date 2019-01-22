<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Tag.
 *
 * @package namespace App\Entities;
 */
class Tag extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function events()
    {
        return $this->belongsToMany(Event::class);
    }

}