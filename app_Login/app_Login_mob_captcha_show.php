<?php

include_once 'app_Login_mob_securimage.php';

$img_secur = new securimage();

$img_secur->charset                      = '0123456789';
$img_secur->code_length                  = 4;
$img_secur->gd_font_file                 = '../_lib/font/bubblebath.gdf';
$img_secur->image_height                 = 45;
$img_secur->image_width                  = 175;
$img_secur->ttf_file                     = '../_lib/font/elephant.ttf';
$img_secur->font_size                    = '20';
$img_secur->text_angle_minimum           = '-20';
$img_secur->text_angle_maximum           = '20';
$img_secur->text_x_start                 = '8';
$img_secur->text_minimum_distance        = '30';
$img_secur->text_maximum_distance        = '33';
$img_secur->image_bg_color               = '#E3DAED';
$img_secur->multi_text_color             = '#0A68DD,#F65C47,#8D32FD';
$img_secur->use_transparent_text         = true;
$img_secur->text_transparency_percentage = '15';
$img_secur->draw_lines                   = true;
$img_secur->line_color                   = '#80BFFF';
$img_secur->line_distance                = '5';
$img_secur->line_thickness               = '1';
$img_secur->arc_linethrough              = true;
$img_secur->arc_line_colors              = '#8080FF';

$img_secur->show();

?>
