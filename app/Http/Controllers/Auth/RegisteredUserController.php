<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Transfer;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
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
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', Rules\Password::defaults()],
            'gender' => 'required',
        ]);
        $cardnumber = rand(10000000000000, 99999999999999);
        $cvc = rand(100, 999);
        $rib = mt_rand((int) 100000000000000000000000, (int) 999999999999999999999999);
        $date_exp = Carbon::now()->addYears(5);
        
        // $totalBalance = 0;
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
        ]);
        Card::create([
            'user_id' => $user->id,
            'card_number' => $cardnumber,
            'cvc' => $cvc,
            'rib' => $rib,
            'money' => 1500,
            'date_expiration' => $date_exp,
            'money' => 1500,
        ]);

        // foreach ($user->cards as $card) {
        //     $totalBalance += $card->money;
        // }

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('card.show', absolute: false));
    }
}
