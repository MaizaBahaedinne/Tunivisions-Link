<style type="text/css">
       .alligator-turtle {
  object-fit: cover;
  object-position: 50% 20%;
  width: 100%;
  height: 200px;
}
table ,tr td{
    
}
tbody {
    display:block;
    height:600px;
    overflow:auto;
}
thead, tbody tr {
    display:table;
    width:100%;
    table-layout:auto;/* even columns width , fix width of table too*/
}
thead {
    width: calc( 100% - 1em )/* scrollbar is average 1em/16px width, remove it from thead width */
}
table {
    width:100%;
}

</style>

<div class="row">
              
               
            <?php foreach($userRecords as $record ) { ?>
               <div class="col-md-3 card" style="padding:16px" >
                  <img src="https://www.tunivisions.link/uploads/avatar/<?php echo $record->avatar ?>" class="card-img-top alligator-turtle" alt="...">
                  <div class="card-body">
                   
                     <a  href="<?php echo base_url() ?>User/ProfileShow/<?php echo $record->userId ?>"> 
                      <h5 class="card-title"><?php echo $record->name ?></h5>
                    </a>
                   
                    <p class="card-text"><?php if ($record->ClubName != 'Foundation' && $record->ClubName != 'Alumni' && $record->ClubName != 'Foundation Junior' ){ echo 'club' ;} echo " Tunivisions ";    echo $record->ClubName ?></p>
                    <p class="card-text"><small class="text-muted"><?php echo $record->role.' ' ; ?><?php echo $record->cellule ; ?></small></p>
                  </div>
                 
                    
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <?php foreach ($FreindRequest as $fr ) {
                      if ( $fr->userId == $record->userId )
                     { ?>
                        <a type="button" name="Accepte"  class="btn btn-warning"><i data-feather="activity"  ></i> Accepte</a>   
                    <?php } else { ?>
                        <button type="button" name="" id="<?php echo $record->userId ?>" class="btn btn-primary"><i data-feather="activity"  ></i> Link</button>
                    <?php }  }?>
                   <a href="<?php echo base_url() ?>User/ProfileShow/<?php echo $record->userId ?>"> <button type="button" class="btn">visiter</button></a>
                  </div>
                  
            
                </div>
            <?php   } ?>

              
 </div>


 <script type="text/javascript">
                    


                                $("button").click(function(){
                                    var id = $(this).attr('id');
                                    alert(id) ;
                                    $.ajax({
                                       url : '<?php echo base_url() ?>User/addNewLink/'+id ,
                                        type : 'POST',
                                       dataType : 'html',
                                       success : function(code_html, statut){ 
                                           $("#"+id).text('Unlink');  
                                            $("#"+id).removeClass() ; 
                                            $("#"+id).addClass("btn btn-danger") ; 

                                       },

                                       error : function(resultat, statut, erreur){

                                       }

                                    });
                                });

                            </script>