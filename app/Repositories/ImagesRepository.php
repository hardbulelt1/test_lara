<?php
/**
 * Class ImagesRepositry
 * @author: Denis Medvedevskih d.medvedevskih@velosite.ru
 */

namespace App\Repositories;


use App\Model\Images;

class ImagesRepository extends Repository
{
    /**
     * ImagesRepository constructor.
     * @param Images $model
     */
    public function __construct(Images $model)
    {
        parent::__construct($model);
    }
}
