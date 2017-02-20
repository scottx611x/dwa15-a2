ssh -t root@104.236.23.209 "cd /var/www/html/dwa15-a2/ && git checkout master &&
	git pull && sudo service apache2 restart"
