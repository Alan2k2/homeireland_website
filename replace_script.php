<?php
$file = 'd:\home ireland\app\Http\Controllers\website\HomeController.php';
$content = file_get_contents($file);

$target1 = "            \$ad_subsciption[\$i]=Adverisement::where('status',1)->where('id',\$i)->first();\n            \$ad_subsciption[\$i]=\$ad_subsciption[\$i]->payment_status;";
$replacement1 = "            \$ad_subsciption_temp = Adverisement::where('status',1)->where('id',\$i)->first();\n            \$ad_subsciption[\$i] = \$ad_subsciption_temp ? \$ad_subsciption_temp->payment_status : 0;";

$target2 = "            \$property_subsciption[\$i]=PropertySubscription::find(\$i);\n            // echo\"<pre>\";print_r()\n            \$subscription_statusp[\$i]=\$property_subsciption[\$i]->payment_mode;";
$replacement2 = "            \$property_subsciption_temp = PropertySubscription::find(\$i);\n            // echo\"<pre>\";print_r()\n            \$subscription_statusp[\$i] = \$property_subsciption_temp ? \$property_subsciption_temp->payment_mode : 0;";

$target3 = "                    \$property_subsciption[\$i]=PropertySubscription::find(\$i);\n                    \$subscription_statusp[\$i]=\$property_subsciption[\$i]->payment_mode;";
$replacement3 = "                    \$property_subsciption_temp = PropertySubscription::find(\$i);\n                    \$subscription_statusp[\$i] = \$property_subsciption_temp ? \$property_subsciption_temp->payment_mode : 0;";

$content = str_replace($target1, $replacement1, $content);
$content = str_replace($target2, $replacement2, $content);
$content = str_replace($target3, $replacement3, $content);

file_put_contents($file, $content);
echo 'Replacement done.';
