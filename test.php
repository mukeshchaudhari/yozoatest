<?php
  use_helper('Text');
  if($userDetail['is_company']) {
    $path = sfConfig::get('app_companys_logo_folder_path', '/user_logo/');
    $logo = $userDetail['company_logo'];
    if(!$logo) {
      $logo = "t_default.jpg";
      $path = "/images/";
    } else {
      $logo = "t_".$logo;
    }
  }
  testst
  tsets
  tstst
  tsts
?>