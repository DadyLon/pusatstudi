<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;
use Illuminate\Http\Request;

use DataTables;
use DB;
use Hash;
use File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Post::select('*')->orderBy('created_at','DESC');
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        //    $btn = '<div class="row"><a href="javascript:void(0)" id="'.$row->id.'" class="btn btn-primary btn-sm ml-2 btn-edit">Edit</a>';
                        //    $btn = '<a href="javascript:void(0)" id="'.$row->id.'" class="btn btn-danger btn-sm ml-2 btn-edit">Delete</a></div>';

                            // return $btn;
                    })

                    ->rawColumns(['action'])
                    ->make(true);
        }
        // return view('admin.post');
        $data = post::all();
        return view('admin.post',compact(
            'data'
        ));
    }
    public function usermetadata(Request $request)
    {
        if ($request->ajax()) {
            $data = Post::select('*')->orderBy('created_at','DESC');
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        //    $btn = '<div class="row"><a href="javascript:void(0)" id="'.$row->id.'" class="btn btn-primary btn-sm ml-2 btn-edit">Edit</a>';
                           $btn = '<a href="javascript:void(0)" id="'.$row->id.'" class="btn btn-danger btn-sm ml-2 btn-edit">Delete</a></div>';

                            return $btn;
                    })

                    ->rawColumns(['action'])
                    ->make(true);
        }
        // return view('admin.post');
        $data = post::all();
        return view('user.usermetadata',compact(
            'data'
        ));
    }

    /**
     * Show the form f
     * or creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $data = $this->validate($request,[
            'judul' => 'required',
            'file' => 'required|mimes:docx,doc,pdf,xls,xlsx'
        ]);

        $file = $request->file('file');
        $nama_dokumen = $request->file('file')->getClientOriginalName();
        $file->move('meta-data/',$nama_dokumen);

        $data = new Post();
        $data->judul = $request->judul;
        $data->file = $nama_dokumen;
        $data->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $id)
    {
        $post = DB::table('post')->where('id', $id)->first();
        return view('', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->validate($request, [
            'judul' => 'required',
            'file' => 'required|mimes:docx,doc,pdf,xls,xlsx'
            ]);
            $post = Post::findOrFail($post->id);

            if($request->file('file') == "") {

                $post->update([
                    'judul'     => $request->judul,
                    'file'   => $request->file
                ]);

            } else {

                //hapus old file
                Storage::disk('local')->delete('meta-data/'.$post->file);

                //upload new file
                $file = $request->file('file');
                $file->storeAs('meta-data/', $file->getClientOriginalName());

                $post->update([
                    'judul'     => $request->judul,
                    'file'     => $file->getClientOriginalName()
                ]);

            }
            return redirect()->back();

            // return redirect('admin.post')->with('status', 'Data Berhasil Diupdate   ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

	$data = Post ::where('id',$id)->first();
	File ::delete('meta-data/'.$data->file);

	// hapus data
	Post::where('id',$id)->delete();

	return redirect()->back();

    }
}
