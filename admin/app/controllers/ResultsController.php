<?php

class ResultsController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $results = DB::table('results')
            ->orderby('updated_at', 'desc')
            ->get();
        return View::make('result.index')
            ->with('results', $results);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('result.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();
        $validator = Validator::make($input, array(
            'description' => 'required',
            'status' => 'required',
            'download_file' => 'required'
        ));

        if($validator -> passes()) {
            $result = new Result;

            $file = Input::file('download_file');
            $destination = '../../docs/';
            $file_name = time().'_'.$file->getClientOriginalName();
            $file ->move($destination, $file_name);


            //dd($file);

            $result -> description = Input::get('description');
            $result -> status = Input::get('status');
            $result -> file_path = 'docs/'.$file_name;

            //dd($result);
            if($result->save()) {
                return Redirect::route('result.create')
                    ->with('success', 'Result saved successfully');
            }
            else {
                return Redirect::to('result.create')
                    ->with('failure', 'Result could not be saved');
            }

        }
        else {
            return Redirect::route('result.create')
                ->withErrors($validator)
                ->withInput(Input::except('download_file'));
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $result = Result::find($id);
        $result->delete();
        return Redirect::route('result.index')
            ->with('success', 'Result deleted successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $result = Result::find($id);
        return View::make('result.edit')
            ->with(array(
                'result' => $result
            ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $validator = Validator::make(Input::all(), array(
            'description' => 'required',
            'status' => 'required',
        ));
        if($validator -> passes()) {
            $result = Result::find($id);
            $result -> description = Input::get('description');
            $result -> status = Input::get('status');

            if(Input::hasFile('download_file')) {
                $file = Input::file('download_file');
                $destination = '../../docs/';
                $file_name = time().'_'.$file->getClientOriginalName();
                $file ->move($destination, $file_name);
                $result -> file_path = 'docs/'.$file_name;
            }

            if($result -> save()) {
                return Redirect::to('result/'.$id.'/edit')
                    ->with('update_success', 'Result updated successfully');
            }
        } else {
            return Redirect::to('result/'.$id.'/edit')
                ->withErrors($validator);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        echo "***%%%%";
    }

}