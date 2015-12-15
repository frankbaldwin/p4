<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class handicapController extends Controller
{

    public function getHandicap(Request $request)
     {
        $rounds = \App\Round::where('user_id', '=', \Auth::id())->orderBy('id','ASC')->get();
        return view('handicap')->with('rounds',$rounds);
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
		return view('handicap');
    }

   public function getEdit_round($id = null) {
  /*     # Get this book and eager load its tags
       $book = \App\Book::with('tags')->find($id);
       if(is_null($book)) {
           \Session::flash('flash_message','Book not found.');
           return redirect('\books');
       }

       # Get all the possible authors so we can build the authors dropdown in the view
       $authorModel = new \App\Author();
       $authors_for_dropdown = $authorModel->getAuthorsForDropdown();
       # Get all the possible tags so we can include them with checkboxes in the view
       $tagModel = new \App\Tag();
       $tags_for_checkbox = $tagModel->getTagsForCheckboxes();
  */
       /*
       Create a simple array of just the tag names for tags associated with this book;
       will be used in the view to decide which tags should be checked off
       */
  /*
       $tags_for_this_book = [];
       foreach($book->tags as $tag) {
           $tags_for_this_book[] = $tag->name;
       }
       return view('books.edit')
           ->with([
               'book' => $book,
               'authors_for_dropdown' => $authors_for_dropdown,
               'tags_for_checkbox' => $tags_for_checkbox,
               'tags_for_this_book' => $tags_for_this_book,
           ]);
  */
   }
   /**
   * Responds to requests to POST /books/edit
   */
   public function postEdit_round(Request $request) {
  /*     $book = \App\Book::find($request->id);
       $book->title = $request->title;
       $book->author_id = $request->author;
       $book->cover = $request->cover;
       $book->published = $request->published;
       $book->purchase_link = $request->purchase_link;
       $book->save();
       if($request->tags) {
           $tags = $request->tags;
       }
       else {
           $tags = [];
       }
       $book->tags()->sync($tags);
       \Session::flash('flash_message','Your book was updated.');
       return redirect('/books/edit/'.$request->id);
    */
   }

   /**
    * Responds to requests to GET /books/create
    */
    public function getCreate() {

     	    return view('create');
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
      	return redirect ('/handicap');
    }

   public function getConfirmDelete() {
  /*     $book = \App\Book::find($book_id);
       return view('books.delete')->with('book', $book);
  */
   }

   public function getDoDelete() {
  /*     $book = \App\Book::find($book_id);
       if(is_null($book)) {
           \Session::flash('flash_message','Book not found.');
           return redirect('\books');
       }
       if($book->tags()) {
           $book->tags()->detach();
       }
       $book->delete();
       \Session::flash('flash_message',$book->title.' was deleted.');
       return redirect('/books');
  */
   }
}
