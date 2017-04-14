<?php

class CourseController extends Controller {

    private static $allowed_actions = array(
        'players',
        'index'
    );

    public function index(SS_HTTPRequest $request) {
        // ..
        print_r($request->allParams());
        return array(
            'Title' => 'courses'
        );        
    }

    public function players(SS_HTTPRequest $request) {
        print_r($request->allParams());
    }
}