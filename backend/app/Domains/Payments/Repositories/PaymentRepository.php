<?php
namespace App\Domains\Payments\Repositories;

use App\Domains\Payments\Contracts\PaymentsRepository as PaymentsRepositoryContract;
use App\Domains\Payments\Payment;
use Artesaos\Warehouse\AbstractCrudRepository;
use DB;

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

    /**
     * undocumented function
     *
     * @return void
     * @author yourname
     **/
    public function statistics(string $datetime)
    {
        return $this->newQuery()
            ->select(DB::raw('COALESCE(SUM(amount), 0) as total_amount'),
                DB::raw('COALESCE(AVG(amount), 0) as avg_amount')
            )
            ->where('updated_at', '>=', $datetime)
            ->first();
    }
}
