#############################################################################
                         Uniform Server Zero XIV 
#############################################################################
 01-06-2022
#############################################################################

-----------
Introduction
-----------
 The Uniform Server Zero is designed for portability; emphasis is
 given to reducing code size. The Uniform Server Zero achieves this
 through a modular implementation. Install only modules (plugins)
 you require. These are listed in the documentation plugin section:
 ZeroXIV_documentation_x_x_x.exe

------------------------
Install module (plugins)
------------------------

 All plugins are installed as follows:
  1) Copy a plugin to folder UniServerZ.
  2) Double-click on the downloaded plugin; this starts the extraction process.
  3) If requested, allow overwriting of existing files.

 Note: After installing a PHP module, always restart UniController.

--------------------
Clean module install
--------------------

 First time installation of modules requires nothing special; proceed as above.

 For modules that have already been installed, first delete the module folder and
 then proceed as above.

 Module name and corresponding folder to delete is listed below:

 ZeroXIV_apache_2_x_x.exe    UniServerZ\core\apache2
 
 ZeroXIV_mysql_5_x_x.exe     UniServerZ\core\mysql
 ZeroXIV_mysql_8_x_x.exe     UniServerZ\core\mysql
 ZeroXIV_mariadb_10_x_x.exe  UniServerZ\core\mysql

 ZeroXIV_palemoon_31_x_x.exe UniServerZ\core\palemoon

 ZeroXIV_php_7_0_x.exe       UniServerZ\core\php70
 ZeroXIV_php_7_1_x.exe       UniServerZ\core\php71
 ZeroXIV_php_7_2_x.exe       UniServerZ\core\php72
 ZeroXIV_php_7_3_x.exe       UniServerZ\core\php73
 ZeroXIV_php_7_4_x.exe       UniServerZ\core\php74
 ZeroXIV_php_8_0_x.exe       UniServerZ\core\php80
 ZeroXIV_php_8_1_x.exe       UniServerZ\core\php81

 ZeroXIV_phpmyadmin_5_x_x.exe       UniServerZ\home\us_opt1
 ZeroXIV_adminer_4_x_x.exe          UniServerZ\home\us_opt2
 ZeroXIV_mysqlautobackup_1_x_x.exe  UniServerZ\utils (except EdHost.exe)

 ZeroXIV_strawberry_perl_5_x_x.exe UniServerZ\home\perl

----------------------
Additional Information
----------------------

 Apache and PHP binaries are compiled with VS16.
 Be sure that you have installed the Visual C++ Redistributable
 for Visual Studio 2015-2022: vc_redist_x64/x86.exe

 Download: 
 https://support.microsoft.com/en-us/help/2977003/the-latest-supported-visual-c-downloads 
 Select: vc_redist.x86.exe
 
 
--------------------------------------o0o------------------------------------
            Copyright 2002-2022 The Uniform Server Development Team
                            All rights reserved.
