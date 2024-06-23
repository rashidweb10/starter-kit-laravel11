<?php

namespace Modules\Dummy\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class DummiesController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Dummies';

        // module name
        $this->module_name = 'dummies';

        // directory path of the module
        $this->module_path = 'dummy::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\Dummy\Models\Dummy";
    }

}
