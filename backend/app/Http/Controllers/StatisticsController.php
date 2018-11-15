<?php

namespace App\Http\Controllers;

use App\Domains\Payments\Contracts\PaymentsRepository;
use Illuminate\Http\Request;
use Response;

/**
 * StatisticsController Class
 *
 * @package \App\Http\Controllers
 * @author Wilton Garcia <wiltonog@gmail.com>
**/
class StatisticsController extends Controller
{
    /**
     * @var PaymentsRepository
     */
    private $repository;

    /**
     * StatisticsController constructor.
     * @param PaymentsRepository $repository
     */
    public function __construct(PaymentsRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Create a new Payment
     * @param Request $request
     */
    public function index()
    {
        try{
            $datetime = \Carbon\Carbon::now()->subSeconds(60);
            $statistics = $this->repository->statistics($datetime);
            return Response::json([
                'total_amount' => number_format($statistics['total_amount'], 2),
                'avg_amount' => number_format($statistics['avg_amount'], 2)
            ], 200);
        } catch(\Exception $e) {
            return Response::json([
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
