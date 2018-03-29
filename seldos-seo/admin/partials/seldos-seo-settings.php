<?php 

    $post = $this->postSecurty($_POST);
	extract($post);
    
    $step1R = ['step'];
	if($this->postControl($step1R) and  $step == 'general'){
        
        update_option( 'googleAnalyticCode', $googleAnalyticCode,false);
        update_option( 'googleSCCode', $googleSCCode,false);
        update_option( 'yandexMetrica', $yandexMetrica,false);
        
    }
    
    $googleAnalyticCode = empty(get_option( 'googleAnalyticCode' ))?'':get_option( 'googleAnalyticCode' );
    $googleSCCode = empty(get_option( 'googleSCCode' ))?'':get_option( 'googleSCCode' );
    $yandexMetrica = empty(get_option( 'yandexMetrica' ))?'':get_option( 'yandexMetrica' );

?><div class="container">
    <div class="seldosseo">
        <div class="pageTitle">
            <h1><?=__('Settings','seldos-seo')?></h1>
        </div>
        
        <div class="pageContent">
            
            <div class="tabs pageHeader">
                <div class="tab active">
                   <?=__('General','seldos-seo')?>
                </div>
                <div class="tab">
                   <?=__('Title','seldos-seo')?>
                </div>
                <div class="tab">
                   <?=__('Image','seldos-seo')?>
                </div>
            </div>
            
            <div class="tabsContent">
                
                <div class="tabContent">
                    <form action="" method="post">
                        <input type="hidden" name="step" value="general" />
                        <div class="col-12">
                            
                            <div class="col-12">
                                <div class="tabContentHead">
                                    <?=__('GOOGLE SETTINGS','seldos-seo')?>
                                </div>
                                
                                <div class="col-5">
                                    <div class="formElement labelUp">
                                        <label for=""><?=__('GOOGLE Analytic Code','seldos-seo')?></label>
                                        <input type="text" name="googleAnalyticCode" placeholder="UA-XXXXXXXX-X" value="<?=$googleAnalyticCode?>"/>
                                    </div>
                                </div>
                                
                                <div class="col-5">
                                    <div class="formElement labelUp">
                                        <label for=""><?=__('GOOGLE Search Console Code','seldos-seo')?></label>
                                        <input type="text" name="googleSCCode" placeholder="UA-XXXXXXXX-X" value="<?=$googleSCCode?>"/>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="col-12">
                                <div class="tabContentHead">
                                    <?=__('YANDEX SETTINGS','seldos-seo')?>
                                </div>
                                
                                <div class="col-12">
                                    <div class="formElement labelUp">
                                        <label for=""><?=__('YANDEX Metrica Code','seldos-seo')?></label>
                                        <input type="text" name="yandexMetrica" placeholder="UA-XXXXXXXX-X" value="<?=$yandexMetrica?>"/>
                                    </div>
                                </div>
                            </div>
                            
                            <hr />
                            
                            <div class="buttons">
                                <button><?=__('Save','seldos-seo')?></button>
                            </div>
                            
                        </div>
                    </form>
                </div>
                
                <div class="tabContent">
                    <form action="" method="post">
                        <div class="col-12">
                            <div class="formElement labelUp">
                                <label for=""><?=__('GOOGLE ANALYTIC CODE','seldos-seo')?></label>
                                <input type="text" name="googleAnalyticCode" placeholder="UA-XXXXXXXX-X" />
                            </div>
                            
                            <hr />
                            
                            <div class="buttons">
                                <button><?=__('Save','seldos-seo')?></button>
                            </div>
                            
                        </div>
                    </form>
                </div>
                
            </div>
            
        </div>
    </div>
</div>