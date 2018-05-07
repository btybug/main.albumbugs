<?php

namespace Btybug\Uploads\Repository;

use Btybug\btybug\Repositories\GeneralRepository;
use Btybug\Uploads\Models\Assets;

class AssetsRepository extends GeneralRepository
{
    /**
     * @return mixed
     */

    public function model ()
    {
        return new Assets();
    }
}