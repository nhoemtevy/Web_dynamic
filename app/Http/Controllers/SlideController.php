<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Slide;

class SlideController extends Controller{

    public function index(){
      //  @$slide = Slide::all();
        return view('admin.slideshow.index');

    }
    public function create(){
        return view('admin.slideshow.create');

    }
    public function store(Request $request){
        return redirect()->route('slides.index');

    }
    public function show($id){
        return view('admin.slideshow.show');

    }
    public function edit($id){
        return view('admin.slideshow.edit');

    }
    public function update(Request $request, $id){
        return redirect()->route('slides.index');

    }
    public function destroy($id){
        return redirect()->route('slides.index');

    }
}
