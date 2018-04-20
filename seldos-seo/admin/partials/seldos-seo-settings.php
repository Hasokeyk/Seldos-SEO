<?php 

    $post = $this->seldos_postSecurty($_POST); 
	extract($post);
    
    $step1R = ['step'];
	if($this->seldos_postControl($step1R) and  $step == 'general'){
        
        update_option( 'googleAnalyticCode', $googleAnalyticCode,false);
        update_option( 'googleSCCode', $googleSCCode,false);
        update_option( 'yandexMetrica', $yandexMetrica,false);
        
    }else if($this->seldos_postControl($step1R) and  $step == 'titles'){
        
        $post_types = get_post_types('','names');
        unset($post_types['attachment']);
        unset($post_types['revision']);
        unset($post_types['nav_menu_item']);
        unset($post_types['custom_css']);
        unset($post_types['customize_changeset']);
        unset($post_types['oembed_cache']);
        foreach($post_types as $post_type){
            $a = get_post_type_object($post_type);
            $postName = (string) $a->name;
            update_option( $postName.'_title', ${$postName.'_title'},false);
            update_option( $postName.'_desc',  ${$postName.'_desc'},false);
        }
        
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
                   <?=__('Titles','seldos-seo')?>
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
                                        <input type="text" name="googleSCCode" class="googleSCCode" placeholder="UA-XXXXXXXX-X" value="<?=$googleSCCode?>"/>
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
                                        <input type="text" name="yandexMetrica" class="yandexMetrica" placeholder="UA-XXXXXXXX-X" value="<?=$yandexMetrica?>"/>
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
                        <input type="hidden" name="step" value="titles" />
                        <div class="col-12">
                        
                            <div class="col-12">
                                <?php 
                                    $post_types = get_post_types('','names');
                                    unset($post_types['attachment']);
                                    unset($post_types['revision']);
                                    unset($post_types['nav_menu_item']);
                                    unset($post_types['custom_css']);
                                    unset($post_types['customize_changeset']);
                                    unset($post_types['oembed_cache']);
                                    foreach ( $post_types as $post_type ) {
                                       $a = get_post_type_object($post_type);
                                ?>
                                <div class="tabContentHead">
                                    <?=$a->label?>
                                </div>
                                <div class="col-10">
                                    <div class="formElement labelUp">
                                        <label for=""><?=$a->label?> <?=__('Title','seldos-seo');?></label>
                                        <input type="text" name="<?=$post_type?>_title" placeholder="%postTitle% %sep% %sitename%" value="<?=get_option( $a->name.'_title' )?get_option( $a->name.'_title' ):'%postTitle% %sep% %sitename%'?>"/>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <div class="formElement labelUp">
                                        <label for=""><?=$a->label?> <?=__('Description','seldos-seo');?></label>
                                        <input type="text" name="<?=$post_type?>_desc" placeholder="%postDesc%" value="<?=get_option( $a->name.'_desc' )?get_option( $a->name.'_desc' ):'%postDesc%'?>"/>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                            
                            <hr />
                            
                            <div class="buttons">
                                <button><?=__('Save','seldos-seo')?></button>
                            </div>
                            
                        </div>
                    </form>
                </div>
				
                <div class="tabContent">
                    Coming Soon
                </div>
                
            </div>
            
        </div>
    </div>
</div>