<?php

namespace App\Domains\Payments\Contracts;
use Illuminate\Http\Request;

/**
 * RequestParser Contract
 *
 * @package \App\Domains\Payments\Contracts
 * @author Wilton Garcia <wiltonog@gmail.com>
**/
interface RequestParser
{
    public function parse(Request $request);
}
