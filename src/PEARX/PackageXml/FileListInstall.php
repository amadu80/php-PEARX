<?php
/**
 * This file is part of the Onion package.
 *
 * (c) Yo-An Lin <cornelius.howl@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */
namespace PEARX\PackageXml;

class FileListInstall
{
    public $file;
    public $as;

    public function __construct($file,$as = null)
    {
        $this->file = $file;
        $this->as = $as;
    }
}


