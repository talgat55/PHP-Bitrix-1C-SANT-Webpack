<?php

/**
 * Return theme
 * @return string
 */
function checkTheme()
{
    global $APPLICATION;
    // change theme colors

    $mounth = date('m');

    if (!isset($_GET['theme'])) {
        $cookie_theme = $APPLICATION->get_cookie("theme_site");
        if (!empty($cookie_theme)) {
            if ($cookie_theme == 'winter') {
                $GLOBALS['theme'] = 'winter';
                $mainClass = 'winter-theme';
            } else if ($cookie_theme == 'spring') {
                $GLOBALS['theme'] = 'spring';
                $mainClass = 'spring-theme';
            } else if ($cookie_theme == 'autumn') {
                $GLOBALS['theme'] = 'autumn';
                $mainClass = 'autumn-theme';
            } else if ($cookie_theme == 'summer') {
                $GLOBALS['theme'] = 'summer';
                $mainClass = 'summer-theme';
            }else{
                themeByMouth($mounth);
            }

        } else {

            echo $cookie_theme;
            themeByMouth($mounth);
        }

    } else {

        if ($_GET['theme'] == 'winter') {
            $GLOBALS['theme'] = 'winter';
            $mainClass = 'winter-theme';
            $APPLICATION->set_cookie("theme_site", 'winter');
        } else if ($_GET['theme'] == 'spring') {
            $GLOBALS['theme'] = 'spring';
            $mainClass = 'spring-theme';
            $APPLICATION->set_cookie("theme_site", 'spring');
        } else if ($_GET['theme'] == 'autumn') {
            $GLOBALS['theme'] = 'autumn';
            $mainClass = 'autumn-theme';
            $APPLICATION->set_cookie("theme_site", 'autumn');
        } else if ($_GET['theme'] == 'summer') {
            $GLOBALS['theme'] = 'summer';
            $mainClass = 'summer-theme';
            $APPLICATION->set_cookie("theme_site", 'summer');
        }
    }

    return $mainClass;

}

/**
 * Return theme class by mounth
 * @param $mounth
 * @return string
 */
function themeByMouth($mounth)
{
    global $APPLICATION;
    if ($mounth == '01' || $mounth == '02' || $mounth == '12') {
        $GLOBALS['theme'] = 'winter';
        $mainClass = 'winter-theme';
        $APPLICATION->set_cookie("theme_site", 'winter');
    } else if ($mounth == '03' || $mounth == '04' || $mounth == '05') {
        $GLOBALS['theme'] = 'spring';
        $mainClass = 'spring-theme';
        $APPLICATION->set_cookie("theme_site", 'spring');
    } else if ($mounth == '09' || $mounth == '10' || $mounth == '11') {
        $GLOBALS['theme'] = 'autumn';
        $mainClass = 'autumn-theme';
        $APPLICATION->set_cookie("theme_site", 'autumn');
    } else if ($mounth == '06' || $mounth == '07' || $mounth == '08') {
        $GLOBALS['theme'] = 'summer';
        $mainClass = 'summer-theme';
        $APPLICATION->set_cookie("theme_site", 'summer');
    }
    return $mainClass;
}