<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
<script type="text/javascript">
      $(function() {

      $(".nap_delete").click(function(){

      //Save the link in a variable called element
      var element = $(this);
      //Find the id of the link that was clicked
      var activity = element.attr("id");
      //Built a url to send
       var infomation = 'activity=' + activity;
       var res = activity.split("/");
       var nap_id = res[0];
       var nap_table = res[1];
       var nap_msg = res[2];

          

       if(confirm("Sure you want to delete this "+ nap_msg +"? There is NO undo!"))
       {

       $.ajax({
         type: "POST",
         url: "nap_delete.php",
         data: infomation,
         success: function(){ 
          
         }

       });
            $(this).parents(".hide_table").animate({ backgroundColor: "#fbc7c7" }, "fast")
          .animate({ opacity: "hide" }, "slow");
          
       }     
    
      return false;
      });      
      });

</script>
<?php  include("nap_encrypt.php");  ?>
<input type="submit" class="nap_delete" id="5245/<?php echo encrypt_decrypt('encrypt', "table_name"); ?>/This is Msg">
<div class="hide_table">
sasas

</div>
