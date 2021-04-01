docker stop $(docker ps -a -q)
docker rm -f $(docker ps -aq)
ocker rmi $(docker images -q)