<?php
namespace App\Domains\Payments\Repositories;

use App\Domains\Payments\Contracts\PaymentsRepository as PaymentsRepositoryContract;
use App\Domains\Payments\Payment;
use Artesaos\Warehouse\AbstractCrudRepository;

class PaymentsRepository extends AbstractCrudRepository implements PaymentsRepositoryContract
{

    /**
     * @var Payment
     */
    protected $modelClass = Payment::class;

}
