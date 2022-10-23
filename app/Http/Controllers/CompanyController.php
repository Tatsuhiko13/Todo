<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Company;
use Illuminate\Http\Request;


class CompanyController extends Controller
{

      public function index() {

        $companies = new Company();

        //select * from companies;
        $datas = $companies::orderBy('id', 'asc')->get();

        return view('companies/index', [

          'datas' => $datas,

        ]);
        // return 'おはよー！';
        // MYSQL - Model

      }

      public function edit($abc) {//$abc はweb.phpの23行目の'abc'のことで値が渡ってる
        $companies = new Company();
        $data = Company::find($abc);

        //
        // var_dump($data['']);
        // exit;


        return view('companies/edit', [
          'data' => $data,
        ]);

      }


      public function update($abc, Request $request)
      {
        //POSTできた値を・・・？
      //   CompanyController.php の　editpost　メソッドに受け渡し
      //   updeta？？ どのデータにたいしての　　ｉｄ　name
         // var_dump($request);
         //  exit;

          $c_data = Company::find($abc);
          $c_data->name = $request->name;
          // $c_data->del_flg = 1;
          $c_data->save();

          return redirect()->route('companies.index');



      }

      public function delete($abc)
      {
        $companies = new Company();
        $data = Company::find($abc);

        //
        // var_dump($data['']);
        // exit;


        return view('companies/delete', [
          'data' => $data,
        ]);
      }

      public function deletefin($abc)
      {
        Company::destroy($abc);

        return  redirect()->route('companies.index');


      }


}
