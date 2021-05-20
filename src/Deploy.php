<?php

namespace App;
// This class is made for change root on dev phase and deploy phase
// On development phase need to add /SitePerso on return switch function
// Before deploy need to return nothing
class Deploy {


    public function switch(){
        return '/SitePerso';
    }
}