<?php

namespace App\Http\Controllers\local;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\User;

class UsuariosController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    function index() {
        return view('layouts.vw_usuarios');
    }

    public function get_Usuarios(Request $request) {
        $page = $_GET['page'];
        $limit = $_GET['rows'];
        $sidx = $_GET['sidx'];
        $sord = $_GET['sord'];

        $total_pages = 0;
        if (!$sidx) {
            $sidx = 1;
        }

        if (empty($_GET['buscar'])) {
            $count = DB::table('usuarios')->where('del', 1)->count();
        } else {
            $buscar = $_GET['buscar'];
            $count = DB::table('usuarios')
                    ->where('del', 1)->Where('ape_pat', 'like', "%{$buscar}%")->orWhere('ape_mat', 'like', "%{$buscar}%")->orWhere('nom_com', 'like', "%{$buscar}%")
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
            $sql = DB::table('usuarios')->where('del', 1)->orderBy($sidx, $sord)->limit($limit)->offset($start)->get();
        } else {
            $buscar = strtoupper($_GET['buscar']);
            $sql = DB::table('usuarios')
                            ->where('del', 1)->Where('ape_pat', 'like', "%{$buscar}%")->orWhere('ape_mat', 'like', "%{$buscar}%")->orWhere('nom_com', 'like', "%{$buscar}%")
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
                trim($Datos->ape_pat),
                trim($Datos->ape_mat),
                trim($Datos->nom_com),
                trim($Datos->usuario),
                trim($Datos->rol),
                '<div style="cursor:pointer"><img data-toggle="modal" data-target="#dlg_usuarios" title="Editar" width="17px" height="17px" src="img/edit.png" onClick="user_edit(' . $Datos->id . ')"></div>',
                '<div style="cursor:pointer"><img title="Eliminar" width="17px" height="17px" src="img/trash.png" onClick="user_delete(' . $Datos->id . ')"></div>'
            );
        }
        return response()->json($Lista);
    }

    function insert_user(Request $request) {
        $data = $request->all();
        $bus_usuario = User::where('usuario', $request['usuario'])->get();
        if ($data['id'] == "0") {

            if (count($bus_usuario) >= 1) {
                return response()->json(['msg' => 'existe', 'usuario' => $request['usuario']]);
            } else {
                unset($data['id']);
                $sql = User::insert($data);
                return response()->json(['msg' => 'si']);
            }
        } else {

            if (count($bus_usuario) >= 1) {
                if ($bus_usuario[0]->id == $data['id']) {
                    $sql = User::find($request['id'])->update($request->all());
                    return response()->json(['msg' => 'si']);
                } else {
                    return response()->json(['msg' => 'existe', 'usuario' => $request['usuario']]);
                }                
            }else{                
                $sql = User::find($request['id'])->update($request->all());
                return response()->json(['msg' => 'si']);                
            } 
        }

//        $bus_usuario = User::where('usuario',$request['usuario'])->get();

//        if (count($bus_usuario) >= 1) {
//
//            if ($request['id'] == $bus_usuario[0]->id) {
//                $sql = User::find($request['id'])->update($request->all());
//                return response()->json(['msg' => 'si']);
//            } else {
//                return response()->json(['msg' => 'existe', 'usuario' => $request['usuario']]);
//            }
//        } else {
//            $id = User::where('id', $request['id'])->get();
//            if ($request['id'] == $id[0]->id) {
//                $sql = User::find($request['id'])->update($request->all());
//                return response()->json(['msg' => 'si']);
//            } else {
//                unset($data['id']);
//
//                $sql = User::insert($data);
//            }
//
//
//            if ($sql) {
//                return response()->json(['msg' => 'si']);
//            } else {
//                return false;
//            }
//        }
    }

    function get_user_id(Request $request) {
        $id_user = $request['id_user'];
        $sql = DB::table('usuarios')->where('id', $id_user)->get();

        if (count($sql) >= 1) {
            return response()->json($sql);
        } else {
            return false;
        }
    }

    function delete_usuario(Request $request) {
        $sql = User::find($request['id'])->update(['del' => 0]);
        if ($sql) {
            return response()->json(['msg' => 'si']);
        } else {
            return false;
        }
    }

}
