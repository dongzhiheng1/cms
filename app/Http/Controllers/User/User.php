<?php
    namespace App\Http\Controllers\User;
    use Illuminate\Routing\Controller;
    use App\Model\UserModel;
    class User extends Controller {
        public function test($id){
           $user=UserModel::where(['id'=>$id])->first()->toArray();
          echo "<pre>";
          print_r($user);
        }
        public function add(){
            $data=[
                'name'=>str_random(5),
                'age'=>rand(1,100),
                'create_time'=>time()
            ];
            $res=UserModel::insert($data);
            var_dump($res);
        }

        public function update($id){
            $data=[
                'name'=>str_random(5),
                'age'=>rand(1,100),
            ];
            $where=[
                'id'=>$id
            ];
            $res=UserModel::where($where)->update($data);
            var_dump($res);
        }
        public function delete($id){
            $where=[
                'id'=>$id
            ];
            $res=UserModel::where($where)->delete();
            var_dump($res);
        }
        public function list(){
            $list=UserModel::all();
               $data=[
                   'list'=>$list
               ];
             return view('User.index',$data);
        }
    }

?>