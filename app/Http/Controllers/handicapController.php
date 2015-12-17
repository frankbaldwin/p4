<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HandicapController extends Controller{

    #Responds to requests to GET handicap

    public function getHandicap(Request $request){

        # Get all the rounds "owned" by the current logged in users
        # Sort in ascending order by id
        $rounds = \App\Round::where('user_id', '=', \Auth::id())->orderBy('id','ASC')->get();

        return view('handicap')->with('rounds',$rounds);
    }

    #Responds to requests to GET edit/{id}

    public function getEdit($id = null){

        # Get this round
         $round = \App\Round::find($id);

         if(is_null($round)) {
             \Session::flash('flash_message','Round not found.');
             return redirect('/handicap');
         }

         return view('edit')->with(['round' => $round,]);
     }

     #Responds to requests to POST edit

     public function postEdit(Request $request) {

          $round = \App\Round::find($request->id);

          $round->date_played = $request->date;
          $round->course_name = $request->course_name;
          $round->course_rating = $request->course_rating;
          $round->slope_rating = $request->slope_rating;
          $round->round_score = $request->score;
          $round->save();

         \Session::flash('flash_message', 'Your round was updated.');
          return redirect('/handicap');
     }

     #Responds to requests to GET create

     public function getCreate() {

          return view('/create');
      }

      #Responds to requests to POST create

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

          # Save round into the database
          $rounds->save();

          \Session::flash('flash_message', 'Your round was added!');
        	return redirect ('/handicap');
      }

      #Responds to requests to GET delete/{round_id}

      public function getConfirmDelete($round_id) {
          $round = \App\Round::find($round_id);
          return view('/delete')->with('round', $round);

      }

      public function getDoDelete($round_id) {
          $round = \App\Round::find($round_id);
          if(is_null($round)) {
               \Session::flash('flash_message','Round not found.');
               return redirect('/handicap');
           }

           $round->delete();

           \Session::flash('flash_message', $round->id.' was deleted.');

           return redirect('/handicap');
     }
}
