<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Database;
use Config\Services;
use Psr\Log\LoggerInterface;

/**
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 *
 * Extend this class in any new controllers:
 * ```
 *     class Home extends BaseController
 * ```
 *
 * For security, be sure to declare any new methods as protected or private.
 */
class BaseController extends Controller
{
    protected $helpers = ['form', 'url', 'array', 'base', 'seo'];
    protected $session;
    protected $data;
    protected $settings;

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);

        $db = Database::connect();
        $this->session = Services::session();

        $locale = $this->session->get('locale');
        if ($locale) {
            $this->request->setLocale($locale);
        }

        $this->settings = $this->db
            ->table('sys_system')
            ->select('key', 'value')
            ->orderBy('id', 'ASC')
            ->get()
            ->getResultArray();
    }
}
