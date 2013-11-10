<?php

class NewsController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $news = DB::table('news')
            ->orderby('updated_at', 'desc')
            ->get();
        return View::make('news.index')
            ->with('newsList', $news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('news.create');
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
            $news = new News;

            $file = Input::file('download_file');
            $destination = '../../docs/';
            $file_name = time().'_'.$file->getClientOriginalName();
            $file ->move($destination, $file_name);


            //dd($file);

            $news -> description = Input::get('description');
            $news -> status = Input::get('status');
            $news -> file_path = 'docs/'.$file_name;

            //dd($news);
            if($news->save()) {
                return Redirect::route('news.create')
                    ->with('success', 'News saved successfully');
            }
            else {
                return Redirect::to('news.create')
                    ->with('failure', 'News could not be saved');
            }

        }
        else {
            return Redirect::route('news.create')
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
        $news = News::find($id);
        $news->delete();
        return Redirect::route('news.index')
            ->with('success', 'News deleted successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        return View::make('news.edit')
            ->with(array(
                'news' => $news
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
            $news = News::find($id);
            $news -> description = Input::get('description');
            $news -> status = Input::get('status');

            if(Input::hasFile('download_file')) {
                $file = Input::file('download_file');
                $destination = '../../docs/';
                $file_name = time().'_'.$file->getClientOriginalName();
                $file ->move($destination, $file_name);
                $news -> file_path = 'docs/'.$file_name;
            }

            if($news -> save()) {
                return Redirect::to('news/'.$id.'/edit')
                    ->with('update_success', 'News updated successfully');
            }
        } else {
            return Redirect::to('news/'.$id.'/edit')
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