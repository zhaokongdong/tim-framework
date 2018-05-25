<?php

namespace App\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;

/**
 * Class IndexController
 * @package App\Controllers
 */
class IndexController extends Controller
{
    public function index(Request $request, Response $response)
    {
        $response->getBody()->write("Hello, world");
        return $response;
    }
}