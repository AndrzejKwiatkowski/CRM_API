<?php

namespace App\Entities;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Attachment.
 *
 * @package namespace App\Entities;
 */
class Attachment extends Model implements Transformable
{
    use TransformableTrait;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'source'];
    protected $dates = ['deleted_at'];
    public function events()
    {
return $this->belongsToMany(Event::class)->withTimestamps();
    }


}
