<?php

class NoticesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $notices = DB::table('notices')
            ->orderby('updated_at', 'desc')
            ->get();
        return View::make('notice.index')
                ->with('notices', $notices);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('notice.create');
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
            $notice = new Notice;
            $file = Input::file('download_file');
            $destination = '../../docs/';
            $file_name = time().'_'.$file->getClientOriginalName();
            $file ->move($destination, $file_name);

            $notice -> description = Input::get('description');
            $notice -> status = Input::get('status');
            $notice -> file_path = 'docs/'.$file_name;

            if($notice->save()) {
                return Redirect::route('notice.create')
                    ->with('success', 'Notice saved successfully');
            }
            else {
                 return Redirect::to('notice.create')
                    ->with('failure', 'Notice could not be saved');
            }

        }
        else {
            return Redirect::route('notice.create')
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
        $notice = Notice::find($id);
        $notice->delete();
        return Redirect::route('notice.index')
            ->with('success', 'Notice deleted successfully');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $notice = Notice::find($id);
        return View::make('notice.edit')
            ->with(array(
                'notice' => $notice
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
            $notice = Notice::find($id);
            $notice -> description = Input::get('description');
            $notice -> status = Input::get('status');

            if(Input::hasFile('download_file')) {
                $file = Input::file('download_file');
                $destination = '../../docs/';
                $file_name = time().'_'.$file->getClientOriginalName();
                $file ->move($destination, $file_name);
                $notice -> file_path = 'docs/'.$file_name;
            }

            if($notice -> save()) {
                return Redirect::to('notice/'.$id.'/edit')
                    ->with('update_success', 'Notice updated successfully');
            }
        } else {
            return Redirect::to('notice/'.$id.'/edit')
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