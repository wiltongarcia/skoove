<?php

namespace App\Domains\Payments\Services;

use App\Domains\Payments\Contracts\RequestParser as RequestParserContract;
use App\Exceptions\RequestParser as RequestParserException;
use Illuminate\Http\Request;

/**
 * RequestParser Class
 *
 * @package \App\Domains\Payments\Services
 * @author Wilton Garcia <wiltonog@gmail.com>
**/
class RequestParser implements RequestParserContract
{
    public function parse(Request $request)
    {
        $content = $request->getContent();
        if (empty($content)) {
            throw new RequestParserException('Empty Payload');
        }

        $data = json_decode($content, true);
        if (!empty(json_last_error())) {
            throw new RequestParserException('Wrong Payload');
        }

        return $data;
    }
}
