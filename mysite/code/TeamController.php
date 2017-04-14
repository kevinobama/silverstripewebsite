<?php

class TeamController extends Controller {

    private static $allowed_actions = array(
        'players',
        'index'
    );

    public function index(SS_HTTPRequest $request) {
        // ..
        return array(
            'Title' => 'My Team Name kevin'
        );        
    }

    public function players(SS_HTTPRequest $request) {
        print_r($request->allParams());
    }
}