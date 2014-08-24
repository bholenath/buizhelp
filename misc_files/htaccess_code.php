# BEGIN W3TC Browser Cache

<FilesMatch "\.(ico|pdf|flv|jpg|jpeg|png|gif|js|css|swf)$">
Header set Cache-Control "max-age=86400, private"
</FilesMatch>

<FilesMatch "\.(htm|html|php|xml)$">
Header set Cache-Control "max-age=7200, private"
</FilesMatch>


	ExpiresActive On
	ExpiresByType text/css A86400
    ExpiresByType application/javascript A86400
    ExpiresByType text/javascript A86400
    ExpiresByType text/x-js A86400
    ExpiresByType text/html A7200
    ExpiresByType text/richtext A7200
    ExpiresByType text/plain A7200
    ExpiresByType text/xsd A7200
    ExpiresByType text/xsl A7200
    ExpiresByType text/xml A7200
    ExpiresByType image/bmp A86400
    ExpiresByType image/gif A86400
    ExpiresByType image/x-icon A86400
    ExpiresByType image/jpeg A86400
    ExpiresByType application/json A86400
    ExpiresByType image/png A86400


# END W3TC Browser Cache