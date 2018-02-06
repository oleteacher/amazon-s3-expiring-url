# About

Basic and raw PHP scriopt to create Amazon S3 Expiring URL's

## Usage

Very simple PHP script to create time expiring URL's for Amazon S3.

- Set your public and secret keys in key.php
- Set your bucket name in s3-expiring-url.php @ line 8.
- Set your link expire time in s3-expiring-url.php @ line 51. To test, set line 51 to a value of 1.
- Navigate to download.php and test link. Wait for time to expire and click link again. Should get expire message from Amazon.

## Not for Production

I do not recommend you use this script as is. We have found it safe for our needs but has never been testing in rouge environment.

### Credits

I have had this script for years and honestly cannot remember where the main code came from. Most is based on code directly from Amazon examples. I believe in giving credit where credit is due but in this case I haven't a clue...
