<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Api\MovementsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Movements;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('auth.dashboard');
    }

    public function categories()
    {
        $userId = Auth::user()->id;
        $category = Category::where('idUser', (string) $userId )->get();
        return view('auth.categories', compact('category'));
    }
    public function expenses()
    {
        $movementsController = new MovementsController();
        $userId = Auth::user()->id;
        $expense = $movementsController->shownegative($userId);
        return view('auth.expenses', compact('expense'));
    }
    public function income()
    {
        $movementsController = new MovementsController();
        $userId = Auth::user()->id;
        $income = $movementsController->showpositive($userId);
        return view('auth.income', compact('income'));
    }
}
