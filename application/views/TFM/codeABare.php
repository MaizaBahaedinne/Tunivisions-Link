<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");
?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="format-detection" content="telephone=no">
    <title>Javascript Code128A Barcode Web Fonts</title>
    <script type="text/javascript" src="<?php echo base_url() ?>js/connectcode-javascript-code128a.js"></script>

<STYLE TYPE="text/css" media="screen,print">
  @font-face {
    font-family: CCode128_S3_Trial;
    src: url("<?php echo base_url() ?>fonts/ConnectCode128_S3_Trial.eot");
    src: local("CCode128_S3_Trial"), url("<?php echo base_url() ?>fonts/ConnectCode128_S3_Trial.otf") format("opentype"), url("<?php echo base_url() ?>fonts/ConnectCode128_S3_Trial.woff") format("woff");
  }

  #barcode {font-weight: normal; font-style: normal; line-height:normal; font-family: 'CCode128_S3_Trial', sans-serif; font-size: 32px}

</STYLE>
  </head>

  <body>


<div style="width:5in">
<center>
 <?php 


                    
                    if(!empty($userRecords))
                    {
                        foreach($userRecords as $record)
                        {
                    ?>

                         <div style="margin-left: 5%">
                        <?php
                        $product = $record->name;
                        $id = $record->id;
                        $rate =  $record->userId;

             
                        echo "<p class='inline'><span ><b>Nom:".$product."</b> <br> Club : ".$record->ClubName."  </span>"
                        ?>
                        <center>
                            <div id="barcode<?php echo $id ; ?>"><p style="font-family:ConnectCode128_S3;"><?php echo $id ?></p>></div>
                            <div id="barcode_text"> TFM ID : <?php echo $id ?></div>
                            </center>
                            </div>  
                            <script type="text/javascript">
                 
                                o = document.getElementById("barcode<?php echo $id ; ?>") ; 
                                o.innerHTML = ConnectCode_Encode_Code128A(document.getElementById("barcode<?php echo $id ; ?>").innerHTML);
                                    

                             </script>   

                                
                         
                            

                  

                        <?php
                        }
                    }
                    ?>
     





  </body>
   


</html>
