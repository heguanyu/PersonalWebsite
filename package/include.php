<?php
require_once "package.php";

class Inclusion {
    public static function includeCss($file) {
        $package = new Package($file, getenv('SYSTEM_ROOT'), getenv('DOCUMENT_ROOT'), getenv('ASSETS_DOMAIN'));
        print $package->getCssHtml();
    }

    public static function includeJs($file) {
        $package = new Package($file, getenv('SYSTEM_ROOT'), getenv('DOCUMENT_ROOT'), getenv('ASSETS_DOMAIN'));
        print $package->getJsHtml();
    }

    public static function includeFs($file) {
        $package = new Package($file, getenv('SYSTEM_ROOT'), getenv('DOCUMENT_ROOT'), getenv('ASSETS_DOMAIN'));
        print $package->getFsHtml();
    }

    public static function includeVs($file) {
        $package = new Package($file, getenv('SYSTEM_ROOT'), getenv('DOCUMENT_ROOT'), getenv('ASSETS_DOMAIN'));
        print $package->getVsHtml();
    }
}
?>