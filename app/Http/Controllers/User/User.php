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
    }

?>