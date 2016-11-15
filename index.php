<!-- Ark's LUR Search Function -->
<html>  
        <link rel="stylesheet" href="js/gallery/examples/standard/css/vendor/normalize.css">
        <link rel="stylesheet" href="js/gallery/dist/gallery.prefixed.css">
        <link rel="stylesheet" href="js/gallery/dist/gallery.theme.css">
      <head>  
           <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
           <title>Ajax PHP Live Data Search</title>  
           <script src="js/jquery-3.1.1.js"></script>  
           <script src="bootstrap/bootstrap.min.js"></script>  
           <link href="theme/bootstrap.css" rel="stylesheet" />  
      </head>  
      <body> 
           <div class="container">  
                <br />  
                <h2 align="center">Ajax PHP Live Data Search</h2><br />  
                <div class="form-group">  
                     <div class="input-group">  
                          <span class="input-group-addon">Search</span>  
                          <input type="text" name="search_text" id="search_text" placeholder="Search by start typing" class="form-control" />  
                     </div>  
                </div>  
                <br />  
                <div id="result"></div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#search_text').keyup(function(){  
           var txt = $(this).val();  
           if(txt != '')  
           {  
                $.ajax({  
                     url:"fetch.php",  
                     method:"post",  
                     data:{search:txt},  
                     dataType:"text",  
                     success:function(data)  
                     {  
                          $('#result').html(data);  
                     }  
                });  
           }  
           else  
           {  
                $('#result').html('');                 
           }  
      });  
 });  
 </script>  