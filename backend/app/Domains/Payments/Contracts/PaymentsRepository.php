<?php

namespace App\Domains\Payments\Contracts;

use Artesaos\Warehouse\Contracts\BaseRepository;
use Artesaos\Warehouse\Contracts\Segregated\CrudRepository;

/**
 * PaymentsRepository Contract
 *
 * @package \App\Domains\Payments\Contracts
 * @author Wilton Garcia <wiltonog@gmail.com>
**/
interface PaymentsRepository extends CrudRepository, BaseRepository
{
}
