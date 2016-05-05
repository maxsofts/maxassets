<?php
namespace maxsofts\maxcms\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Http\Requests;
use maxsofts\maxcms\Modules\Assets\Assets;

class MaxAdminController extends Controller
{
    public function index()
    {
        $value = config('maxcms.core.asset');

        $asset = new Assets();


        $asset->setMultiCss($value['maxcms_asset_require_css']);

        $asset->setMultiJs($value['maxcms_asset_require_js']);

        $asset->setMultiJs($value['maxcms_asset_js_admin']);

        $asset->setMultiCss($value['maxcms_asset_css_admin']);
        $data = [
            'css' => $asset->getCss(),
            'js' => $asset->getJs()
        ];
        /**
         * Sample asset
         */
        return view('maxcms::admin')->with("data",$data);
    }
}
