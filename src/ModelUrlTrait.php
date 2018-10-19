<?php


namespace Devel8\LaravelModelUrl;

use Config;

/**
 * Trait ModelUrlTrait
 * @package Devel8\LaravelModelUrl
 */
trait ModelUrlTrait
{

    /**
     * @return mixed
     */
    public function url(){
        return $this->morphMany(Config::get('model-url.model'), 'model_url');
    }

    /**
     * @return mixed
     */
    public function generateUrl(){

        $prefix = Config::get('action-tracker.prefix');

        $hashids = new Hashids(Config::get('model-url.url-format.hash'), Config::get('model-url.url-format.length'));
        $hashids->encode($this->getKey());

        $modelUrl = [
            $prefix.'_type' => $this->getMorphClass(),
            $prefix.'_id' => $this->getKey(),
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime(),
        ];

        return $this->modelUrl()->insert($modelUrl);
    }

}