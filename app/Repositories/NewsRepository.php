<?php

namespace App\Repositories;


use App\Model\News;

class NewsRepository extends Repository
{
    /**
     * NewsRepository constructor.
     * @param News $model
     */
    public function __construct(News $model)
    {
        parent::__construct($model);
    }
}
