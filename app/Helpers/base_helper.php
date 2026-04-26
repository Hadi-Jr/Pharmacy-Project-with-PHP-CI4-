<?php

function getSettings(array $settings, string $setting_key){
    $result = '';

    foreach ($settings as $value) {
        if($value['key'] === $setting_key){
            $result = $value['value'];
        }
    }

    return $result;
}