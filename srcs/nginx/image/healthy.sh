if [[ $(ps | grep -v "grep" | grep -c "nginx") eq 0 ]]
then
        exit 1
elif [[ $(ps | grep -v "grep" | grep -c "php-fpm") eq 0 ]]
then
        exit 1
elif [[ $(ps | grep -v "grep" | grep -c "telegraf") eq 0 ]]
then
        exit 1
elif [ $(ps | grep -v "grep" | grep -c "sshd") eq 0 ]
then 
	exit 1
else
	exit 0
fi