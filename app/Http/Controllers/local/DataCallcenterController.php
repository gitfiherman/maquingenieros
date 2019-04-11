<?php

namespace App\Http\Controllers\local;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Llamadas;
use Illuminate\Support\Facades\DB;

class DataCallcenterController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
//        $llamadas = Llamadas::get(['id', 'ape_com', 'nom_com', 'movil']);
//        return view('layouts/data_callcenter', compact('llamadas'));
        $asesores = DB::select('select * from system.asesores');
        $cursos = DB::select('select * from system.cursos');
        $est_llamada = DB::select('select * from system.est_llamada');
        return view('layouts/data_callcenter', compact('asesores', 'cursos', 'est_llamada'));
    }

    public function getDataCallCenter() {
//        $fecha=$request['fecha'];
//        $fecha= str_replace('/','-',$request['fecha']);
//        $fecha = date("Y-m-d",strtotime($fecha));
//        $totalg = DB::table('system.vw_data_llamadas')->where('movil', 'like', "%{$buscar}%")->count();
//        $totalg = DB::select("select count(id) as total from system.vw_data_llamadas")->where('movil', 'like', "%{$buscar}%");





        $page = $_GET['page'];
        $limit = $_GET['rows'];
        $sidx = $_GET['sidx'];
        $sord = $_GET['sord'];

        $total_pages = 0;
        if (!$sidx) {
            $sidx = 1;
        }

        if (empty($_GET['buscar']) && empty($_GET['prox_fecha_buscar'])) {
            $count = DB::table('system.vw_data_llamadas')->count();
        } else {
            $buscar = $_GET['buscar'];
            $count = DB::table('system.vw_data_llamadas')
                    ->Where('movil', 'like', "%{$buscar}%")->orWhere('nom_com', 'like', "%{$buscar}%")->orWhere('ape_com', 'like', "%{$buscar}%")
                    ->count();
        }

        if ($count > 0) {
            $total_pages = ceil($count / $limit);
        }
        if ($page > $total_pages) {
            $page = $total_pages;
        }
        $start = ($limit * $page) - $limit; // do not put $limit*($page - 1)  
        if ($start < 0) {
            $start = 0;
        }

        if (empty($_GET['buscar'])) {
            $sql = DB::table('system.vw_data_llamadas')->orderBy($sidx, $sord)->limit($limit)->offset($start)->get();
        } else {
            $buscar = strtoupper($_GET['buscar']);
            $sql = DB::table('system.vw_data_llamadas')
                            ->Where('movil', 'like', "%{$buscar}%")->orWhere('nom_com', 'like', "%{$buscar}%")->orWhere('ape_com', 'like', "%{$buscar}%")
                            ->orderBy($sidx, $sord)->limit($limit)->offset($start)->get();
        }

        $Lista = new \stdClass();
        $Lista->page = $page;
        $Lista->total = $total_pages;
        $Lista->records = $count;

        foreach ($sql as $Index => $Datos) {
            $Lista->rows[$Index]['id'] = $Datos->id;
            $Lista->rows[$Index]['cell'] = array(
                trim($Datos->id),
                trim($Datos->ape_com),
                trim($Datos->nom_com),
                trim($Datos->movil),
                trim($Datos->obs),
                trim($Datos->curso),
                date('d-m-Y', strtotime($Datos->fch_llamada)),
                date('d-m-Y', strtotime($Datos->prox_fch_llamada)),
                '<div style="cursor:pointer"><img data-toggle="modal" data-target="#dlg_llamadas" title="Editar" width="17px" height="17px" src="img/edit.png" onClick="llamada_edit(' . $Datos->id . ')"></div>',
                '<div style="cursor:pointer"><img title="Eliminar" width="17px" height="17px" src="img/trash.png" onClick="llamada_delete(' . $Datos->id . ')"></div>'
            );
        }
        return response()->json($Lista);
    }

    function save_llamada(Request $request) {
        $data = $request->all();

        if ($data['id'] == 0) {
            unset($data['id']);
            $sql = DB::table('system.llamadas')->insert($data);
//            $sql = Llamadas::created($data);
        } else {
            $sql = Llamadas::find($request['id'])->update($request->all());
        }

        if ($sql) {
            return response()->json(['msg' => 'si']);
        } else {
            return false;
        }
    }

    function delete_llamada(Request $request) {

        $sql = Llamadas::find($request['id'])->update(['est_reg' => 0]);
        if ($sql) {
            return response()->json(['msg' => 'si']);
        } else {
            return false;
        }
//        if ($sql) {
//            $rpta = Llamadas::where('id',$request['id'])->delete();
//            
//            if($rpta){
//                return response()->json(['msg' => 'si']);
//            }else{
//                return response()->json(['msg' => 'no']);
//            }
//        }
        
    }

    function get_llamada_id(Request $request) {
        $id_llamada = $request['id_llamada'];
        $sql = DB::table('system.vw_data_llamadas')->where('id', $id_llamada)->get();

        if (count($sql) >= 1) {
            return response()->json($sql);
        } else {
            return false;
        }
    }

