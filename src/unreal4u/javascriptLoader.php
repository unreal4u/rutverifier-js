<?php

class javascriptLoader {
    public function loadJavascript() {
        return file_get_contents(realpath(dirname(__FILE__)).'/../../js/rutverifier.min.js');
    }
}
