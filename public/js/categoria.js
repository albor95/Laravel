

function eliminarCategoria(idForm,destino){
            confirma=confirm("keh memu faze sapoha ai?");
            
         dadosForm=$('#'+idForm).serialize();
         if(confirma){
         $.ajax({
             method:'post',
             url:destino,
             data: dadosForm,
             dataType:'html',
             success:function (data){
                 //Aahhhhhh
                 if(data=='true'){
                     //$('#linha'+idForm).remove();
                     $('#linha'+idForm).fadeOut(1000);
                 }else {
                     alert('deu coco');
                 }
                
             },
             error: function(argument){
                 //fdhgfdshfsdfjkdkfskdj
                 alert('cago o bagulho');
             }
            
         }); 
        }
         return false;
        }
      
      
        function mostrarEsconderTitulo(){
                $('#titulo').toggle(400);
        }
        function adicionarCategoria(destino){
            dadosForm=$('#formAdd').serialize();
            nomcat=$('#nomcat').val();
            if(nomcat.trim()!=""){
                 $.ajax({
             method:'post',
             url:destino,
             data: dadosForm,
             dataType:'html',
             success:function (data){
                 //Aahhhhhh
                 if(data=='true'){
                     //$('#linha'+idForm).remove();
                       $('#p1').fadeIn(400);
                       $('#p1').fadeOut(2000);
                        //history.back();
                        $('#nomcat').val('');
                        $('#nomcat').focus();
                 }else {
              $('#p2').fadeIn(400);
              $('#p2').fadeOut(2000);
              
                 }
                
             },
             error: function(argument){
                 //fdhgfdshfsdfjkdkfskdj
                $('#p3').fadeIn(400);
                $('#p3').fadeOut(2000);
             }
            
         }); 
            }else{
                 $('#p4').fadeIn(400);
                 $('#p4').fadeOut(2000);
            }
             return false;
        }
       