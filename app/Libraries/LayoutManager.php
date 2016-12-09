<?php
namespace App\Libraries;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class LayoutManager
{
    /**
     * @var LayoutManager
     */
    private static $instance;

    private $data = [];

    /**
     * LayoutManager constructor.
     * @param Request|null $request
     */
    private function __construct(Request $request = null)
    {
        $this->initialize();
    }

    /**
     * @param Request|null $request
     * @return LayoutManager
     */
    public static function getInstance(Request $request = null)
    {
        if(is_null(self::$instance)) {
            self::$instance = new LayoutManager($request);
        }

        return self::$instance;
    }

    public function initialize(){
        $this->setData('route_name', Route::getCurrentRoute()->getName())
            ->setData('base_url', config('app.url'))
            ->setData($this->getSeoData($this->getData('route_name')));
    }

    public function getData($key = null)
    {
        if ($key !== null && isset($this->data[$key])) {
            return $this->data[$key];
        }

        return $this->data;
    }

    public function setData($key, $value = null)
    {
        if (is_array($key)) {
            foreach ($key as $item=>$val) {
                $this->data[$item] = $val;
            }

            return $this;
        }

        $this->data[$key] = $value;
        return $this;
    }

    protected function getSeoData($route_name)
    {
        switch ($route_name) {
            case 'login':
                return [
                    'title' => 'login',
                    'meta_description' => 'login page kurir website'
                ];
                break;
            case 'register':
                return [
                    'title' => 'register',
                    'meta_description' => 'register page kurir website'
                ];
                break;
            case 'dashboard':
                return [
                    'title' => 'dashboard',
                    'meta_description' => 'dashboard page kurir website'
                ];
                break;
            default:
                return [
                    'title' => 'kurir',
                    'meta_description' => 'kurir website simple'
                ];
                break;
        }
    }
}
