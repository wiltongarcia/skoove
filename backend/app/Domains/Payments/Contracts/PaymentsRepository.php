<?php

namespace App\Domains\Payments\Contracts;

use Artesaos\Warehouse\Contracts\BaseRepository;
use Artesaos\Warehouse\Contracts\Segregated\CrudRepository;

interface PaymentsRepository extends CrudRepository, BaseRepository
{
    //
}
