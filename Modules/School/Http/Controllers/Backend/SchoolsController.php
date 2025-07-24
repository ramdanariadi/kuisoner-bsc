<?php

namespace Modules\School\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class SchoolsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Schools';

        // module name
        $this->module_name = 'schools';

        // directory path of the module
        $this->module_path = 'school::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\School\Models\School";
    }

}
