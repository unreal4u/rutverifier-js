<?php

/**
 * Main class, can load in the Javascript file and return it
 *
 * @author unreal4u
 */
namespace unreal4u;

/**
 * Class itself
 */
class javascriptLoader {
    /**
     * Returns a function in JavaScript, a bit easier than it's PHP version to verify that the RUT is correct
     *
     * @param boolean $printIt Whether to print it directly
     * @param boolean $withHeaders To output javascript headers also or return only javascript
     */
    public function constructJavascript($printIt=false, $withHeaders=false) {
        $javascript = file_get_contents(realpath(dirname(__FILE__)).'/../../dist/rutverifier.min.js');

        if ($withHeaders === true) {
            $javascript = '<script type="text/javascript">'.$javascript.'</script>';
        }

        if ($printIt === true) {
            echo $javascript;
        }

        return $javascript;
    }
}
