<?php
namespace maxsofts\maxcms\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use maxsofts\maxcms\Modules\Assets\MaxcmsAssets;

class MaxAdminController extends Controller
{
    public $styles;
    public $scripts;

    public function __construct()
    {
        $config = config('maxcms.core.asset');

        $asset = new MaxcmsAssets();

        $asset->initAssetsConfig($config);

        $asset->setCss("test","path");

        $this->styles = $asset->getStyles();
        $this->scripts = $asset->getScripts();
    }

    public function index()
    {

        /**
         * Sample asset
         */
        return view('maxcms::admin')
            ->with('styles',$this->styles)
            ->with('scripts',$this->scripts);
    }
}
