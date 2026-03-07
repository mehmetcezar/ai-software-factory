<?php
/*echo $_SESSION['sessionid'];
echo $_SESSION['uname'];
echo $_SESSION['kultipi'];
echo $pageid;*/

function kulsayfayetki($kultipix,$pageidx,$unamex){
$pageid=$pageidx;
$kultipi=$kultipix;
$uname=$unamex;
if($pageid=="adminpage"){
    
    
    if($kultipi=="admin"){
    if(checkadmin($uname))
             {
                
                    return 1; 
             }
    }
   else{ 
   
     return 0;
   }
    
}


    /*********************************************/



if($pageid=="kullaniciolusturma"){
    
    
    if($kultipi=="admin"){
    if(checkadmin($uname))
             {
                
               return 1; 
             }
    }
    
   else{ 
   
       return 0; 
   }
    
}
    
    
        /*********************************************/



if($pageid=="yetkilipage"){
    
    

    if($kultipi=="yetkili"){
    if(checkyetkili($uname))
             {
                
               return 1; 
             }
        
    }
           
   
  
   else{ 
   
       return 0; 
   }
    
}
    
    
/*********************************************/
    
    
    
        /*********************************************/



if($pageid=="muhasebepage"){
    
    

    if($kultipi=="muhasebe"){
    if(checkmuhasebe($uname))
             {
                
               return 1; 
             }
        
    }
            
   
  
   else{ 
   
       return 0; 
   }
    
}
    
    
/*********************************************/    

    
    
            /*********************************************/



if($pageid=="musteripage"){
    
    

    if($kultipi=="musteri"){
    if(checkmusteri($uname))
             {
                
               return 1; 
             }
        
    }
            
   
  
   else{ 
   
       return 0; 
   }
    
}
    
    
/*********************************************/  
 
    
                /*********************************************/



if($pageid=="kiralamasorumlusupage"){
    
    

    if($kultipi=="kiralamasorumlusu"){
    if(checkkiralamasorumlusu($uname))
             {
                
               return 1; 
             }
        
    }
      else if($kultipi=="yetkili"){
    if(checkyetkili($uname))
             {
                
               return 1; 
             }
        
    }        
   
  
   else{ 
   
       return 0; 
   }
    
}
    
    
/*********************************************/  
    
    
        /*********************************************/



if($pageid=="pasifgorme"){
    
    

    if($kultipi=="muhasebe"){
    if(checkmuhasebe($uname))
             {
                
               return 1; 
             }
        
    }
            
   else if($kultipi=="yetkili"){
    if(checkyetkili($uname))
             {
                
               return 1; 
             }
        
    }
  else if($kultipi=="kiralamasorumlusu"){
    if(checkkiralamasorumlusu($uname))
             {
                
               return 1; 
             }
        
    }       
   else{ 
   
       return 0; 
   }
    
}
    
    
    
if($pageid=="kiralamaonay"){
    
    

   if($kultipi=="yetkili"){
    if(checkyetkili($uname))
             {
                
               return 1; 
             }
        
    }
 
   else{ 
   
       return 0; 
   }
    
}
    
    if($pageid=="tahsilatonay"){
    
    

   if($kultipi=="yetkili"){
    if(checkyetkili($uname))
             {
                
               return 1; 
             }
        
    }
 
   else{ 
   
       return 0; 
   }
    
}
    

if($pageid=="kaporaonay"){
    
    

   if($kultipi=="yetkili"){
    if(checkyetkili($uname))
             {
                
               return 1; 
             }
        
    }
 
   else{ 
   
       return 0; 
   }
    
}
    
    if($pageid=="kaporasureonay"){
    
    

   if($kultipi=="yetkili"){
    if(checkyetkili($uname))
             {
                
               return 1; 
             }
        
    }
 
   else{ 
   
       return 0; 
   }
    
}
    
        if($pageid=="acenteolustur"){
    
    

   if($kultipi=="yetkili"){
    if(checkyetkili($uname))
             {
                
               return 1; 
             }
        
    }
 
   else{ 
   
       return 0; 
   }
    
}
    
    
    
    
    
        if($pageid=="kaporaiptalsureuzat"){
    
    

   if($kultipi=="yetkili"){
    if(checkyetkili($uname))
             {
                
               return 1; 
             }
        
    }
 
   else{ 
   
       return 0; 
   }
    
}
    
    
        if($pageid=="noticeonay"){
    
    

   if($kultipi=="yetkili"){
    if(checkyetkili($uname))
             {
                
               return 1; 
             }
        
    }
 
   else{ 
   
       return 0; 
   }
    
}
    

        if($pageid=="zararziyanonay"){
    
    

   if($kultipi=="yetkili"){
    if(checkyetkili($uname))
             {
                
               return 1; 
             }
        
    }
 
   else{ 
   
       return 0; 
   }
    
}    
    
/*********************************************/ 
    
/*********************************************/     
 
              if($pageid=="2wauthpage"){
    
       if($kultipi=="admin"){
    if(checkadmin($uname))
             {
                
               return 1; 
             }
    } 

   elseif($kultipi=="yetkili"){
    if(checkyetkili($uname))
             {
                
               return 1; 
             }
        
    }
    elseif($kultipi=="muhasebe"){
    if(checkmuhasebe($uname))
             {
                
               return 1; 
             }
        
    }
   else if($kultipi=="kiralamasorumlusu"){
    if(checkkiralamasorumlusu($uname))
             {
                
               return 1; 
             }
        
    }
    elseif($kultipi=="musteri"){
    if(checkmusteri($uname))
             {
                
               return 1; 
             }
        
    }
   else{ 
   
       return 0; 
   }
    
} 
    
/*********************************************/  
    
    
/*********************************************/ 


if($pageid=="xxxx"){
    
    
    if($kultipi=="admin"){
    if(checkadmin($uname))
             {
                
               return 1; 
             }
    }
    
    else if($kultipi=="labmuduru"){
    if(checkodayetkili($uname))
             {
                
               return 1; 
             }
        
    }
            
    else if($kultipi=="labsorumlusu"){
    if(checkmuellif($uname))
             {
                
               return 1; 
             }
    }
    
    else if($kultipi=="deneysorumlusu"){
    if(checksekreter($uname))
             {
                
               return 1; 
             }
    }
    else if($kultipi=="numunekayit"){
    if(checkvizeci($uname))
             {
                
               return 1; 
             }
    }
  
   else{ 
   
       return 0; 
   }
    
}



    
    
    
} /**ANA FONK***/




?>