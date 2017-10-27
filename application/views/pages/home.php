<div class="col-lg-6">
    
    
    <div class="container-fluid">
        
        <div class="row">
            <br/>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 "><span class="droite"><?php echo img('logo-90X90.png', 'logo') ?></span></div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><span class="gauche"><?php echo img('logo-mirroir-90X90.png', 'logo-mirroir'); ?></span></div>
        </div>
        
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 centrage"><?php echo img('bitcoin.png', 'Bitcoin') ?></div>
        </div>
        
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 centrage"><?php echo img('bitcoin.png', 'Bitcoin') ?></div>
        </div>
        
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 centrage textecss">Claim  <?= $param_valeur; ?> 
                <?php echo $this->monnaie_model->get_monnaie_nom($param_monnaie)['Cent']  ?> every
            <?= $param_temps; ?> minutes</div>
        </div>
        
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 centrage textecss"><?= $texte_centre_sup; ?> </div>
        </div>
        
        <?= form_open('claim'); ?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 centrage">
                <?php echo form_input(array('name'=>'inputwallet','value'=>$walletCookie,'class'=>'inputwallet', 'placeholder'=>'Enter Your ' . $param_monnaie . ' Address (FaucetHub)'))?><br />
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><span class="droite"><?php echo $pub_centre1; ?></span></div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><span class="gauche"><?php echo $pub_centre2; ?></span></div>
        </div>
        
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 centrage">
                <?= form_submit(array(
                    'name' => 'btnclaim',
                    'id' => 'submit', 
                    'value' => '> > > > > A c c e s  C l a i m  > > > > > ', 
                    'class' => 'btn-claim'
            ));?>
            </div> 
        </div>
      
        <div class="row">  
            <div class="col-lg-6col-md-6 col-sm-6 col-xs-6"><span class="droite"><?php echo $pub_centre3; ?></span></div>
            <div class="col-lg-6col-md-6 col-sm-6 col-xs-6"><span class="gauche"><?php echo $pub_centre4; ?></span></div>
        </div>
        <?= form_close();?>
        
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 centrage">
                <?php 
                echo form_label('Earn ' . $param_referal . '% referral commission'); 
                echo '<br/>';
                if($walletCookie == ''){
                    echo form_input(array('name'=>'referal','value'=>$param_URL . '/Your_Address','class'=>'referal', 'placeholder'=>'', 'readonly'=>'true'));
                }else{
                    echo form_input(array('name'=>'referal','value'=>$param_URL . '/' . $walletCookie,'class'=>'referal', 'placeholder'=>'', 'readonly'=>'true'));
                }
                ?>
            </div>
        </div>
        
    </div>
</div>