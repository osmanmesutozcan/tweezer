<?php

namespace Osmeoz\TurboLaravel;

class TurboBladeDirectives {
    public static function turboscripts($expression): string
    {
        return '<script src="https://unpkg.com/@hotwired/turbo@7.0.0-beta.1/dist/turbo.es5-umd.js"></script>';
    }

    public static function turboframe($id): string
    {
        return "<turbo-frame id={$id}>";
    }

    public static function endturboframe(): string
    {
        return "</turbo-frame>";
    }
}
