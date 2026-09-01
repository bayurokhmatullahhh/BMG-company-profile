<?php
require __DIR__ . '/vendor/autoload.php';

$test = new Tests\Feature\ContactFormTest('test_contact_form_submission_success');

$ref = new ReflectionMethod($test, 'setUp');
$ref->setAccessible(true);
 
try {
    $ref->invoke($test);
    $test->test_contact_form_submission_success();
    echo "TEST PASSED!\n";
} catch (\Throwable $e) {
    echo "TEST FAILED: " . get_class($e) . ": " . $e->getMessage() . "\n";
    echo "FILE: " . $e->getFile() . ":" . $e->getLine() . "\n";
    if ($e->getPrevious()) {
        echo "PREV: " . $e->getPrevious()->getMessage() . "\n";
    }
}
