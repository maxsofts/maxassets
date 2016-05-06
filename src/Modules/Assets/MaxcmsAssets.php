<?php

namespace maxsofts\maxcms\Modules\Assets;

use maxsofts\maxcms\Modules\Helper\ArrayHelper;

class MaxcmsAssets extends Assets
{

    /**
     *
     * HTML styles
     *
     * @var Styles HTML
     */
    protected $styles;

    /**
     *
     * HTML scripts
     *
     * @var Script HTML
     */
    protected $scripts;


    /**
     *
     * set style and script by config array
     *
     * @param array $config
     */
    public function initAssetsConfig($config)
    {
        /*
         * Set css
         */
        $cssBase = ArrayHelper::search_keys_exits($config, 'css');

        $cssList = array();
        foreach ($cssBase as $value) {
            $cssList = array_merge($config[$value], $cssList);
        }

        $this->setStyles($cssList);

        /*
         * Set JS
         */
        $jsBase = ArrayHelper::search_keys_exits($config, 'js');

        $jsList = array();

        foreach ($jsBase as $value) {
            $jsList = array_merge($config[$value], $jsList);
        }

        $this->setScripts($jsList);

    }


    /**
     *
     * Set style HTML
     *
     * @param Array $css
     */
    public function setStyles($css)
    {
        $styles = "\n";

        foreach ($css as $key => $value) {
            $styles .= "<link rel='stylesheet' id='$key'  href='$value' type='text/css' media='all' />\n";
        }

        $this->styles .= $styles;
    }

    /**
     *
     * Set Script HTML
     *
     * @param Array $js
     */
    public function setScripts($js)
    {
        $scripts = "\n";

        foreach ($js as $key => $value) {
            $scripts .= "<script type='text/javascript' src='$value'></script>\n";
        }

        $this->scripts .= $scripts;
    }


    /**
     *
     * get Styles
     *
     * @return HTML Styles
     */
    public function getStyles()
    {
        return $this->styles;
    }

    /**
     *
     * get Scripts
     *
     * @return HTML Script
     */
    public function getScripts()
    {
        return $this->scripts;
    }


    /**
     *
     * Add style by css
     *
     * @param string $key
     * @param string $path
     * @return mixed|void
     */
    public function setCss($key, $path)
    {
        parent::setCss($key, $path);

        $this->setStyles($this->getCss());
    }

    /**
     *
     * Add Script by js
     *
     * @param string $key
     * @param string $path
     * @return mixed|void
     */
    public function setJs($key, $path)
    {
        parent::setJs($key, $path);

        $this->setScripts($this->getJs());
    }

    /**
     *
     * Add multi by array css
     *
     * @param array $css
     * @return mixed|void
     */
    public function setMultiCss($css)
    {
        parent::setMultiCss($css);

        $this->setStyles($this->getCss());

    }

    /**
     *
     * Add multi by array js
     *
     * @param array $js
     * @return mixed|void
     */
    public function setMultiJs($js)
    {
        parent::setMultiJs($js);

        $this->setScripts($this->getJs());
    }
}