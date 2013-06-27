<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<h2>Create new product...</h2>
<p><label>Tier Title
        <?=elgg_view('input/text', array('name' => 'title', 'required' => 'required'));?>
    </label></p>
    
    <p><label>Tier ID
        <?=elgg_view('input/text', array('name' => 'product_id', 'required' => 'required'));?>
    </label></p>
    
    
<p><label>Description
        <?=elgg_view('input/longtext', array('name' => 'description'));?>
    </label></p>
    
<p><label>Currency
        <?=elgg_view('input/dropdown', array('name' => 'currency', 'options_values' => array(
            'GBP' => 'Pound Sterling',
            'EUR' => 'Euro',
            'USD' => 'US Dollar',
        )));?>
    </label></p>
<p><label>Price in currency
        <?=elgg_view('input/text', array('name' => 'price', 'required' => 'required'));?>
    </label></p>    

    
    <?=elgg_view('forms/minds/tiers/extension', $vars); ?>
    <p>
        <?=elgg_view('input/submit', array('value' => 'Save')); ?>
    </p>