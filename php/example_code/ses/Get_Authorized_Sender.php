<?php
/**
 * Copyright 2010-2018 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *
 * This file is licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License. A copy of
 * the License is located at
 *
 * http://aws.amazon.com/apache2.0/
 *
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 *
 *
 *
 *
 */

require 'vendor/autoload.php';

use Aws\SES\SESClient;
use Aws\Exception\AwsException;

//Create a SESClient
$SesClient = new SesClient([
    'profile' => 'default',
    'version' => '2010-12-01',
    'region' => 'us-east-1'
]);

$identity = "arn:aws:ses:us-east-1:123456789012:identity/example.com";
$name = "policyName";

try {
    $result = $SesClient->getIdentityPolicies([
        'Identity' => $identity,
        'PolicyName' => $name,
    ]);
    var_dump($result);
} catch (AwsException $e) {
    // output error message if fails
    echo $e->getMessage();
    echo "\n";
}
 

//snippet-sourcedescription:[<<FILENAME>> demonstrates how to ...]
//snippet-keyword:[PHP]
//snippet-keyword:[Code Sample]
//snippet-keyword:[Amazon Simple Email Service]
//snippet-service:[ses]
//snippet-sourcetype:[full-example]
//snippet-sourcedate:[9/20/18]
//snippet-sourceauthor:[jschwarzwalder]

