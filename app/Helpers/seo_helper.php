<?php

function getSeoBase(array $seo_data, array $settings)
{
    $data = checkSeoData($seo_data, $settings);

    return '
	    <!-- SEO -->
        <meta charset="UTF-8">
    
        <title>'.$data['title'].'</title>
        <meta name="description" content="'.$data['description'].'">
        <meta name="keywords" content="'.$data['keywords'].'">
    
        <meta name=”robots” content="index, follow">
    
        <meta property="og:image" content="" />
        <meta property="og:title" content="'.$data['title'].'" />
        <meta property="og:description" content="'.$data['description'].'" />
        <meta property="og:type" content="article" />
        <meta property="og:site_name" content="'.$data['title'].'" />
    
        <meta property="twitter:title" content="'.$data['title'].'" />
        <meta property="twitter:description" content="'.$data['description'].'" />
        <meta property="twitter:card" content="summary_large_image" />
        <meta property="twitter:image:src" content="" />
    ';
}

function checkSeoData(array $data, array $settings){
    $data['title'] = (!isset($data['main_title']))
        ? getSettings($settings,'main_title')
        : $data['main_title'];
    $data['description'] = (!isset($data['description']))
        ? getSettings($settings,'main_description')
        : $data['description'];
    $data['keywords'] = (!isset($data['keywords']))
        ? getSettings($settings, 'keywords')
        : $data['keywords'];

    return $data;
}
