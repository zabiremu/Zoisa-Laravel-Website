<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function allCategory()
    {
        $allData = Category::latest()->get();
        return view('backend.category.view', compact('allData'));
    }

    public function createCategory()
    {
        return view('backend.category.index');
    }

    public function storeCategory(Request $request)
    {
        $data = new Category();
        $data->name = $request->category;
        if ($request->leftside != null) {
            $data->left_side = $request->leftside;
        } elseif ($request->rightside != null) {
            $data->right_side = $request->rightside;
        } else {
            $data->left_side = 1;
        }
        $data->save();
        $notification = array(
            'message' => 'Category Name Successfully Updated',
            'alert-type' => 'success',
        );
        return redirect()
            ->route('category.view')
            ->with($notification);
    }

    public function editCategory($id)
    {
        $Data = Category::find($id);
        return view('backend.category.edit', compact('Data'));
    }

    public function updateCategory(Request $request,$id)
    {
        $data = Category::find($id);
        $data->name = $request->category;
        if ($request->leftside != null) {
            $data->left_side = $request->leftside;
            $data->right_side = 0;
        } elseif ($request->rightside != null) {
            $data->right_side = $request->rightside;
            $data->left_side = 0;
        }
        $data->save();
        $notification =array(
            'message' => 'Category Name Successfully Updated',
            'alert-type' => 'success',
        );
        return redirect()
            ->route('category.view')
            ->with($notification);
    }

    public function deleteCategory($id)
    {
        $data = Category::find($id);
        $data->delete();
        $notification = array(
            'message' => 'Category Name Successfully deleted',
            'alert-type' => 'success',
        );
        return redirect()
            ->route('category.view')
            ->with($notification);
    }
}
