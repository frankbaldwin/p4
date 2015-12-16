<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HandicapController extends Controller
{

    public function getHandicap(Request $request)
     {
        $rounds = \App\Round::where('user_id', '=', \Auth::id())->orderBy('id','ASC')->get();
        return view('\handicap')->with('rounds',$rounds);
     }

	 public function postHandicap()
    {
	/*Logic steps:
    * Get current user round data to calculate handicap:
    *     course_rating
    *     slope_rating
    *     18_hole_score

    * Calculate Handicap Differential:
    *     18_hole_score - course_rating = difference
    *     difference X 113 = result
    *     result / slope_rating = Handicap Differential (rounded) to tenth

    *Handicap Index Formula
    *     Number of scores: 5 or 6    Differential(s) to be used: lowest 1
    *     Number of scores: 7 or 8    Differential(s) to be used: lowest 2
    *     Number of scores: 9 or 10   Differential(s) to be used: lowest 3
    *     Number of scores: 11 or 12  Differential(s) to be used: lowest 4
    *     Number of scores: 13 or 14  Differential(s) to be used: lowest 5
    *     Number of scores: 15 or 16  Differential(s) to be used: lowest 6
    *     Number of scores: 17        Differential(s) to be used: lowest 7
    *     Number of scores: 18        Differential(s) to be used: lowest 8
    *     Number of scores: 19        Differential(s) to be used: lowest 9
    *     Number of scores: 20        Differential(s) to be used: lowest 10

    *   Determine handicap differential(s) to use
    *   Average handicap differential(s) being used
    *   Multiply Average by .96
    *   Delete all numbers after the tenths' digit (truncate). Do not round to the nearest tenth.
    */
		return view('\handicap');
    }

   public function getEdit($id = null) {
     # Get this round
       $round = \App\Round::find($id);

       if(is_null($round)) {
           \Session::flash('flash_message','Round not found.');
           return redirect('\handicap');
       }

       return view('edit')
          ->with([
              'round' => $round,
         ]);
   }
   /**
   * Responds to requests to POST /books/edit
   */
   public function postEdit(Request $request) {
      $round = \App\Round::find($request->id);
       $round->date_played = $request->date;
       $round->course_name = $request->course_name;
       $round->course_rating = $request->course_rating;
       $round->slope_rating = $request->slope_rating;
       $round->round_score = $request->score;
       $round->save();

       \Session::flash('flash_message', 'Your round was updated.');
       return redirect('\handicap');

   }

   /**
    * Responds to requests to GET /books/create
    */
    public function getCreate() {

     	    return view('\create');
    }
   public function postCreate(Request $request) {

        $this->validate(
            $request,
            ['date' => 'required',
            'course_name' => 'required',
            'course_rating'=> 'required',
            'slope_rating' => 'required',
            'score' => 'required',
          ]
        );

        # Enter round into the database

        $rounds = new \App\Round();

      	$rounds->date_played = $request->input('date');
      	$rounds->course_name = $request->input('course_name');
      	$rounds->course_rating = $request->input('course_rating');
      	$rounds->slope_rating = $request->input('slope_rating');
      	$rounds->round_score = $request->input('score');
        $rounds->user_id = \Auth::id();

        $rounds->save();

        \Session::flash('flash_message', 'Your round was added!');
      	return redirect ('\handicap');
    }

   public function getConfirmDelete($round_id) {
      $round = \App\Round::find($round_id);
       return view('\delete')->with('round', $round);

   }

   public function getDoDelete($round_id) {
      $round = \App\Round::find($round_id);
      if(is_null($round)) {
           \Session::flash('flash_message','Round not found.');
           return redirect('\handicap');
       }

       $round->delete();

       \Session::flash('flash_message', $round->id.' was deleted.');

       return redirect('\handicap');

   }
}
