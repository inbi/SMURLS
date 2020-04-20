# SMURLS

SMURLS is a "**S**elf-**M**ade **URL** **S**hortener" which i wrote a few years ago for personal use.

### Features:
- Uses a plain-text CSV file for storing the URLs
- Can't be abused by spammers or totally unknown people
- No dependencies
- light-weight script

### Notes:
The entries in the CSV can't be updated via browser. You need to edit it locally (with your [favorite text editor](https://en.wikipedia.org/wiki/Brief_(text_editor))) and upload it via FTP or SCP to your server. Or you can edit the CSV directly on the server via SSH (nano, vi etc.). 

The last two fields ("date" and "description") in the CSV are not required for the script to work properly.

Putting the CSV in a seperate subdirectory allows you to restrict access to it (via [.htaccess authentication](https://httpd.apache.org/docs/2.4/mod/mod_authn_core.html#authtype))

### Components:

- shorty.php (the main script)
- shurl.csv (the "database")
- .htaccess (calls scripts via regex/rewrite)

### Live Demo:

Working Shortcut: [https://tlr.de/6](https://tlr.de/6)

Broken Shortcut (ErrorMsg): [https://tlr.de/989](https://tlr.de/989)
