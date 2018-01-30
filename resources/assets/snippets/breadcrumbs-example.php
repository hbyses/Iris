<?php

//This is an example of how breadcrumbs are implemented in the controller. 

function make_a_page(){

    //Page Title
    $title = 'Start';

    //Breadcrumbs - You can use as few or as many breadcrumbs you want in the array. 
    $parentBreadcrumbs = array(); //This empty array contstructor is left in to initialise the array incase the user does not want any parent breakdrumbs and the title breadcrumb is enough. 
    $parentBreadcrumbs = array(
        '1' => array( //This is the level under the current location, but furthest away from the root. 
            'url' => 'test1', //This link is relative to the users current location so for breaddrumbs its best practive to include a mostly qualified location. eg '/test1' in place of 'test1'
            'name' => 'test1'
        ),
        '2' => array(
            'url' => 'test2',
            'name' => 'test2'
        ),
        '3' => array( //This is the level closest to the root but furthest away from the current location
            'url' => 'test3',
            'name' => 'test3'
        )
    );

    //Render Section
    return view ('pages.main.index', ['title' => $title, 'parentBreadcrumbs' => $parentBreadcrumbs]);
}

?>