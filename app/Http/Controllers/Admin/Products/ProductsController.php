<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProdcutAddRequest;
use App\Http\Requests\ProductUpdateResquest;
use App\Models\ProductImage;
use App\Models\Products;
use App\Services\Recursive as Recursive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class ProductsController extends Controller
{
    private $products;
    private $recursive;
    private $productImage;
    public function __construct(Products $products, Recursive $recursive, ProductImage $productImage)
    {
        $this->products = $products;
        $this->recursive = $recursive;
        $this->productImage = $productImage;
    }
    public function index(Request $request)
    {
        try {
            if ($request->search != null) {
                $products = $this->products::withoutTrashed()->select('pro_id', 'pro_name', 'pro_price', 'pro_img', 'category_id')->where('pro_name', 'like', '%' . $request->search . '%')->latest('created_at')->paginate(20);
            } else {
                $products = $this->products::withoutTrashed()->select('pro_id', 'pro_name', 'pro_price', 'pro_img', 'category_id')->latest('created_at')->paginate(20);
            }
            return view('Admin.Product.product', compact('products'));
        } catch (\Throwable $exception) {
            $products = [];
            DB::rollBack();
            Log::channel('daily')->error('Message: ' . $exception->getMessage() . ' Line :' . $exception->getLine());
            Alert::error('Error', 'Connection failed !');
            return view('Admin.Product.product', compact('products'));;
        }
    }

    public function add()
    {
        $htmlOptions = $this->recursive->categoryRecursive();
        return view('Admin.Product.add', compact('htmlOptions'));
    }

    public function create(ProdcutAddRequest $request)
    {
        try {
            DB::beginTransaction();
            $file = $request->file('image');
            $imageData = file_get_contents($file->getRealPath());
            $product = $this->products::create([
                'pro_name' => $request->pro_name,
                'pro_price' => $request->pro_price,
                'pro_brand' => $request->pro_brand,
                'pro_description' => $request->pro_description,
                'category_id' => $request->category_id,
                'pro_img' =>  $imageData,
            ]);
            if ($request->hasFile('img_childent')) {
                $count =1;
                foreach ($request->img_childent as $item) {
                    $imageChildentData = file_get_contents($item->getRealPath());
                    $product->productImages()->create([
                        'product_id' => $product->id,
                        'proImg_img' => $imageChildentData,
                        'proImg_order' => $count,
                    ]);
                    $count++;
                }
            }
            DB::commit();
            Alert::success('Create Success', 'Product Created Successfully');
            return redirect()->route('admin-products');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::channel('daily')->error('Message: ' . $exception->getMessage() . ' Line :' . $exception->getLine());
            Alert::error('Create error', 'Product Created Error !');
            return redirect()->route('admin-products')->with('toast_error', 'Product Created Error !');
        }
    }

    public function edit($id, Recursive $recursive)
    {
        $product = $this->products->find($id);
        $htmlOptions = $this->recursive->categoryRecursiveEdit($product->category_id);
        return view('Admin.product.edit', compact('htmlOptions', 'product'));
    }

    public function update($id, ProductUpdateResquest $request)
    {
        try {
            DB::beginTransaction();
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $imageData = file_get_contents($file->getRealPath());
                $this->products->find($id)->update([
                    'pro_name' => $request->pro_name,
                    'pro_price' => $request->pro_price,
                    'pro_brand' => $request->pro_brand,
                    'pro_description' => $request->pro_description,
                    'category_id' => $request->category_id,
                    'pro_img' =>  $imageData,
                ]);
            } else {
                $this->products->find($id)->update([
                    'pro_name' => $request->pro_name,
                    'pro_price' => $request->pro_price,
                    'pro_brand' => $request->pro_brand,
                    'pro_description' => $request->pro_description,
                    'category_id' => $request->category_id,
                ]);
            }
            for ($i = 1; $i < 6; $i++) {
                if ($request->hasFile('img_' . $i)) {
                    $imgId = $request->input('img_id_' . $i);
                    $file = $request->file('img_' . $i);
                    $imageData = file_get_contents($file->getRealPath());
                    $this->productImage->find($imgId)->update([
                        'proImg_img' => $imageData,
                    ]);
                }
            }

            DB::commit();
            Alert::success('Update Success', 'Product Updated Successfully');
            return redirect()->route('admin-products')->with('toast_success', 'Product Updated Successfully!');;
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::channel('daily')->error('Message: ' . $exception->getMessage() . ' Line :' . $exception->getLine());
            Alert::error('Update error', 'Product Updated Error !');
            return redirect()->route('admin-products')->with('toast_error', 'Product Updated Error !');
        }
    }

    // public function delete($id){
    //     try {
    //         DB::beginTransaction();
    //         $this->product::find($id)->delete();
    //         DB::commit();
    //         return redirect()->route('product.index')->with('toast_success','Product Delete Successfully!');;
    //     }catch (\Exception $exception){
    //         DB::rollBack();
    //         Log::channel('daily')->error('Message: '.$exception->getMessage().' Line :'.$exception->getLine());
    //         return redirect()->route('product.index')->with('toast_error','Product Delete Error !');
    //     }
    // }
}
