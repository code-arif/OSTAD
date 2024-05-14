<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
        //product insert
    /*
    public function productCreate(Request $request){
        return Product::create($request->input());
    }
    */

    //price increment and dec
    //increment with value
    /*
    public function increAndDec(){
        return Product::where('id',1)->increment('price',1500);
    }
    */
    //increment without value
    /*
    public function increAndDec(){
        return Product::where('id',1)->increment('price');
    }
    */

    //decrement with value
    /*
    public function increAndDec(){
        return Product::where('id',1)->decrement('price',200);
    }
    */

    //decrement without value
    /*
    public function increAndDec(){
        return Product::where('id',1)->decrement('price');
    }
    */

    //data retrieve all data by get() method
    //get()
    /*
    public function read(){
        return Product::get();
    }
    */
    //all()
    /*
    public function read(){
        return Product::get();
    }
    */
    //find
    /*
    public function read(){
        return Product::find(1);
    }
    */
    //first()
    /*
    public function read(){
        return Product::first();
    }
    */
    //pluck
    /*
    public function read(){
        return Product::pluck('price','title');
    }
    */

    //====Aggregates====//
    //count()
    /*
    public function read(){
        return Product::count('title');
    }
    */
    //max()
    /*
    public function read(){
        return Product::max('price');
    }
    */
    //min
    /*
    public function read(){
        return Product::min('price');
    }
    */
    //sum()
    /*
    public function read(){
        return Product::sum('price');
    }
    */
    //avg()
    /*
    public function read(){
        return Product::avg('price');
    }
    */
    //select()
    /*
    public function read(){
        return Product::select('price','title','remark')->get();
    }
    */
    //distinct()
    /*
    public function read(){
        return Product::select('price')->distinct()->get();
    }
    */

    //====Where Clause====//
    //=,!=,>,>=,<,<=,LIKE, NOT LIKE operator
    /*
    public function read(){
        return Product::where('title','LIKE','%sa%')->get();
    }
    */
    //orWhere
    /*
    public function read(){
        return Product::where('price', '=' ,'500')->orWhere('price', '<' , 4000)->get();
    }
    */
    //WhereNot
    /*
    public function read(){
        return Product::where('price', '>' ,500)->whereNot('price', '>' , 4000)->get();
    }
    */
    //whereBetween or whereNotBetween
    /*
    public function read(){
        return Product::whereNotBetween('price',[500,1200])->get();
    }
    */
    //whereIn and whereNotIn
    /*
    public function read(){
        return Product::whereNotIn('price',[500,1200,4000])->get();
    }
    */
    //whereNull and whereNotNull
    /*
    public function read(){
        return Product::whereNotNull('price')->get();
    }
    */
    //whereDate
    /*
    public function read(){
        return Product::whereDate('created_at','2024-05-08')->get();
    }
    */
    //whereMonth
    /*
    public function read(){
        return Product::whereMonth('created_at','05')->get();
    }
    */
    //whereDay
    /*
    public function read(){
        return Product::whereDay('created_at','08')->get();
    }
    */
    //whereYear
    /*
    public function read(){
        return Product::whereYear('created_at','2024')->get();
    }
    */
    //whereTime
    /*
    public function read(){
        return Product::whereTime('created_at','06:58:53')->get();
    }
    */
    //whereColumn
    /*
    public function read(){
        return Product::whereColumn('price', '>' ,'discount_price')->get();
    }
    */

    //ordering and grouping
    //asc
    /*
    public function read(){
        return Product::orderBy('price','asc')->get();
    }
    */
    //desc
    /*
    public function read(){
        return Product::orderBy('price','desc')->get();
    }
    */
    //inRandomOrder
    /*
    public function read(){
        return Product::inRandomOrder()->first();
    }
    */
    //latest and oldest
    /*
    public function read(){
        return Product::oldest()->first();
    }
    */
    //groupBy
    /*
    public function read(){
        return Product::groupBy('price')->having('price', '>' , 3000)->get();
    }
    */
    //limiting
    /*
    public function read(){
        return Product::skip(2)->take(3)->get();
    }
    */
    //paginate
    /*
    public function read(){
        return Product::paginate(
            $perPage = 1,
            $colums = ['title','price'],
            $pageName = 'ThisPage'
        );
    }
    */

    //simplePaginate
    /*
    public function read(){
        return Product::simplePaginate(2);
    }
    */

}
