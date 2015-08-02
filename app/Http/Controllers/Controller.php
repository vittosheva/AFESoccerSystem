<?php

namespace AfeSoccerSystem\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests;

    public $website;

    public function __construct()
    {
        // Show website name in title
        if (\Config::get('settings.showWebsiteInTitle')) {
            $this->website = ' | '.\Config::get('settings.website');
        } else {
            $this->website = "";
        }
    }
}
