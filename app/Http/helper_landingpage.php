<?php

use App\Models\Admin;
use App\Models\Section;
use App\Models\LandingPage;
use App\Models\SectionUser;
use Illuminate\Support\Str;
use App\Models\BusinesGroup;
use App\Models\SectionPublic;
use Illuminate\Support\Facades\Hash;

if(! function_exists('landing_model_v1') ) {
    function landing_model_v1($model)
    {

         if($model == 'SectionPublic'){

            $section = Section::where([ ['name','Title'], ])->first();
            $section_id = $section->id;


            $updateorinsert = SectionPublic::updateOrCreate([
                'type'=> 'float' , 'name'=> 'right' , 'section_id'=> $section_id
            ],[
                'type'=> 'float' , 'name'=> 'right' , 'section_id'=> $section_id
            ]);

            $updateorinsert = SectionPublic::updateOrCreate([
                'type'=> 'float' , 'name'=> 'center' , 'section_id'=> $section_id
            ],[
                'type'=> 'float' , 'name'=> 'center' , 'section_id'=> $section_id
            ]);

            $updateorinsert = SectionPublic::updateOrCreate([
                'type'=> 'float' , 'name'=> 'left' , 'section_id'=> $section_id
            ],[
                'type'=> 'float' , 'name'=> 'left' , 'section_id'=> $section_id
            ]);

            $updateorinsert = SectionPublic::updateOrCreate([
                'type'=> 'bg' , 'name'=> 'color' , 'section_id'=> $section_id
            ],[
                'type'=> 'bg' , 'name'=> 'color' , 'section_id'=> $section_id
            ]);

            $updateorinsert = SectionPublic::updateOrCreate([
                'type'=> 'bg' , 'name'=> 'url' , 'section_id'=> $section_id
            ],[
                'type'=> 'bg' , 'name'=> 'url' , 'section_id'=> $section_id
            ]);

            $updateorinsert = SectionPublic::updateOrCreate([
                'type'=> 'bg' , 'name'=> 'none' , 'section_id'=> $section_id
            ],[
                'type'=> 'bg' , 'name'=> 'none' , 'section_id'=> $section_id
            ]);

         }

         if($model == 'Admin'){

            $updateorinsert = Admin::updateOrCreate([
                'email'   => 'admin@gmail.com'
            ],[
                 'name' => '  مدیریت سایت' ,
                 'email'=> 'admin@gmail.com',
                 'password'=> Hash::make('123456'),
            ]);


         }
         if($model == 'BusinesGroup'){


            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Shopping' , 'icon'=> 0 ],[ 'name'   => 'Shopping' , 'icon'=> 0 ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Medical' , 'icon'=> 0 ],[ 'name'   => 'Medical' , 'icon'=> 0 ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Sports' , 'icon'=> 0 ],[ 'name'   => 'Sports' , 'icon'=> 0 ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Events' , 'icon'=> 0 ],[ 'name'   => 'Events' , 'icon'=> 0 ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Music' , 'icon'=> 0 ],[ 'name'   => 'Music' , 'icon'=> 0 ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Transportation' , 'icon'=> 0 ],[ 'name'   => 'Transportation' , 'icon'=> 0 ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Finance' , 'icon'=> 0 ],[ 'name'   => 'Finance' , 'icon'=> 0 ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Education' , 'icon'=> 0 ],[ 'name'   => 'Education' , 'icon'=> 0 ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Kids-and-Teens' , 'icon'=> 0 ],[ 'name'   => 'Kids-and-Teens' , 'icon'=> 0 ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Movies-and-Cinema' , 'icon'=> 0 ],[ 'name'   => 'Movies-and-Cinema' , 'icon'=> 0 ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Travel' , 'icon'=> 0 ],[ 'name'   => 'Travel' , 'icon'=> 0 ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Food-and-Drink' , 'icon'=> 0 ],[ 'name'   => 'Food-and-Drink' , 'icon'=> 0 ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Business' , 'icon'=> 0 ],[ 'name'   => 'Business' , 'icon'=> 0 ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Other' , 'icon'=> 0 ],[ 'name'   => 'Other' , 'icon'=> 0 ]);

            $bugr =  BusinesGroup::where([ ['name','Shopping'], ])->orderby('id','desc')->first();
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Supermarket' , 'icon'=> 0 ],[ 'name'   => 'Supermarket' , 'icon'=> 0 , 'parent_id'=>$bugr->id ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Coffee-shop' , 'icon'=> 0 ],[ 'name'   => 'Coffee-shop' , 'icon'=> 0 , 'parent_id'=>$bugr->id ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Clothing' , 'icon'=> 0 ],[ 'name'   => 'Clothing' , 'icon'=> 0 , 'parent_id'=>$bugr->id ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Fruit-shop' , 'icon'=> 0 ],[ 'name'   => 'Fruit-shop' , 'icon'=> 0 , 'parent_id'=>$bugr->id ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Fast-food' , 'icon'=> 0 ],[ 'name'   => 'Fast-food' , 'icon'=> 0 , 'parent_id'=>$bugr->id ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Home-appliances' , 'icon'=> 0 ],[ 'name'   => 'Home-appliances' , 'icon'=> 0 , 'parent_id'=>$bugr->id ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Agricultural-supplies' , 'icon'=> 0 ],[ 'name'   => 'Agricultural-supplies' , 'icon'=> 0 , 'parent_id'=>$bugr->id ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Juice-shop' , 'icon'=> 0 ],[ 'name'   => 'Juice-shop' , 'icon'=> 0 , 'parent_id'=>$bugr->id ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Butcher-shop' , 'icon'=> 0 ],[ 'name'   => 'Butcher-shop' , 'icon'=> 0 , 'parent_id'=>$bugr->id ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Catering' , 'icon'=> 0 ],[ 'name'   => 'Catering' , 'icon'=> 0 , 'parent_id'=>$bugr->id ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Pastry-shop-and-confectionery' , 'icon'=> 0 ],[ 'name'   => 'Pastry-shop-and-confectionery' , 'icon'=> 0 , 'parent_id'=>$bugr->id ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Restaurant' , 'icon'=> 0 ],[ 'name'   => 'Restaurant' , 'icon'=> 0 , 'parent_id'=>$bugr->id ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Florist' , 'icon'=> 0 ],[ 'name'   => 'Florist' , 'icon'=> 0 , 'parent_id'=>$bugr->id ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Cosmetics' , 'icon'=> 0 ],[ 'name'   => 'Cosmetics' , 'icon'=> 0 , 'parent_id'=>$bugr->id ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Nuts-and-dried fruits' , 'icon'=> 0 ],[ 'name'   => 'Nuts-and-dried fruits' , 'icon'=> 0 , 'parent_id'=>$bugr->id ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Dairy' , 'icon'=> 0 ],[ 'name'   => 'Dairy' , 'icon'=> 0 , 'parent_id'=>$bugr->id ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Stationery' , 'icon'=> 0 ],[ 'name'   => 'Stationery' , 'icon'=> 0 , 'parent_id'=>$bugr->id ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Perfume-shop' , 'icon'=> 0 ],[ 'name'   => 'Perfume-shop' , 'icon'=> 0 , 'parent_id'=>$bugr->id ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Sports-equipment' , 'icon'=> 0 ],[ 'name'   => 'Sports-equipment' , 'icon'=> 0 , 'parent_id'=>$bugr->id ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Carpet-shop' , 'icon'=> 0 ],[ 'name'   => 'Carpet-shop' , 'icon'=> 0 , 'parent_id'=>$bugr->id ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Bakery' , 'icon'=> 0 ],[ 'name'   => 'Bakery' , 'icon'=> 0 , 'parent_id'=>$bugr->id ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Other' , 'icon'=> 0 , 'parent_id'=>$bugr->id ],[ 'name'   => 'Other' , 'icon'=> 0 , 'parent_id'=>$bugr->id ]);

            $bugr =  BusinesGroup::where([ ['name','Medical'], ])->orderby('id','desc')->first();
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'General-Practitioner' , 'icon'=> 0 ],[ 'name'   => 'General-Practitioner' , 'icon'=> 0 , 'parent_id'=>$bugr->id ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Specialist' , 'icon'=> 0 ],[ 'name'   => 'Specialist' , 'icon'=> 0 , 'parent_id'=>$bugr->id ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Family-Physician' , 'icon'=> 0 ],[ 'name'   => 'Family-Physician' , 'icon'=> 0 , 'parent_id'=>$bugr->id ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Emergency-Medicine-Physician' , 'icon'=> 0 ],[ 'name'   => 'Emergency-Medicine-Physician' , 'icon'=> 0 , 'parent_id'=>$bugr->id ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Radiologist' , 'icon'=> 0 ],[ 'name'   => 'Radiologist' , 'icon'=> 0 , 'parent_id'=>$bugr->id ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Medical-Pathologist' , 'icon'=> 0 ],[ 'name'   => 'Medical-Pathologist' , 'icon'=> 0 , 'parent_id'=>$bugr->id ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Sonographer' , 'icon'=> 0 ],[ 'name'   => 'Sonographer' , 'icon'=> 0 , 'parent_id'=>$bugr->id ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Forensic-Pathologist' , 'icon'=> 0 ],[ 'name'   => 'Forensic-Pathologist' , 'icon'=> 0 , 'parent_id'=>$bugr->id ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Immunologist' , 'icon'=> 0 ],[ 'name'   => 'Immunologist' , 'icon'=> 0 , 'parent_id'=>$bugr->id ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Allergist-and-Immunologist' , 'icon'=> 0 ],[ 'name'   => 'Allergist-and-Immunologist' , 'icon'=> 0 , 'parent_id'=>$bugr->id ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Neurologist' , 'icon'=> 0 ],[ 'name'   => 'Neurologist' , 'icon'=> 0 , 'parent_id'=>$bugr->id ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Electrophysiologist' , 'icon'=> 0 ],[ 'name'   => 'Electrophysiologist' , 'icon'=> 0 , 'parent_id'=>$bugr->id ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Occupational-Medicine-Physician' , 'icon'=> 0 ],[ 'name'   => 'Occupational-Medicine-Physician' , 'icon'=> 0 , 'parent_id'=>$bugr->id ]);
            $updateorinsert = BusinesGroup::updateOrCreate([ 'name'   => 'Other' , 'icon'=> 0 , 'parent_id'=>$bugr->id ],[ 'name'   => 'Other' , 'icon'=> 0 , 'parent_id'=>$bugr->id ]);







        }


         if($model == 'Section'){

            $updateorinsert = Section::updateOrCreate([
                'name'   => 'Title'
            ],[
                'name'   => 'Title'
            ]);
            $updateorinsert = Section::updateOrCreate([
                'name'   => 'Text'
            ],[
                'name'   => 'Text'
            ]);
            $updateorinsert = Section::updateOrCreate([
                'name'   => 'Step'
            ],[
                'name'   => 'Step'
            ]);
            $updateorinsert = Section::updateOrCreate([
                'name'   => 'Priceng'
            ],[
                'name'   => 'Priceng'
            ]);
            $updateorinsert = Section::updateOrCreate([
                'name'   => 'Advences'
            ],[
                'name'   => 'Advences'
            ]);
            $updateorinsert = Section::updateOrCreate([
                'name'   => 'Logos'
            ],[
                'name'   => 'Logos'
            ]);
         }

    }
}




if(! function_exists('config_run_first') ) {
    function config_run_first()
    {
        landing_model_v1('Admin');
        landing_model_v1('BusinesGroup');
        landing_model_v1('Section');
        landing_model_v1('SectionPublic');
    }
}
