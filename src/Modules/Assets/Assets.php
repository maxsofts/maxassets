<?php

namespace maxsofts\maxassets\Modules\Assets;

use maxsofts\maxassets\Modules\Contracts\Assets\AssetsBase;

class Assets extends AssetsBase
{

    /**
     *
     * set Css
     *
     * @param string $key
     * @param string $path
     * @return mixed|void
     */
    public function setCss($key, $path)
    {
        $css = array($key => $path);

        $this->css = array_merge($this->css, $css);
    }

    /**
     *
     * set multi css
     *
     * @param array $css | $css = array("key"=>"value",...)
     * @return mixed
     */
    public function setMultiCss($css)
    {
        $this->css = array_merge($this->css, $css);
    }

    /**
     * Get Css
     *
     * @return array
     */
    public function getCss()
    {
        return $this->css;
    }

    /**
     *
     * Set Js
     *
     * @param string $key
     * @param string $path
     * @return mixed|void
     */
    public function setJs($key, $path)
    {
        $js = array($key => $path);

        $this->js = array_merge($this->js, $js);
    }

    /**
     *
     * set multi js
     *
     * @param array $js | $css = array("key"=>"value",...)
     * @return mixed
     */
    public function setMultiJs($js)
    {
        $this->js = array_merge($this->js, $js);
    }


    /**
     *
     * Get Js
     *
     * @return array
     */
    public function getJs()
    {
        return $this->js;
    }
}