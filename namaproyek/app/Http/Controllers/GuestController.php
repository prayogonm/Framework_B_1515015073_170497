<?php

class GuestController extends BaseController {

    public function hello() {
        return View::make('viewHello');
    }

}
