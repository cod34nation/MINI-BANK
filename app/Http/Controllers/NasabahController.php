<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nasabah;
use App\Http\Requests\createNasabah;
use Illuminate\Support\Facades\Input;
class NasabahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $nasabahs = Nasabah::all();

        $nasabahs = Nasabah::paginate(5);
                // $nasabahs = Nasabah::where('alamat','=','malang')->paginate(3);


       
        //parsing data cara 1
        // $data['nama'] ='Afrizal';
        // $data['umur'] ='23';
        // return view('nasabah_page.index',$data);

        // parsing data cara 2
        // die;
        // $nama = 'Afrizal';
        // $umur = '23';
        // $nasabah =array('Afrizal','Fitriana','bayu');

        return view('nasabah_page.index',compact('nasabahs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nasabah_page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createNasabah $request)
    {
        $filename = Input::file('foto')->getClientOriginalName();
        $size = Input::file('foto')->getSize();

        Input::file('foto')->move(public_path().'/foto/',$filename);
        echo $size;
        // $this->validate($request,[

        //     'no_rekening'=>'required',
        //     'nama_lengkap'=>'required',
        //     'alamat'=>'required'


        //     ]);

      
        $data = $request->all(); //var untuk menyimpan data yang diterima oleh parameter request
        $data = array('nama_lengkap' =>Input::get('nama_lengkap'),
                      'no_rekening'=>Input::get('no_rekening'),
                      'alamat'=>Input::get('alamat'),
                      'foto'=>$filename);
        $cek = Nasabah::create($data);

       // return $data;

       return redirect('nasabah');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nasabah = Nasabah::find($id);


       return view('nasabah_page.show',compact('nasabah'));
    }

    public function search(Request $request)
    {

         $data = $request['keyword'];

         $nasabahs = Nasabah::where('alamat','=',$data)->paginate(5);


         return view('nasabah_page.index',compact('nasabahs'));

        
            
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

     $data['nasabah'] = Nasabah::find($id);   
     return view('nasabah_page/edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(createNasabah $request, $id)
    {
        


        //$data = $request->all(); //var untuk menyimpan data yang diterima oleh parameter request
        $data = $request->all();
        $cek = Nasabah::find($id);
        $cek->update($data);

        return redirect('nasabah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nasabah = Nasabah::find($id);
        $nasabah->delete();
        return redirect('nasabah');
    }
}
