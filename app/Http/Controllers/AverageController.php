<?php

namespace App\Http\Controllers;

use App\Models\Average;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Repositories\AverageRepository;

class AverageController extends Controller
{
    protected $AverageRepository;

    public function __construct(AverageRepository $AverageRepository)
    {
        $this->AverageRepository = $AverageRepository;
    }

    public function index(){
        $user = User::find(Auth::user()->id);
        $prices = $user->prices()->orderBy('updated_at','DESC')->paginate(8);
        return view('dashboard' , compact('prices'));
    }

    public function create(){
        return view('average.create');
    }

    public function edit($id){
        $price = Average::find($id);
        return view('average.edit' , compact('price'));
    }

    public function insert(Request $request){
        $this->AverageRepository->insert($request->only([
            'firstValue' ,
            'secondValue' ,
            'averageValue'
        ]));

        return redirect()->route('dashboard')->withSuccess(__('alerts.insertValues'));
    }

    public function update(Request $request ,$id){
        $this->AverageRepository->update($request->only([
            'firstValue' ,
            'secondValue' ,
            'averageValue'
        ]),$id);

        return redirect()->route('dashboard')->withSuccess(__('alerts.updateValues'));
    }

    public function delete($id){
        $this->AverageRepository->delete($id);

        return redirect()->back()->withSuccess(__('alerts.deleteValues'));
    }
}
