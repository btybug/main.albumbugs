<?php

namespace Btybug\Uploads\Repository;

use Btybug\btybug\Repositories\GeneralRepository;
use Btybug\Uploads\Models\AppProduct;

class AppProductRepository extends GeneralRepository
{
    /**
     * @return mixed
     */

    public function model ()
    {
        return new AppProduct();
    }
}