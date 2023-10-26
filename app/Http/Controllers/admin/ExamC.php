<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use Illuminate\Http\Request;

class ExamC extends Controller
{
  public function index($id = null)
  {
    $rows = Exam::get();
    if ($id != null) {
      $sd = Exam::find($id);
      if (!is_null($sd)) {
        $ft = 'edit';
        $url = url('admin/exams/update/' . $id);
        $title = 'Update';
      } else {
        return redirect('admin/exams');
      }
    } else {
      $ft = 'add';
      $url = url('admin/exams/store');
      $title = 'Add New';
      $sd = '';
    }
    $page_title = "Exams";
    $page_route = "exams";
    $data = compact('rows', 'sd', 'ft', 'url', 'title', 'page_title', 'page_route');
    return view('admin.exams')->with($data);
  }
  public function store(Request $request)
  {
    // printArray($request->all());
    // die;
    $request->validate(
      [
        'exam_name' => 'required|unique:exams,exam_name',
      ]
    );
    $field = new Exam;
    $field->exam_name = $request['exam_name'];
    $field->exam_slug = slugify($request['exam_name']);
    $field->meta_title = $request['meta_title'];
    $field->meta_keyword = $request['meta_keyword'];
    $field->meta_description = $request['meta_description'];
    $field->page_content = $request['page_content'];
    $field->seo_rating = $request['seo_rating'];
    $field->save();
    session()->flash('smsg', 'New record has been added successfully.');
    return redirect('admin/exams');
  }
  public function delete($id)
  {
    //echo $id;
    echo $result = Exam::find($id)->delete();
  }
  public function update($id, Request $request)
  {
    $request->validate(
      [
        'exam_name' => 'required|unique:exams,exam_name,' . $id,
      ]
    );
    $field = Exam::find($id);
    $field->exam_name = $request['exam_name'];
    $field->exam_slug = slugify($request['exam_name']);
    $field->meta_title = $request['meta_title'];
    $field->meta_keyword = $request['meta_keyword'];
    $field->meta_description = $request['meta_description'];
    $field->page_content = $request['page_content'];
    $field->seo_rating = $request['seo_rating'];
    $field->save();
    session()->flash('smsg', 'Record has been updated successfully.');
    return redirect('admin/exams');
  }
}
