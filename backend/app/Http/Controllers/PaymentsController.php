<?php

namespace App\Http\Controllers;

use App\Domains\Payments\Contracts\PaymentsRepository;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    /**
     * @var PaymentsRepository
     */
    private $repository;

    /**
     * PaymentsController constructor.
     * @param PaymentsRepository $repository
     */
    public function __construct(PaymentsRepository $repository)
    {
        $this->repository = $repository;
    }
}
