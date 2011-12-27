<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));

class StringHelperPackage extends Package {
  
  protected $pkgHandle = 'string_helper';
  protected $appVersionRequired = '5.4.2.2';
  protected $pkgVersion = '0.9';

  public function getPackageDescription() {
    return t("Extended string helper methods");
  }

  public function getPackageName() {
    return t("String Helper");
  }
     
  public function install() {
    $pkg  = parent::install();
  }   
}

?>