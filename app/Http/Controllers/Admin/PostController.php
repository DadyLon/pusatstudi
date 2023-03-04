<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;
use Illuminate\Http\Request;

use DataTables;
use Hash;

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
        // $data = new Post();
        // $data->judul = $request->judul;
        // $data->file = $request->file;
        // $data->save();
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

        // $data['judul'] = $judul;
        // $data['file'] = $nama_dokumen;

//         $post = new Post();
// //        dd($post->save($data));
//         $post->save($data);

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
    public function edit(Post $post)
    {
        return response()->json($post);
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
        $post->update($request->all());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $id)
    {
        $id->delete();
        return redirect()->route('admin')->with('succes','Data Mahasiswa Berhasil di Hapus');
    }
}
