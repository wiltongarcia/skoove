<?php
namespace App\Domains\Payments\Repositories;

use App\Domains\Payments\Contracts\PaymentsRepository as PaymentsRepositoryContract;
use App\Domains\Payments\Payment;
use Artesaos\Warehouse\AbstractCrudRepository;

/**
 * PaymentsRepository Class
 *
 * @package \App\Domains\Payments\Repositories
 * @author Wilton Garcia <wiltonog@gmail.com>
**/
class PaymentsRepository extends AbstractCrudRepository implements PaymentsRepositoryContract
{
    /**
     * @var \App\Domains\Payments\Payment
     */
    protected $modelClass = Payment::class;
}
