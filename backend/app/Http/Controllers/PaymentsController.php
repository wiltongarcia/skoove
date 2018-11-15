<?php

namespace App\Http\Controllers;

use App\Domains\Payments\Contracts\PaymentsRepository;
use App\Domains\Payments\Contracts\RequestParser;
use App\Exceptions\RequestParser as RequestParserException;
use Illuminate\Http\Request;
use Response;

/**
 * PaymentsController Class
 *
 * @package \App\Http\Controllers
 * @author Wilton Garcia <wiltonog@gmail.com>
**/
class PaymentsController extends Controller
{
    /**
     * @var PaymentsRepository
     */
    private $repository;

    /**
     * @var RequestParser
     */
    private $parser;

    /**
     * PaymentsController constructor.
     * @param PaymentsRepository $repository
     * @param RequestParser      $parser
     */
    public function __construct(PaymentsRepository $repository,
        RequestParser $parser
    )
    {
        $this->repository = $repository;
        $this->parser = $parser;
    }

    /**
     * Create a new Payment
     * @param Request $request
     */
    public function create(Request $request)
    {
        try{
            $data = $this->parser->parse($request);
            $payment = $this->repository->create($data);
            return Response::json($payment, 201);
        } catch(RequestParserException $e) {
            return Response::json([
                'message' => $e->getMessage()
            ], 400);
        } catch(\Exception $e) {
            return Response::json([
                'message' => 'Internal Server Error'
            ], 500);
        }
    }
}
