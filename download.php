<?php
# Include the s3-expiring-url.php for echo below.
include('s3-expiring-url.php');
?>

<h2>S3 Expiring URL</h2>

<p>Link is valid according to your settings in s3-expiring-url.php. Set value to 1 for a quick test. After loading page wait couple of minutes and try link again.</p>

<p><a href="<?php echo getSignedUrl($awsAccessKey, $secretKey, $bucket, 'qikcrypt.zip'); ?>">DOWNLOAD THE FILE</a></p>
