<?php
/**
 * Created by PhpStorm.
 * User: yaish
 * Date: 6/1/2020
 * Time: 2:31 PM
 */

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;
trait Multitenantable
{
    protected static function bootMultitenantable()
    {
        if (auth()->check()) {
            static::creating(function ($model) {
                $model->user_id = auth()->id();
            });

            static::addGlobalScope('user_id', function (Builder $builder) {
                if (auth()->check()) {
                   return $builder->where('user_id', auth()->id());
                }
            });
        }
    }
}