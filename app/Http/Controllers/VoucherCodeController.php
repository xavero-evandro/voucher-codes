<?php

namespace App\Http\Controllers;

use App\Models\CouponCode;
use App\Models\Offer;
use App\Repository\Repository;
use Illuminate\Http\Request;

class VoucherCodeController extends Controller
{

    // space that we can use the repository from
    protected $model;

    public function __construct(CouponCode $coupons)
    {
        // set the model
        $this->model = new Repository($coupons);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupons = [];
        $offers = Offer::all();

        return view('welcome', [
            'coupons' => $coupons,
            'offers' => $offers,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $this->validate($request, [
//            'body' => 'required|max:500'
//        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//        // update model and only pass in the fillable fields
//        $this->model->update($request->only($this->model->getModel()->fillable), $id);
//
//        return $this->model->find($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