//    CONTACT_EMAIL------------------------------------------------------
    function contact_email() {
        return view('layouts.vw_emails');
    }

    function get_contact_emails() {
        $totalg = DB::select("select count(id) as total from vw_contact_email");
        $page = $_GET['page'];
        $limit = $_GET['rows'];
        $sidx = $_GET['sidx'];
        $sord = $_GET['sord'];

        $total_pages = 0;
        if (!$sidx) {
            $sidx = 1;
        }
        $count = $totalg[0]->total;
        if ($count > 0) {
            $total_pages = ceil($count / $limit);
        }
        if ($page > $total_pages) {
            $page = $total_pages;
        }
        $start = ($limit * $page) - $limit; // do not put $limit*($page - 1)  
        if ($start < 0) {
            $start = 0;
        }

        $sql = DB::table('vw_contact_email')->orderBy($sidx, $sord)->limit($limit)->offset($start)->get();

        $Lista = new \stdClass();
        $Lista->page = $page;
        $Lista->total = $total_pages;
        $Lista->records = $count;

        foreach ($sql as $Index => $Datos) {
            $Lista->rows[$Index]['id'] = $Datos->id;
            $Lista->rows[$Index]['cell'] = array(
                trim($Datos->id),
                trim($Datos->nombres),
                trim($Datos->apellidos),
                trim($Datos->telefono),
                trim($Datos->message),
                trim($Datos->email),
                trim($Datos->region),
                trim($Datos->area_formacion),
                trim($Datos->area_trabajo),
                trim($Datos->industria)
            );
        }
        return response()->json($Lista);
    }

    public function getDataCallCenter_old(Request $request) {

        $columns = array(
            0 => 'id',
            1 => 'ape_com',
            2 => 'nom_com',
            3 => 'movil',
            4 => 'obs',
            4 => 'action'
        );

        $totalData = vw_llamadas::count(); //vw_llamadas::count();
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if (empty($request->input('search.value'))) {
            $posts = vw_llamadas::offset($start)
                    ->limit($limit)
                    ->orderBy($order, $dir)
                    ->get();
            $totalFiltered = vw_llamadas::count();
        } else {
            $search = strtoupper($request->input('search.value'));

            $posts = vw_llamadas::where('movil', 'like', "%{$search}%")
                    ->orWhere('nom_com', 'like', "%{$search}%")
                    ->orWhere('ape_com', 'like', "%{$search}%")
                    ->offset($start)
                    ->limit($limit)
                    ->orderBy($order, $dir)
                    ->get();

            $totalFiltered = vw_llamadas::where('id', 'like', "%{$search}%")
                    ->orWhere('movil', 'like', "%{$search}%")
                    ->count();
        }

//        $posts = vw_llamadas::offset($start)
//                ->limit($limit)
//                ->orderBy($order, $dir)
//                ->get();

        $data = array();

        if ($posts) {
            foreach ($posts as $r) {
                $nestedData['id'] = $r->id;
                $nestedData['ape_com'] = $r->ape_com;
                $nestedData['nom_com'] = $r->nom_com;
                $nestedData['movil'] = $r->movil;
                $nestedData['obs'] = $r->obs;
                $nestedData['action'] = '
					<a href="#!" class="btn btn-warning btn-xs">Edit</a>
					<a href="#!" class="btn btn-danger btn-xs">Delete</a>
				';
                $data[] = $nestedData;
            }
        }
        $json_data = array(
            "draw" => intval($request->input('draw')),
            "recordsTotal" => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $data
        );
//
//        $json_data = array(
//            "draw" => intval($request->input('draw')),
//            "recordsTotal" => intval($totalData),
//            "data" => $data
//        );



        echo json_encode($json_data);
    }

}
