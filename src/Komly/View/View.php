<?php namespace Komly/View;

/**
    Simple template engine for PHP
*/
class View {
    
    protected $template;

    protected $data;

    protected $multilang;

    public function __construct($template, $data = array(), Multilang $multilang = null)
    {
            $this->template  = $template;
            $this->data      = $data;
            $this->multilang = $multilang;
    }
    
    public function setData($data) {
        $this->data = $data;
    }

    public function setMultilang($multilang) {
        $this->multilang = $multilang;
    }

    public function render()
    {
        $data = $this->data;
        $template = $this->template;
        if ($this->multilang) {
            $template = preg_replace_callback('/%\s*(\w+)\s*%/', function($matches) use ($multilang) {
                return $multilang->translate($match[1]);
            });
        }

        $result = preg_replace_callback('/{{\s*(\w+)\s*}}/', function($matches) use ($data) {
            return $data[$matches[1]];
        }, $template);

        return $result;
    }
}
