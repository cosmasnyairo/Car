<?php

namespace App\Http\Controllers;

use App\Car;
use App\Review;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{


    public function review(Car $car){

        $reviews = Review::all()->where('car_id',$car->id);
        return view('reviews', compact('car','reviews'));

    }
    public function store(Request $request){

        $review= new Review();
        $review->review = $request->review;
        $review->car_id = $request->carid;


        $review->save();

        return back();

    }
    public function allreviews(){
        $reviews = Review::all();

        return view('allreviews',compact('reviews'));
    }
    public function car(Review $review){

        $car = Car::all()->where('car_id',$review->car_id)->first();
        return view('car', compact('car','review'));
        

    }
}
