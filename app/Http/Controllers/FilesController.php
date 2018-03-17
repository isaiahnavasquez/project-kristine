<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FileSet;
use DB;

class FilesController extends Controller
{

  public function runSearch(Request $request) {
    $main = $request->main;
    $type = $request->type;
    $school_year = $request->school_year;
    $uploader = $request->uploader;
    $department = $request->department;

    if ($main !=null) {
      $query_priority = "SELECT * FROM file_sets WHERE name LIKE '%{$main}%' ";
    } else {
      $query_priority = "SELECT * FROM file_sets WHERE FALSE ";
    }
    $query_additional = $query_priority;

    if ($type != null) {
      $query_priority .= "AND type LIKE '%{$type}%' ";
      $query_additional .= "OR type LIKE '%{$type}%' ";
    }
    if ($school_year != null) {
      $query_priority .= "AND school_year LIKE '%{$school_year}%' ";
      $query_additional .= "OR school_year LIKE '%{$school_year}%' ";
    }
    if ($uploader != null) {
      $query_priority .= "AND uploader LIKE '%{$uploader}%' ";
      $query_additional .= "OR uploader LIKE '%{$uploader}%' ";
    }
    if ($department != null) {
      $query_priority .= "AND department LIKE '%{$department}%' ";
      $query_additional .= "OR department LIKE '%{$department}%' ";
    }

    $results_priority = DB::select($query_priority);
    $results_additional = DB::select($query_additional);

    $queries = array(
      'priority' => $query_priority,
      'additional' => $query_additional,
    );

    $results = array(
      'priority' => $results_priority,
      'additional' => $results_additional
    );

    return compact('results');

  }

  public function setUpload() {

    return view('files.upload');

  }

  public function uploadFiles(Request $request) {

    // save to the files_set
    $fileSet = new \App\FileSet;
    $fileSet->name = $request->name;
    $fileSet->uploader = $request->uploader;
    $fileSet->type = $request->type;
    $fileSet->school_year = $request->school_year;
    $fileSet->associated_id = $request->associated_id;
    $fileSet->department = $request->department;
    $fileSet->save();

    // save each file from the set
    for ($i = 0; $i < count($request['files']); $i++) {
      $index = $request['files'][$i];
      $filedata = new \App\File;
      $filedata->index = $index['index'];
      $filedata->value = $index['value'];
      $filedata->height = $index['height'];
      $filedata->width = $index['width'];
      $filedata->file_set_id = $fileSet->id;
      $filedata->save();
    }

    $response = array('id'=>$fileSet->id);

    return response($response);

  }

  public function getSearchPage() {

    return view('files.search');

  }

  public function viewFileSet(FileSet $fileset) {

    return view('files.view', compact('fileset'));

  }

}
