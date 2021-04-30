if [[ $(ps | grep -c "influxd" | grep -v "grep" ) == 0 ]]
then
        exit 1
elif [[ $(ps | grep -c "telegraf" | grep -v "grep") == 0 ]]
then
        exit 1
else
	exit 0
fi