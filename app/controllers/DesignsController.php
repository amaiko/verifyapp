<?php

class DesignsController extends BaseController {

    /**
     * Design Repository
     *
     * @var Design
     */
    protected $design;

    public function __construct(Design $design)
    {
        $this->design = $design;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
         // $designs = $this->design->all();
        // return View::make('designs.index', compact('designs'));
        $designs = DB::table('designs')->get();
        return View::make('designs.index', compact('designs'));
   
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('designs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();
        $validation = Validator::make($input, Design::$rules);

        if ($validation->passes())
        {
            $this->design->create($input);

            return Redirect::route('designs.index');
        }

        return Redirect::route('designs.create')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
    	if(!preg_match('/[0-9]+/',$id))
			{
			       $designs = DB::table('designs')->where('projectname', '=', $id)->get();
				   return View::make('designs.show', compact('designs'));

			}
		else {
			$designs = DB::table('designs')->where('id', '=', $id)->get();
			return View::make('designs.showdesign', compact('designs'));
			
		}
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $design = $this->design->find($id);

        if (is_null($design))
        {
            return Redirect::route('designs.index');
        }

        return View::make('designs.edit', compact('design'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        /*$input = array_except(Input::all(), '_method');
        $validation = Validator::make($input, Design::$rules);

        if ($validation->passes())
        {
            $design = $this->design->find($id);
            $design->update($input);

            return Redirect::route('designs.show', $id);
        }

        return Redirect::route('designs.edit', $id)
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');*/
        $data = array('star1' => "20" ,'star2' => "40" ,'star3' => "60" ,'star4' => "80" ,'star5' => "100" );
        $input = array_except(Input::all(), '_method');
        $design = Design::find($id);
		$key = $input["rating"]; //star1
		$new = $data[$key]; //100
		
		$getDesignValues =  DB::table('designs')->where('id', '=', $id)->first();
		
 		$old = $getDesignValues->rating; //100
		$voterCount = $getDesignValues->voter; //2
		$newVoterCount = $voterCount + 1; //3
		$oldPercentValue = $voterCount * $old;
		$current = ($new + $oldPercentValue) / $newVoterCount; //100
		$design->voter = $newVoterCount; //2
		$design->rating = $current; //100
		$design->save();
		return Redirect::route('designs.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->design->find($id)->delete();

        return Redirect::route('designs.index');
    }

}