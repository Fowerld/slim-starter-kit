<?php
namespace App\Controller;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Interop\Container\ContainerInterface;

class IndexController
{
    /**
     *
     * @var ContainerInterface
     */
    private $container;

    /**
     *
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * Hello world action
     *
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param array $args
     * @return ResponseInterface
     */
    public function helloworld(ServerRequestInterface $request, ResponseInterface $response, array $args):ResponseInterface
    {
        return $response->withJson("Hello world!", 200);
    }

    /**
     * Welcom action
     *
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param array $args
     * @return ResponseInterface
     */
    public function welcome(ServerRequestInterface $request, ResponseInterface $response, array $args):ResponseInterface
    {
        $name = $args['name'];
        return $response->withJson("Welcome $name", 200);
    }
}
