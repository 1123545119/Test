<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\demo;



class DemoController extends Controller
{
    //显示
    public function index(demo $model){
//           $model = "\app\admin\model\dmeo";
           $data = (new $model()) ->select();

           return view('demo\index',['data'=>$data]);
    }



    //添加
    public function add(){
         return view('demo\add');
    }
    public function save(Request $request,demo $model){
//        $data = $request->post();
        $data['name']=$_POST['name'];
        $data['age']=$_POST['age'];
        $data['sex']=$_POST['sex'];
        $model = new $model($data);
        //新增数据

        $insert = $model->allowField(true)->save();
        //新增失败返回错误信息
        if( !$insert )  {
            return json(['status'=>1, 'msg'=>'增加失败！']);
        }else {
            //新增成功返回成功信息
            //$data = (new $model()) ->select();
            //return view('demo\index',['data'=>$data]);
            $this->success('新增成功','/Index');
        }
  }



        public function del($id,demo $model){
             if($model::destroy($id)){
                 $this->success('删除成功','/Index');

             }
        }

        public function edit($id,demo $model){
            $data = $model->find($id);
            return view('demo\edit',['v'=>$data]);
        }
        public function updata($id,demo $model,Request $request){
            $data = $request->post();
            if($model->allowField(true)->save($data,['id'=>$id])){
                $this->success('编辑成功','/Index');
            }
                   return "编辑失败";
        }

    
}
