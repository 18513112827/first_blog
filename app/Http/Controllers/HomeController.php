<?php
/**
 * Created by PhpStorm.
 * User: siri
 * Date: 2018/6/29
 * Time: 19:00
 */
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
class HomeController extends BaseController{
    public function index(){
        return view('user.index');
    }

    public function edit(){
        return 'edit';
    }

    public function show(){
        return 'show';
    }

    public function update(){
        return 'update';
    }

    public function destroy(){
        return 'destroy';
    }

    public function store(){
        return 'store';
    }

    public function create(){
        return 'create';
    }

    public function walk(){
        $array = [3,7,8,2];
        array_walk($array,function ($num){
            echo $num*$num;
        });
    }

    public function counter(){
        $i = 0;
        echo ++$i;
        return function() use ($i){
            echo ++$i;
        };
    }

    public function getCounter(){
        $counter = $this->counter();
        $counter = $this->counter();

    }


}
