<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductListRequest;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Product;
use App\Ingredient;
use App\Category;

class NutraceuticalsController extends Controller
{
    /**
     * Display the product listing page
     *
     * @param ProductListRequest $request
     *
     * @return \Illuminate\View\View
     */
    public function products(ProductListRequest $request)
    {
        $productList = $this->createSortList(
            ['B', 'E', 'M', 'N', 'O', 'W', 'Show All']
        );

        // If q not exits, default is Show All
        $searchLetter = $request->get('q', 'Show All');

        switch($searchLetter) {

            case (preg_match( '/^[A-Z]$/', $searchLetter ) ? true : false):
                $products = Product::AlphabeticalOrder($searchLetter)->get();
                $productList[$searchLetter] = 'active';
                break;
            case 'Show All':
                $products = Product::all();
                $productList['Show All'] = 'active';
                break;
            default:
                $products = Product::all();
                $productList['Show All'] = 'active';
        }

        return view('pages.nutraceuticals.sortbyname.index', compact('products', 'productList'));
    }

    /**
     * Display the product information page
     *
     * @param Product $product
     *
     * @return \Illuminate\View\View
     */
    public function showProduct(Product $product)
    {
        return view('pages.nutraceuticals.product.index', compact('product'));
    }

    /**
     * Display the category listing page
     *
     * @return \Illuminate\View\View
     */
    public function categories()
    {
        $categories = Category::all();

        return view('pages.nutraceuticals.sortbycategory.index', compact('categories'));
    }

    /**
     * Display the category information page
     *
     * @param Category $category
     * @param Request $request
     *
     * @return \Illuminate\View\View
     */
    public function showCategory(Category $category, Request $request)
    {
        $productList = $this->createSortList([
            'A', 'B', 'C', 'D', 'E', 'F',
            'G', 'H', 'I', 'J', 'K', 'L',
            'M', 'N', 'O', 'P', 'Q', 'R',
            'S', 'T', 'U', 'V', 'W', 'X',
            'Y', 'Z', 'Show All'
        ]);

        // If q not exits, default is Show All
        $searchLetter = $request->get('q', 'Show All');

        switch($searchLetter) {

            case (preg_match( '/^[A-Z]$/', $searchLetter ) ? true : false):
                $products = $category->products()->AlphabeticalOrder($searchLetter)->get();
                $productList[$searchLetter] = 'active';
                break;
            case 'Show All':
                $products = $category->products()->get();
                $productList['Show All'] = 'active';
                break;
            default:
                $products = $category->products()->get();
                $productList['Show All'] = 'active';
        }

        return view('pages.nutraceuticals.category.index', compact('category', 'products', 'productList'));
    }

    /**
     * Display the ingredient listing page
     *
     * @param Request $request
     *
     * @return \Illuminate\View\View
     */
    public function ingredients(Request $request)
    {
        $ingredientList = $this->createSortList(
            ['A', 'B', 'C', 'L', 'M', 'P', 'S', 'Show All']
        );

        // If q not exits, default is Show All
        $searchLetter = $request->get('q', 'Show All');

        switch($searchLetter) {

            case (preg_match( '/^[A-Z]$/', $searchLetter ) ? true : false):
                $ingredients = Ingredient::AlphabeticalOrder($searchLetter)->get();
                $ingredientList[$searchLetter] = 'active';
                break;
            case 'Show All':
                $ingredients = Ingredient::all();
                $ingredientList['Show All'] = 'active';
                break;
            default:
                $ingredients = Ingredient::all();
                $ingredientList['Show All'] = 'active';
        }

        return view('pages.nutraceuticals.sortbyingredient.index', compact('ingredients', 'ingredientList'));
    }

    /**
     * Display the faq page
     *
     * @return \Illuminate\View\View
     */
    public function faq()
    {
        return view('pages.nutraceuticals.faq.index');
    }

    /**
     * Create an array contains the configurations for the sorting bar.
     * EnableList is an array which contains the letter/letters to enable for the sorting bar.
     *
     * @param $enableList
     *
     * @return array
     */
    private function createSortList($enableList)
    {
        $sortList = [
            'A' => 'disabled', 'B' => 'disabled', 'C' => 'disabled',
            'D' => 'disabled', 'E' => 'disabled', 'F' => 'disabled',
            'G' => 'disabled', 'H' => 'disabled', 'I' => 'disabled',
            'J' => 'disabled', 'K' => 'disabled', 'L' => 'disabled',
            'M' => 'disabled', 'N' => 'disabled', 'O' => 'disabled',
            'P' => 'disabled', 'Q' => 'disabled', 'R' => 'disabled',
            'S' => 'disabled', 'T' => 'disabled', 'U' => 'disabled',
            'V' => 'disabled', 'W' => 'disabled', 'X' => 'disabled',
            'Y' => 'disabled', 'Z' => 'disabled', 'Show All' => 'disabled'
        ];

        foreach ($enableList as $enable) {

            $sortList[$enable] = '';
        }

        return $sortList;
    }
}