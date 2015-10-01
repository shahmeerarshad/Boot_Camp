<section class="container pb80">
      <div class="main-heading clearfix">
          <h2><?php print t('Open Positions');?></h2>
          <?php $i=0;?>
      </div>
      <div class="mt20">
       <div class="" data-example-id="collapse-accordion">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
           <?php foreach ($rows as $row_count => $row): ?>
            <?php $i++;?>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading<?php echo $i;?>">
              <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i;?>" aria-expanded="true" aria-controls="collapse<?php echo $i;?>" class="">
                  <?php echo $row['field_job_title']?>  <span class="job-date"><?php echo $row['field_job_date']?></span>
                </a>
              </h4>
            </div>
            <div id="collapse<?php echo $i;?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading<?php echo $i;?>">
              <div class="panel-body">
                <table width="365" border="0" cellspacing="0" cellpadding="0" class="jsFntSz">

                  <tbody><tr>
          <td width="220" height="22" valign="middle">Industry:</td>
          <td width="220" height="22" valign="middle" itemprop="industry" class="jsFntSzFd">
          <?php echo $row['field_industry']?></td>
        </tr>
                  
                <tr>
          <td width="220" height="22" valign="middle">Functional Area:</td>
          <td width="220" height="22" valign="middle" itemprop="occupationalCategory" class="jsFntSzFd">
          <?php echo $row['field_job_functional']?>          </td>
        </tr>
                        <tr>
          <td width="220" height="22" valign="middle">Total Position:</td>
          <td width="220" height="22" valign="middle" class="jsFntSzFd"><?php echo $row['field_total_position']?></td>
        </tr>
                        <tr>
          <td width="220" height="22" valign="middle">Job Type:</td>
          <td width="220" height="22" valign="middle" itemprop="employmentType" class="jsFntSzFd"><?php echo $row['field_job_type']?> </td>
        </tr>
                  <tr>
          <td width="220" height="22" valign="middle">Department:</td>
          <td width="220" height="22" valign="middle" class="jsFntSzFd"><?php echo $row['field_department']?></td>
        </tr>
               
            <tr>
          <td width="220" height="22" valign="middle">Job Location:</td>
          <td width="220" height="22" valign="middle" class="jsFntSzFd"><?php echo $row['field_job_location']?></td>
        </tr>
      
             
        
                 <tr>
          <td width="220" height="22" valign="middle">Gender:</td> 
          <td width="220" height="22" valign="middle" class="jsFntSzFd"><?php echo $row['field_gender']?></td>
        </tr>
                        <tr>
          <td width="220" height="22" valign="middle">Minimum Education:</td>
          <td width="220" height="22" valign="middle" class="jsFntSzFd"><?php echo $row['field_min_education']?></td>
        </tr>
                        <tr>
          <td width="220" height="22" valign="middle">Career Level: </td>
          <td width="220" height="22" valign="middle" class="jsFntSzFd"><?php echo $row['field_career_level']?></td>
        </tr>
                        <tr>
          <td width="220" height="22" valign="middle">Apply By:</td>
          <td width="220" height="22" valign="middle" class="jsFntSzFd"><?php echo $row['field_apply_by']?></td>
        </tr>
                <tr>
        
          <td width="220" height="22" valign="middle">Job Posting Date:</td>
          <td width="220" height="22" valign="middle" itmeprop="datePosted" class="jsFntSzFd"><?php echo $row['field_job_posting_date']?></td>
        </tr>
        <tr>
          <td width="220" height="22" valign="middle">Apply Now</td>  
          <td width="220" height="22" valign="middle" itmeprop="datePosted" class="jsFntSzFd"><?php echo $row['field_apply_now']?></td>
        </tr>
        <tr class="prntBx">
          <td width="220" height="22" valign="middle">&nbsp;</td>
          <td width="220" height="22" valign="middle" class="jsFntSzFd">&nbsp;</td>
        </tr>
           <tr class="prntBx">
          <td colspan="2" valign="middle">
          <div class="detritContAd" style="float:left; text-align:left">
    
           </div>
           </td>
         </tr>
          <tr class="prntBx">
            <td height="10" colspan="2" valign="middle"></td>
          </tr>
        
               
      </tbody>
    </table>
              </div>
            </div>
          </div>
        <?php endforeach;?>
        </div>
      </div>
      </div>
    
    </section>