$(document).ready(function(){

  

  count=1

   $('#image1').show();
   $('#image2').hide();
   $('#image3').hide();
    
   $("#super1").click(
        function(){
             count=1 
             $('#image1').show();
             $('#image2').hide();
             $('#image3').hide();
        
     });

   $("#super2").click(
        function(){
             count=2   
             $('#image1').hide();
             $('#image2').show();
             $('#image3').hide();
        
     });

   $("#super3").click(
        function(){
             count=3   
             $('#image1').hide();
             $('#image2').hide();
             $('#image3').show();
        
     });

   $("#left").click(
        function(){
             if (count<0){  
             currentimage='#image'+count
             //alert (currentimage)
             $(currentimage).hide();
             count-=1
             nextimage='#image'+count
             $(nextimage).show();
             }
     });
     
   $("#right").click(
        function(){
             if (count<3){
             currentimage='#image'+count
             //alert (currentimage)
             $(currentimage).hide();
             count+=1
             nextimage='#image'+count
             $(nextimage).show();
             }
     });


});
