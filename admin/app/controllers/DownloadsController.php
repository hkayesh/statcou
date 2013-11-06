<?php

class DownloadsController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $downloads = DB::table('downloads')
            ->orderby('updated_at', 'desc')
            ->get();
        return View::make('download.index')
            ->with('downloads', $downloads);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('download.create');
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
            $download = new Download;

            $file = Input::file('download_file');
            $destination = '../../docs/';
            $file_name = time().'_'.$file->getClientOriginalName();
            $file ->move($destination, $file_name);


            //dd($file);

            $download -> description = Input::get('description');
            $download -> status = Input::get('status');
            $download -> file_path = 'docs/'.$file_name;

            //dd($download);
            if($download->save()) {
                return Redirect::route('download.create')
                    ->with('success', 'Downloads saved successfully');
            }
            else {
                return Redirect::to('download.create')
                    ->with('failure', 'Downloads could not be saved');
            }

        }
        else {
            return Redirect::route('download.create')
                ->withErrors($validator)
                ->withInput($input);
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
        $download = Download::find($id);
        $download->delete();
        return Redirect::route('download.index')
            ->with('success', 'Download deleted successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $download = Download::find($id);
        return View::make('download.edit')
            ->with(array(
                'download' => $download
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
            $download = Download::find($id);
            $download -> description = Input::get('description');
            $download -> status = Input::get('status');

            if(Input::hasFile('download_file')) {
                $file = Input::file('download_file');
                $destination = '../../docs/';
                $file_name = time().'_'.$file->getClientOriginalName();
                $file ->move($destination, $file_name);
                $download -> file_path = 'docs/'.$file_name;
            }

            if($download -> save()) {
                return Redirect::to('download/'.$id.'/edit')
                    ->with('update_success', 'Download updated successfully');
            }
        } else {
            return Redirect::to('download/'.$id.'/edit')
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