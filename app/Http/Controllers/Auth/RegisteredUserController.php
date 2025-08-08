<?php

namespace App\Http\Controllers\Auth;

use App\Events\Frontend\UserRegistered;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Modules\School\Models\School;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $schools = School::all()->pluck('name', 'id')->toArray();
        $respondent_types = DB::table('respondenttypes')
        // ->whereIn('id',[1,3])
        ->pluck('name', 'id')->toArray();
        return view('auth.register', compact('schools', 'respondent_types'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'school_id' => ['required', 'exists:schools,id'],
            'respondent_type_id' => ['required', 'exists:respondenttypes,id'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'school_id' => $request->school_id,
            'respondent_type_id' => $request->respondent_type_id,
            'email_verified_at' => now(),
            'is_active' => true,
            'password' => Hash::make($request->password),
        ]);

        // username
        $username = intval(config('app.initial_username')) + $user->id;
        $user->username = strval($username);
        $user->save();

        event(new UserRegistered($request, $user));

        Auth::login($user);

        return redirect(route('home'));
    }

    /**
     * Retrieves a list of items based on the search term.
     *
     * @param  Request  $request  The HTTP request object.
     * @return JsonResponse The JSON response containing the list of items.
     */
    public function index_list(Request $request)
    {

        $term = trim($request->q);

        if (empty($term)) {
            return response()->json([]);
        }

        $query_data = School::where('name', 'LIKE', "%{$term}%")->limit(7)->get();

        $schools = [];

        foreach ($query_data as $row) {
            $schools[] = [
                'id' => $row->id,
                'text' => $row->name,
            ];
        }

        return response()->json($schools);
    }
}
