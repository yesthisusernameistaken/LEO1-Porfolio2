<!DOCTYPE html>
<html><head><title>This is a tab</title></head><body style="background-color:po$
<h1 align="center">Portfolio two</h1>
<p style="color:blue;">If you are seeing this text, Container 1 is running fine$
<a href="https://www.w3schools.com">This is a link to a github repo with more info$
<?php
        // create curl resource
        $ch = curl_init();
        // set url
        curl_setopt($ch, CURLOPT_URL, "C2:8080");
        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // $output contains the output string
        $output = curl_exec($ch);
        // close curl resource to free up system resources
        curl_close($ch);
        print $output;
?>
</body></html>