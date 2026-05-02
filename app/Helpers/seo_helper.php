<?php

function getSeoBase(array $seo_data, array $settings)
{
    $seo_data = checkSeoData($seo_data, $settings);

    return '
	    <!-- SEO -->
        <meta charset="UTF-8">
    
        <title>'.$seo_data['title'].'</title>
        <meta name="description" content="'.$seo_data['description'].'">
        <meta name="keywords" content="'.$seo_data['keywords'].'">
    
        <meta name=”robots” content="index, follow">
    
        <meta property="og:image" content="" />
        <meta property="og:title" content="'.$seo_data['title'].'" />
        <meta property="og:description" content="'.$seo_data['description'].'" />
        <meta property="og:type" content="article" />
        <meta property="og:site_name" content="'.$seo_data['title'].'" />
    
        <meta property="twitter:title" content="'.$seo_data['title'].'" />
        <meta property="twitter:description" content="'.$seo_data['description'].'" />
        <meta property="twitter:card" content="summary_large_image" />
        <meta property="twitter:image:src" content="" />
    ';
}

function checkSeoData(array $seo_data, array $settings){
    $seo_data['title'] = (!isset($seo_data['title']))
        ? getSettings($settings,'main_title')
        : $seo_data['title'];
    $seo_data['description'] = (!isset($seo_data['description']))
        ? getSettings($settings,'main_description')
        : $seo_data['description'];
    $seo_data['keywords'] = (!isset($seo_data['keywords']))
        ? getSettings($settings, 'keywords')
        : $seo_data['keywords'];

    return $seo_data;
}
