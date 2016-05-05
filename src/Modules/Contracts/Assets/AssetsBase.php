<?php

namespace maxsofts\maxcms\Modules\Contracts\Assets;


abstract class AssetsBase{

    /**
     * @var array css
     */
    protected $css = array();

    /**
     * @var array js
     */
    protected $js = array();
    /**
     *
     * set Css
     *
     * @param string $key
     * @param string $path
     * @return mixed|void
     */
    abstract public function setCss($key,$path);

    /**
     *
     * set multi css
     *
     * @param array $css | $css = array("key"=>"value",...)
     * @return mixed
     */
    abstract public function setMultiCss($css);

    /**
     *
     * get Css
     *
     * @return mixed
     */
    abstract public function getCss();

    /**
     * Set Js
     *
     * @param string $key
     * @param string $path
     * @return mixed
     */
    abstract public function setJs($key,$path);

    /**
     *
     * set multi js
     *
     * @param array $js | $css = array("key"=>"value",...)
     * @return mixed
     */
    abstract public function setMultiJs($js);

    /**
     *
     * get Js
     *
     * @return mixed
     */
    abstract public function getJs();
}
