Installation VHOST

Virtuelle Hosts erlauben

In der Datei /Applications/XAMPP/xamppfiles/etc/httpd.conf musst Du virtuelle Hosts erlauben. Dazu entfernst Du die Raute (#) vor der folgenden Zeile:

# Virtual hosts
Include /Applications/XAMPP/etc/extra/httpd-vhosts.conf
Den virtuellen Host anlegen

In der Datei /Applications/XAMPP/xamppfiles/etc/extra/httpd-vhosts.conf fügst Du nun zwei Einträge ein. Der erste Eintrag ist dafür, dass der bekannte „localhost“ nicht vergessen geht

# localhost
```
<VirtualHost *:80>
    ServerName localhost
    DocumentRoot "/Applications/XAMPP/xamppfiles/htdocs"
    <Directory "/Applications/XAMPP/xamppfiles/htdocs">
        Options Indexes FollowSymLinks Includes execCGI
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```
Der zweite Eintrag ist dann für Deinen virtuellen Host

# My custom host
```
<VirtualHost *:80>
    ServerName mysite.local
    DocumentRoot "/Users/yourusername/path/to/your/site"
    <Directory "/Users/yourusername/path/to/your/site">
        Options Indexes FollowSymLinks Includes ExecCGI
        AllowOverride All
        Require all granted
    </Directory>
    ErrorLog "logs/mysite.local-error_log"
</VirtualHost>
```
Die Hosts Datei auf OS X bearbeiten

```
sudo nano /etc/hosts
```
Im Terminal musst Du jetzt die Hosts Datei von OS X bearbeiten

# XAMPP VirtualHost mappings
```
127.0.0.1 mysite.local
```


