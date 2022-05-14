<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Footer;
use App\Models\Pegawai;
use DataTables ;
use DB;
use App\User;
class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

  
    public  function data_table(Request $request){
        $list_pegawai = Pegawai::all();
        return DataTables::of($list_pegawai)
        ->addColumn('action', function($data){

            $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post" style="margin-left:10px;"><i class="fa fa-pencil" style="margin-right:10px;margin-left:5px"></i> Edit</a>';
            $button .= '<button type="button" name="show" id="'.$data->id.'" class="show btn btn-primary btn-sm show-post" style="  margin-left: 3px;
            margin-left: 10px;margin-top:10px"><i class="fa fa-eye" style="margin-right:3px"></i> Show </button>';     
         
            $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm" style=" margin-left: 10px;margin-top:10px"><i class="fa fa-trash"></i> Delete</button>';     
         
           
            return $button;
        })
        ->rawColumns(['action'])
        ->addIndexColumn()
        ->make(true);

    }

    public  function data_table_user(Request $request){
        
        $item=DB::table('users');
        // dd($item);
        
        return DataTables::of($item)
        ->addColumn('action', function($data){

            if( $data->id >=1 && $data->id <=3){
                // dd("hai");
                $button = '<button type="button" name="show" id="'.$data->id.'" class="show btn btn-primary btn-sm show-post" style="  margin-left: 3px;
                margin-left: 10px;margin-top:10px"><i class="fa fa-eye" style="margin-right:3px"></i> Show </button>'; 
                return $button;
            }
              
            $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" class="edit btn btn-info btn-sm edit-account" style="margin-left:10px;"><i class="fa fa-pencil" style="margin-right:10px;margin-left:5px"></i> Edit</a>';
                $button .= '<button type="button" name="show" id="'.$data->id.'" class="show btn btn-primary btn-sm show-post" style="  margin-left: 3px;
                margin-left: 10px;margin-top:10px"><i class="fa fa-eye" style="margin-right:3px"></i> Show </button>';   
                $button .= '<button type="button" name="delete-user" id="'.$data->id.'" class="delete-user btn btn-danger btn-sm" style=" margin-left: 10px;margin-top:10px"><i class="fa fa-trash"></i> Delete</button>';  
                return $button;
           
        })
        ->rawColumns(['action'])
        ->addIndexColumn()
        ->make(true);

    }
    public function index(Request $request)
    {
            
            return view('admin/dashboard');

    }

   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->id;
        //    dd($id);
        $request->validate(
        [
        'nohp' => 'required|regex:/[0-9]/',
       
        ]);
        
        $post   =   Pegawai::updateOrCreate(['id' => $id],
                    [
                        'divisi' => $request->divisi,
                        'nama_pegawai' => $request->nama_pegawai,
                        'nohp' => $request->nohp,
                        'email' => $request->email,
                        'alamat' => $request->alamat,
                    ]); 

        return response()->json($post);
    }

    public function update_user(Request $request)
    {
        $id = $request->id_user;
        // dd($id);
       
       
        $post   =    DB::table('users')
        ->where('id', $id)  // find your user by their email
        ->update([
            'name' => $request->nama_user,
            'email' => $request->email_user,
         ]); 

        return response()->json($post);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = array('id' => $id);
        $post  = Pegawai::where($where)->first();
     
        return response()->json($post);
    }

    public function get_edit_user($id)
    {
        $id = array('id' => $id);
        $post  = DB::table('users')->where($id)->first();  
        return response()->json($post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Pegawai::where('id',$id)->delete();
     
        return response()->json($post);
    }

    public function delete_user($id)
    {
        // dd($id);
        $post = DB::table('users')->where('id',$id)->delete();
     
        return response()->json($post);
    }


    
    
}
