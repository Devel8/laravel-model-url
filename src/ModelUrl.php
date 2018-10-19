<?php

namespace Devel8\LaravelModelUrl;

use Illuminate\Database\Eloquent\Model;
use Config;

/**
 * Class ActionTracker.
 *
 * @package namespace App\Entities;
 */
class ModelUrl extends Model
{

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function modelUrl(){
        return $this->morphTo();
    }
}
