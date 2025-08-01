<?php

namespace Modules\School\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

    /**
     * Retrieves a list of items based on the search term.
     *
     * @param  Request  $request  The HTTP request object.
     * @return JsonResponse The JSON response containing the list of items.
     */
    public function index_list(Request $request)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $term = trim($request->q);

        if (empty($term)) {
            return response()->json([]);
        }

        $query_data = $module_model::where('name', 'LIKE', "%{$term}%")->limit(7)->get();

        $$module_name = [];

        foreach ($query_data as $row) {
            $$module_name[] = [
                'id' => $row->id,
                'text' => $row->name,
            ];
        }

        return response()->json($$module_name);
    }

}
