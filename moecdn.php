<?php
class MoeCDN {
    public static $options = array(
        'gravatar'    => true, //use gravatar cdn?
        'googleapis'  => true, //use google apis cdn?
        'worg'        => false, //use w.org(wordpress) cdn?
        'wpcom'       => false //use wp.com(wordpress.com) cdn?
    );

    // 缓冲替换输出
    public static function bufferStart() {
        ob_start(array('MoeCDN', 'replace'));
    }
    public static function bufferEnd() {
        ob_end_flush();
    }

    // 替换内容
    public static function replace($content) {
        if (self::$options['gravatar']) {
            $content = str_replace(array("//gravatar.com", "//www.gravatar.com", "//0.gravatar.com", "//1.gravatar.com", "//2.gravatar.com", "//3.gravatar.com", "cn.gravatar.com"), "//gravatar.moefont.com", $content);
            $content = str_replace(array("//secure.gravatar.com"), "//gravatar-ssl.moefont.com", $content);
        }

        if (self::$options['googleapis']) {
            $content = str_replace(array("//fonts.googleapis.com"), "//cdn.moefont.com/fonts", $content);
            $content = str_replace(array("//ajax.googleapis.com"), "//cdn.moefont.com/ajax", $content);
        }

        if (self::$options['worg']) {
            $content = str_replace(array("//s.w.org"), "//cdn.moefont.com/worg", $content);
        }

        if (self::$options['wpcom']) {
            $content = str_replace(array("//s0.wp.com", "//s1.wp.com"), "//cdn.moefont.com/wpcom", $content);
        }

        if(ROLE == ROLE_ADMIN) {
            $content .= '<!--Thank you for using MoeCDN! (This message is only visiable for admin)-->';
        }
        return $content;
    }
}

MoeCDN::bufferStart();