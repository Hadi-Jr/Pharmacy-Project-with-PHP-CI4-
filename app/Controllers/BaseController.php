<?php

namespace App\Controllers;

use App\Models\CategoriesModel;
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
    protected $categories;

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);

        $db = Database::connect();
        $this->session = Services::session();

        $this->categoriesModel = new CategoriesModel($db);

        $locale = $this->session->get('locale');
        if ($locale) {
            $this->request->setLocale($locale);
        } else {
            $this->session->set('locale', config('app')->defaultLocale);
        }

        $this->settings = $db
            ->table('sys_settings')
            ->select('key, value')
            ->orderBy('id', 'ASC')
            ->get()
            ->getResultArray();

        $categories = $this->categoriesModel
            ->get_all_categories();

        $categoryTree = $this->buildCategoryTree($categories);

        $this->data = [
            'settings' => $this->settings,
            'categories' => $categoryTree
        ];
    }

    public function buildCategoryTree($categories, $parent_id = null)
    {
        $categoryTree = [];

        foreach ($categories as $category) {
            if ($category->parent_id == $parent_id) {

                $children = $this->buildCategoryTree($categories, $category->id);

                if ($children) {
                    $category->children = $children;
                } else {
                    $category->children = [];
                }

                $categoryTree[] = $category;
            }
        }
        return $categoryTree;
    }
}
