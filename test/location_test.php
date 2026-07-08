<?php
echo"tset";
// / NOTE: The php_soap.dll extension must be enabled in the php.ini file.
function GetFullAddress($licence, $eircode)
{
  $options = array(
    "Option" => array(
      array(
        "Name" => "Formatter",
        "Value" => "DefaultFormatter"
      ),
      array(
        "Name" => "FixTownCounty",
        "Value" => "true"
      ),
      array(
        "Name" => "MaxLines",
        "Value" => "6"
      ),
      array(
        "Name" => "MaxLineLength",
        "Value" => "255"
      ),
      array(
        "Name" => "NormalizeCase",
        "Value" => "true"
      ),
      array(
        "Name" => "NormalizeTownCase",
        "Value" => "false"
      ),
      array(
        "Name" => "ExcludeCounty",
        "Value" => "false"
      ),
      array(
        "Name" => "UnwantedPunctuation",
        "Value" => ""
      ),
      array(
        "Name" => "FixBuilding",
        "Value" => "false"
      ),
      array(
        "Name" => "ReturnResultCount",
        "Value" => "false"
      ),
      array(
        "Name" => "PreferredLanguage",
        "Value" => "en"
      )
    )
  );
  $params = array(
    "username" => "your-username",
    "password" => "your-password",
    "licence" => $licence,
    "eircode" => $eircode,
    "options" => $options
  );
  $client = new SoapClient("https://webservices.data-8.co.uk/Eircode.asmx?WSDL");
  $result = $client->GetFullAddress($params);
  if ($result->GetFullAddressResult->Status->Success == 0)
  {
    echo "Error: " . $result->GetFullAddressResult->Status->ErrorMessage;
  }
  else
  {
    // TODO: Process method results here.
    // Results can be extracted from the following fields:
    // $result->GetFullAddressResult->ResultCount
    //   Contains the number of addresses in the `Results` field. This field is only populated if the `ReturnResultCount` option is set to `True`
    // $result->GetFullAddressResult->Results
    //   Contains an array of addresses that match the query.
    //   A formatted version of each address in the array is available in the `Address` field, and a structured version of the address is available in the `RawAddress` field.
    //   NOTE: This field contains an array of items, but if it contains only one item,
    //   PHP may not recognise it as an array. To always extract the result of this
    //   field as an array, we recommend you always access it using the
    //   getArrayFromResponse method described at
    //   http://www.php.net/soap_soapclient_soapcall#75797, e.g.
    //   foreach (getArrayFromResponse($result->GetFullAddressResult->Results) as $item)
    //   {
    //     ...
    //   }
  }
}
?>