<?php

namespace Iris\Http\Controllers;

use Illuminate\Http\Request;
use Iris\EquipmentActivityCategory;

class ActivityCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //Page Title
        $title = 'Modify Activity Categories';

        //Breadcrumbs
        $parentBreadcrumbs = array(
            '1' => array(
                'url' => '/admin',
                'name' => 'Admin'
            ),
            '2' => array(
                'url' => '/admin/settings',
                'name' => 'Settings'
            ),
        );

        $actcats = EquipmentActivityCategory::All();

        //Render Section
        return view ('pages.settings.act-cats', ['title' => $title, 'parentBreadcrumbs' => $parentBreadcrumbs, 'actcats' => $actcats]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $eqactcat = EquipmentActivityCategory::find($id); 

        $parentBreadcrumbs = array(
            '1' => array(
                'url' => '/admin',
                'name' => 'Admin'
            ),
            '2' => array(
                'url' => '/settings',
                'name' => 'Settings'
            ),
            '3' => array(
                'url' => '/activity-category',
                'name' => 'Activity Categories'
            ),
        );
        
        $title = "Edit" . $eqactcat->name;
        return view('pages.settings.edit-actcat', ['parentBreadcrumbs' => $parentBreadcrumbs, 'eqactcat' => $eqactcat, 'title' => $title]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $eqactcat = EquipmentActivityCategory::find($id);
            $this->validate(request(), [
              'name' => 'required'
            ]);

            //Fields
            $eqactcat->name = $request->get('name');

            $eqactcat->save();
            return redirect('/admin/settings/activity-category/')->with('success','Activity Category has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
