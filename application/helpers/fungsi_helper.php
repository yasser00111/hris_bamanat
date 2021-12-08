<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    function antiinjection($data){
      $filter_sql = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
      return $filter_sql;
    }

    function seo($text){
        $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
        $text = trim($text, '-');
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        $text = strtolower($text);
        $text = preg_replace('~[^-\w]+~', '', $text);
        if (empty($text)){ return 'n-a'; }
        return $text;
    }

    function rupiah($angka){
        $hasil = number_format($angka);
        return "Rp. ".$hasil;
    }

    function is_login(){
        $ci = get_instance();
        if(!$ci->session->userdata('nama_pengguna')){
            redirect("login.html");
        }
    }

    function is_admin(){
        $ci = get_instance();
        if(!$ci->session->userdata('admin_login')){
            redirect("administrator/login.html");
        }
    }
?>