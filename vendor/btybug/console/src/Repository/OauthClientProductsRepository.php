<?php
/**
 * Created by PhpStorm.
 * User: Sahak/Edo
 * Date: 8/8/2016
 * Time: 1:31 PM
 */

namespace Btybug\Console\Repository;

use Btybug\btybug\Repositories\GeneralRepository;
use Btybug\Console\Models\OauthClientProducts;

/**
 * Class OauthClientProductsRepository
 * @package Btybug\Console\Repository
 */
class OauthClientProductsRepository extends GeneralRepository
{


    /**
     * @return AdminPages
     */
    public function model()
    {
        return new OauthClientProducts();
    }

}