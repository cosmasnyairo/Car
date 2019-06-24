<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
class CarController extends Controller
{
    public function allcars(){
        $cars = Car::all();
        return view('allcars',['cars'=> $cars]);
    }
    public function newcar(Request $request){
        $this->validate($request,[
            'make' => 'required|unique:cars',
            'model' => 'required',
            'date' => 'required'
        ]);
        $car = new Car();
        $car->make = $request->make;
        $car->model = $request->model;
        $car->produced_on = $request->date;

        $car->save();
        return back();
    }

    public function particularcar($id){
        $car = Car::find($id);
        return $car->reviews;

    }

}