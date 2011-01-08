<?php
/* 
 * This config file contains all of the information required for this code
 * to work. Please ensure that it is all correct.
 */

/*
 * Details for accessing the database you will store the pull requests in.
 *
 * THIS INFORMATION IS NOT CURRENTLY USED FOR ANYTHING. IT IS THE RESULT OF A
 * PREVIOUS FUNCTIONALITY THAT NO LONGER EXISTS.
 */

/*
$PULL_REQUEST_BOT['db_name'] = '';
$PULL_REQUEST_BOT['db_host'] = '';
$PULL_REQUEST_BOT['db_user'] = '';
$PULL_REQUEST_BOT['db_pass'] = '';
$PULL_REQUEST_BOT['db_prefix'] = '';
$PULL_REQUEST_BOT['db_requests_table'] = 'github_pull_requests';
$PULL_REQUEST_BOT['db_users_table'] = 'github_users';
 */

/*
 * Details for sending emails.
 */

// The email address to send to.
$PULL_REQUEST_BOT['email_to'] = 'moshersam@gmail.com';

// The email address to display in the "from" field.
$PULL_REQUEST_BOT['email_from'] = 'moshersam@gmail.com';

// The subject of the email.
$PULL_REQUEST_BOT['email_subject'] = 'New ThinkUp Pull Requests';

// The email to send replies to.
$PULL_REQUEST_BOT['reply_to'] = 'moshersam@gmail.com';

// Whether or not you are using HTML in the email.
$PULL_REQUEST_BOT['email_use_html'] = true;

// Set this to true if you want to group multiple pull requests into one email.
$PULL_REQUEST_BOT['group_requests'] = true;

/*
 * Details for the repository you want to fetch pull requests from.
 */

// The user that created the repo.
$PULL_REQUEST_BOT['repo_user'] = 'ginatrapani';

// The name of the repo.
$PULL_REQUEST_BOT['repo_name'] = 'ThinkUp';
?>
