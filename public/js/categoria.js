

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
            $('#btnSalvar').attr('disabled', 'true');            
            if(nomcat.trim()!=""){
                 $.ajax({
             method:'post',
             url:destino,
             data: dadosForm,
             dataType:'html',
             success:function (data){
                 //Aahhhhhh
                 if(data=='true'){
                     msg = 'Categoria adicionada com sucesso!'
                    $('#status').hide();
                    $('#status').html('<h4 class="sucesso">'+msg+'</h4>');
                    $('#status').fadeIn(800);
                    
                    $('#nomcat').val('');
                    $('#nomcat').focus();
                    
                    $('#btnSalvar').removeAttr('disabled', 'true');
                 
                 }else {
              msg = 'deu merda!'
                    $('#status').hide();
                    $('#status').html('<h4 class="erro">'+msg+'</h4>');
                    $('#status').fadeIn(800);
                     $('#btnSalvar').removeAttr('disabled', 'true');
                 }
                
             },
             error: function(argument){
                msg = 'deu coco!'
                    $('#status').hide();
                    $('#status').html('<h4 class="erro">'+msg+'</h4>');
                    $('#status').fadeIn(800);
                     $('#btnSalvar').removeAttr('disabled', 'true');
             }
            
         }); 
            }else{
                msg = 'escreve uma coisa ai otario!'
                    $('#status').hide();
                    $('#status').html('<h4 class="erro">'+msg+'</h4>');
                    $('#status').fadeIn(800);
                     $('#btnSalvar').removeAttr('disabled', 'true');
            }
             return false;
        }
        
        function EditarCategoria(destino){
            dadosForm=$('#formAdd').serialize();
            nomcat=$('#nomcat').val();
            $('#btnSalvar').attr('disabled', 'true');            
            if(nomcat.trim()!=""){
                 $.ajax({
             method:'post',
             url:destino,
             data: dadosForm,
             dataType:'html',
             success:function (data){
                 //Aahhhhhh
                 if(data=='true'){
                     msg = 'Categoria editada com sucesso!'
                    $('#status').hide();
                    $('#status').html('<h4 class="sucesso">'+msg+'</h4>');
                    $('#status').fadeIn(800);
                    
                    $('#nomcat').val('');
                    $('#nomcat').focus();
                    
                    $('#btnSalvar').removeAttr('disabled', 'true');
                  
                 }else {
              msg = 'deu merda!'
                    $('#status').hide();
                    $('#status').html('<h4 class="erro">'+msg+'</h4>');
                    $('#status').fadeIn(800);
                     $('#btnSalvar').removeAttr('disabled', 'true');
                 }
                
             },
             error: function(argument){
                msg = 'deu coco!'
                    $('#status').hide();
                    $('#status').html('<h4 class="erro">'+msg+'</h4>');
                    $('#status').fadeIn(800);
                     $('#btnSalvar').removeAttr('disabled', 'true');
             }
            
         }); 
            }else{
                msg = 'escreve uma coisa ai otario!'
                    $('#status').hide();
                    $('#status').html('<h4 class="erro">'+msg+'</h4>');
                    $('#status').fadeIn(800);
                     $('#btnSalvar').removeAttr('disabled', 'true');
            }
             return false;
             
        }
       