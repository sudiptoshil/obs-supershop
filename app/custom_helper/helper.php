<?php
use App\Models\Permission;
use App\Models\Module;

function activeRole(){
    return $a=[1,2];
}
function sideBar()
 {
     $ac=activeRole();
     $modules = Permission::whereHas('roles',function($q)use($ac){
                    $q->whereIn('role_id', $ac);
                })->get()->groupBy('group_name');
                $returnData='';
    foreach($modules as $key=>$head){
        $returnData.='<li class="submenu">
                        <a href="javascript:void(0);">
                            <i class="icofont-chart-flow"></i>
                            <span>'.$key.'</span>
                            <span class="menu-arrow">
                                <i class="icofont-simple-right"></i>
                            </span>
                        </a>';
        $returnData.='<ul style="display: none;">';
            foreach($head as $permission){
                $returnData.='<li class="'.($permission->route_name? "":"submenu").'">
                                <a href="'.($permission->route_name? route($permission->route_name) : "javascript:void(0);" ).'">
                                    <i class="icofont-chart-flow"></i>
                                    <span>'.$permission->name.'</span>
                                </a>';
            }
        $returnData.='</ul>';
    }
     //$modules_html= headRecursive($modules);
     return $returnData;
     // dd($modules_html);
 }
 function headRecursive($modules){
     $returnData='';
     foreach($modules as $head){
         //return $head->name;
         $returnData.='<li class="'.($head->route_name? "":"submenu").'">
                        <a href="'.($head->route_name? route($head->route_name) : "javascript:void(0);" ).'">
                            <i class="icofont-chart-flow"></i>
                                <span>'.$head->name.'</span>';
          if($head->child){
            $returnData.='<span class="menu-arrow">
                            <i class="icofont-simple-right"></i>
                        </span>';
          }
          $returnData.='</a>';
         if($head->child){
             $returnData.='<ul style="display: none;">';
             $returnData.=headRecursive($head->child);
             $returnData.='</ul>';
         }
         $returnData.='</li>';
     }
     $returnData.='';
     return $returnData;
 }
 function getModules()
 {
     $ac=activeRole();
     $modules = Module::whereHas('roles',function($q)use($ac){
                    $q->whereIn('role_id', $ac);
                })->whereNull('parent_id')->with('child')->get();
     //return $modules;
     $modules_html= moduleRecursive($modules);
     return $modules_html;
     // dd($modules_html);
 }
 function moduleRecursive($modules){
    $returnData='';
    foreach($modules as $head){
        //return $head->name;
        $returnData.='<li class="'.($head->route_name? "":"submenu").'">
                       <a href="'.($head->route_name? route($head->route_name) : "javascript:void(0);" ).'">
                           <i class="icofont-chart-flow"></i>
                               <span>'.$head->name.'</span>';
         if($head->child){
           $returnData.='<span class="menu-arrow">
                           <i class="icofont-simple-right"></i>
                       </span>';
         }
         $returnData.='</a>';
         
        if($head->child){
            $returnData.='<ul style="display: none;">';
            $returnData.=headRecursive($head->child);
            $returnData.='</ul>';
        }else if($head->permissions){
            $returnData.='<ul style="display: none;">';
            foreach($head->permissions as $permission){
                 $returnData.='<li class="submenu">
                       <a href="'.($permission->route_name? route($permission->route_name) : "javascript:void(0);" ).'">
                           <i class="icofont-chart-flow"></i>
                               <span>'.$permission->name.'</span>
                        </a></li>';
            }  
            $returnData.='</ul>';
        }
        
        $returnData.='</li>';
    }
    $returnData.='';
    return $returnData;
}
