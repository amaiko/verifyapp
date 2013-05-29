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
        $designs = $this->design->all();

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
        $design = $this->design->findOrFail($id);

        return View::make('designs.show', compact('design'));
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
        $input = array_except(Input::all(), '_method');
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
            ->with('message', 'There were validation errors.');
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