 
<?php ob_start();?>


        <div style='margin-top:51px' class="container">
          <!-- Example row of columns -->
        
          <div class="row">
             <h1 style='padding:10px;padding-bottom:30px' class='text-center'><b>
                      <?php if($langue=='fr') { ?>
                        Resultats de la recherche
                      <?php } else  { ?>
                         Search results
                      <?php }?> 
             </b></h1>
             <div class='col-md-12'>
              <?php if ($type == 'domaine') { ?>
                <div class='col-md-4'>
                  <table class='table table-hover'>
                    <caption>

                      <?php if($langue=='fr') { ?>
                        Sous-domaine
                      <?php } else  { ?>
                         Subdomain
                      <?php }?> : 
                      <?php echo $domaine; ?>

                    </caption>
                      <tbody>
                            <?php foreach ($subdomain as $value) { ?>
                              <?php if(isset($value['0'])) { ?>    
                                <tr><td onmouseover='getTerm(this,"<?php echo $langue?>")' onclick='getTerm(this,"<?php echo $langue?>")' id='<?php echo $value['0'];?>'style='cursor:pointer'><?php echo $value['0'];?> </td></tr>
                              <?php } ?>
                            <?php } ?>
                   </tbody>
                  </table>
                </div>
               
                <div class='col-md-8'>
                  <table class='table table-hover'>
                    <caption>
                      <?php if($langue=='fr') { ?>
                        Termes associés
                      <?php } else  { ?>
                          Associated terms
                      <?php }?> 
                    </caption>
                      <tbody id='fillTerm'>
                        <tr><td>Cliquez sur un sous-domaine pour afficher les termes associés</tr></td>
                      </tbody>
                  </table>
                </div>
                <?php } 
                ?>     
                <?php if ($type == 'terme') { ?>   
                  <table class='table table-hover'>
                    <caption>
                      <?php if($langue=='fr') { ?>
                        Termes 
                      <?php } else  { ?>
                          Terms
                      <?php }?> 
                    </caption>
                      <tbody id='fillTerm'>
                        <?php if($langue=='fr') { 
                          foreach ($terms as $value) {?>
                           <tr style="cursor:pointer"><td><a href="fiche-<?php echo $value['idfichefr'] ?>"><?php echo $value['terme'] ?></a></td></tr>
                        <?php }
                        } else { 
                          foreach ($terms as $value) {?>
                           <tr style="cursor:pointer"><td><a href="ficheen-<?php echo $value['idficheen'] ?>"><?php echo $value['term'] ?></a></td></tr>
                        <?php }
                        } ?>
                        
                      </tbody>
                  </table>                  
                <?php } ?>         
              </div>

          </div>



<?php $content_for_layout = ob_get_clean();

require('views/layout.php');
