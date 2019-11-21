<?php

// $config['date_format']
// The date format is shown in the logs, this format can be altered to suit localised preferences.
// For the full list of possible values see https://secure.php.net/manual/en/function.date.php.
$config['date_format'] = "F j, Y, g:i:s a";

// $config['timezone']
// To ensure the log dates and times line up with where you are, you can set the timezone you're in,
// in the setting below. Possible values can be found https://secure.php.net/manual/en/timezones.php.
$config['timezone'] = date_default_timezone_set('America/Santiago');

// $config['obfuscate_config']
// Para proporcionar una capa de seguridad adicional, aunque menor, puede ofuscar config.php la próxima vez que se genere una lista de respaldo. Para hacer esto, simplemente establezca la variable en true y sus contenidos config.php se ofuscarán y se moverán a secure-config.php y se eliminarán config.php.
// NOTA: ¡ESTO NO ES ENCRIPTACIÓN! Como el script necesita acceder a los detalles de la configuración, su configuración NO se cifrará de una manera al establecer esta variable en true. Esto simplemente proporciona una técnica básica de ofuscación.

$config['obfuscate_config'] = FALSE;

// $config['check_version']
// Para asegurarse de que está ejecutando la última versión de este script cada vez que genera una nueva copia de seguridad, puede habilitar las comprobaciones en https://check_version.whmbackup.solutions/.
// Hay 3 niveles de notificaciones de actualización en las que puede establecer la variable de configuración.
// 0 - Disable Checking For Updates.
// 1 - Notify of Major Update.
// 2 - Notify of Major & Minor Updates. 

$config['check_version'] = '2';

// Buscar actualizaciones también habilitará la actualización automática de scripts.
// Para deshabilitar las actualizaciones automáticas de script, descomente la línea a continuación.

// $config["skip_update"] = '1';

// $config['whm_hostname']
// Este es el nombre de host o la dirección IP del servidor cPanel en el que se encuentra alojado su revendedor.

$config['whm_hostname'] = 'vps79.itfinden.com';

// $config['whm_port']
// El valor del puerto de inicio de sesión de cPanel. Por lo general, esto es 2086 para no SSL y 2087 para conexiones SSL.

$config['whm_port'] = '2087';

// $config['whm_username']
// This is your username used to login to your WHM.
$config['whm_username'] = 'root';

// $config['whm_auth']
// To authenticate into your account this value can be set to either password or hash.
// The password or hash should then be entered into $config['whm_auth_key'];
// password - Is the password used to login to your WHM.
// hash - This is using the hash generated within WHM (Remote Access Key or API Token)
$config['whm_auth'] = 'backups';
$config['whm_auth_key'] = 'K9TATUJNOTY7QMO9K80XD7DB142DEW3U';

// $config['type_of_backup']
// The values of this setting can be numbers 1 to 6 as listed below.
// 1 = Backup All Accounts 
// 2 = Backup Accounts Based On Account Username
// 3 = Backup Accounts Based On Hosting Package
// 4 = Backup Accounts Based On Primary Account Domain
// 5 = Backup Accounts Based On Account Owner
// 6 = Backup Accounts Based On IP
$config['type_of_backup'] = '1';

// $config['backup_criteria']
// Según la configuración de type_of_backup anterior, esto debe establecerse en el nombre de usuario / paquete / dominio /
// propietario / ip que desea respaldar. Para separar varios criterios, use comas.
// E.g. user1,user2,user3
// E.g. package1,package2,package3
$config['backup_criteria'] = '';

// $config['backup_exclusions']
// You can exclude accounts from being backed up by entering their usernames seperated by commans in the field below.
$config['backup_exclusions'] = '';

// $config['backup_email']
// Specifying an email address in this field will cause a cPanel generated email for each account
// to be sent, the backup log generated by this script will also be sent to the email address
// specified.
$config['backup_email'] = 'cm@itfinden.com';

// $config['backup_destination']
// Possible values are homedir, ftp, passiveftp or scp.
//      homedir - Will cause a backup to be placed in the users home directory.
//      ftp - Will cause a backup to be sent to a remote FTP server.
//      passiveftp - Will cause a backup to be sent to a remote FTP server.
//      scp - Will cause a back to be sent to SSH or SFTP storage. 
$config['backup_destination'] = 'scp';

// ======================================
// FTP, PASSIVEFTP OR SCP Only
// ======================================
// Configuration fields past this point will be ignored unless ftp, passiveftp or scp are selected.
// If cPanel version is above 11.78. SSH keys with SCP can be used. For more information visit
// https://whmbackup.solutions/documentation/configuration/ 

// $config['backup_server']
// The hostname/ip address of your remote FTP or SCP storage.
// This field is only required when $config['backup_destination'] is set to ftp, passiveftp or scp.
$config['backup_hostname'] = 'vps101.itfinden.com';

// $config['backup_port']
// The port to access your remote FTP or SCP storage.
// e.g. Default FTP port is 21.
// e.g. Default SSH port is 22.
$config['backup_port'] = '7432';

// $config['backup_user']
// The username to access the remote FTP or SCP storage.
$config['backup_user'] = 'Vps79';

// $config['backup_pass']
// The password required to access the remote FTP or SCP storage.
$config['backup_pass'] = 'QazWsxEdc2019';

// $config['backup_rdir']
// This is the file path on the remote server to store the backups.
// Please note this folder path must exist.
$config['backup_rdir'] = '/backups/';

// ======================================
// BACKUP RETENTION (ftp_retention.php)
// ======================================
// Configuration fields past this point will be ignored unless $config['backup_destination'] is set to ftp or passiveftp and 
// ftp_retention.php is ran.

// $config['max_backups_per_account']
// This will set the number of backups to keep for each account found on the FTP server.
$config['max_backups_per_account'] = '5';
?>