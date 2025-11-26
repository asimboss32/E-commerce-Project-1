<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    public function subCategoryList()
    {
        $subCategories = SubCategory::with('category')->get();
        return view('backend.sub-category.list', compact('subCategories'));
    }

    public function subCategoryCreate()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        return view('backend.sub-category.create', compact('categories'));
    }

    public function subCategoryStore(Request $request)
    {
        // ✅ Validation
        $request->validate([
            'cate_id' => 'required|exists:categories,id',
            'name'    => 'required|string|max:255',
        ]);

        $subCategory = new SubCategory();
        $subCategory->cate_id = $request->cate_id;
        $subCategory->name    = $request->name;
        $subCategory->slug    = Str::slug($request->name);

        $subCategory->save();

        return redirect()->back()->with('success', 'Sub Category created successfully!');
    }

    public function subCategoryEdit($id)
    {
        $subCategory = SubCategory::findOrFail($id);
        $categories = Category::orderBy('name', 'asc')->get();
        return view('backend.sub-category.edit', compact('subCategory','categories'));
    }

    public function subCategoryUpdate(Request $request, $id)
    {
        // ✅ Validation
        $request->validate([
            'cate_id' => 'required|exists:categories,id',
            'name'    => 'required|string|max:255',
        ]);

        $subCategory = SubCategory::findOrFail($id);
        $subCategory->cate_id = $request->cate_id;
        $subCategory->name    = $request->name;
        $subCategory->slug    = Str::slug($request->name);

        $subCategory->save();

        return redirect('admin/sub-category/list')->with('success', 'Sub Category updated successfully!');
    }

    public function subCategoryDelete($id)
    {
        $subCategory = SubCategory::findOrFail($id);
        $subCategory->delete();

        return redirect()->back()->with('success', 'Sub Category deleted successfully!');
    }
}
