<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FoldersController extends Controller
{
    
	public function getFoldersList() {

		$folders = DB::table('folders')->get();

		return view('files.folders', compact('folders'));

	}

	public function getSubFolders($folder_id) {

		return view('files.sub_folders');

	}

	public function getSubFolderDetails(Request $request) {

		$fileset_db = new \App\FileSet;
		$result = $fileset_db
						->where('name', $request->sub_folder_name)
						->where('folder_id', $request->folder_id)->get();

		if ($result->count() > 0) {
			$response = array(
				'record_exists' => 'true',
				'data' => $result[0]
			);
		} else {
			$response = array(
				'record_exists' => 'false'
			);
		}

		return compact('response');

	}

	public function getSubFoldersList(Request $request) {

		try {

			$sub_folders = new \App\FileSet;
			$list = $sub_folders::where('folder_id', $request->folder_id)->get();
			$response = $list->toArray();

			return compact('response');	

		} catch (\Exception $e) {
			
			return $e->getMessage();

		}

	}

}
