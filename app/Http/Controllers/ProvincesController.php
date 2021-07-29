<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Provinces;
use Validator;
use Carbon\Carbon;


class ProvincesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $provinces = Provinces::where('province_active_status', 1)->get();

        return view('provinces.list', compact('provinces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('provinces.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(Request $request, Provinces $province)
    {
        $province = new Provinces();
        $province->province_id = $request->input('province_id');
        $province->province_name = $request->input('province_name');
        $province->province_active_status = $request->input('province_status');
        $province->updated_at = null;

        $province->save();
        return redirect()->route('provinces.index')->with('success', 'Thêm dữ liệu thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Provinces $provinces, $province_id)
    {
    }

    public function showDeleted()
    {
        $provinces = Provinces::onlyTrashed()->get();
        return view('provinces.deleted', compact('provinces'));
    }

    public function unlock($province_id)
    {
        $provinces = Provinces::onlyTrashed()->where('province_id', $province_id);
        $provinces->restore();

        $province = Provinces::find($province_id);
        $province->province_active_status = 1;
        $province->save();

        return redirect()->route('provinces.index')->with('success', 'Phục hồi dữ liệu thành công!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Provinces $provinces, $province_id)
    {
        $provinces = Provinces::find($province_id);

        //return $provinces;
        return view('provinces.edit', compact('provinces'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update(Request $request, Provinces $province)
    {
        $province->update($request->all());
        return redirect()->route('provinces.index')->with('success', 'Sửa dữ liệu thành công!');
    }

    public function delete(Provinces $province)
    {
        $provinces = Provinces::findOrFail($province->province_id);
        $provinces->province_active_status = 0;
        $provinces->save();
        $provinces->delete();

        return redirect()->route('provinces.index')->with('success', 'Xoá dữ liệu thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function destroy($province_id)
    {
        $provinces = Provinces::onlyTrashed()->where('province_id', $province_id);
        $provinces->forceDelete();

        return redirect()->route('provinces.showDeleted')->with('success', 'Xoá dữ liệu thành công!');
    }
}
