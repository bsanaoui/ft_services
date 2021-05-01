minikube delete
minikube start --driver=virtualbox

minikube addons enable metallb

eval $(minikube docker-env)

# Build Images

docker build --no-cache -t mysql srcs/mysql/image
docker build --no-cache -t phpmyadmin srcs/phpmyadmin/image
docker build --no-cache -t wordpress srcs/wordpress/image
docker build --no-cache -t influxdb srcs/influxdb/image
docker build --no-cache -t grafana srcs/grafana/image
docker build --no-cache -t ftps srcs/ftps/image
docker build --no-cache -t nginx srcs/nginx/image


# Apply deployment ,Services and Configs
kubectl apply -f srcs/config-metallb.yaml
kubectl apply -f srcs/mysql/mysql.yaml
kubectl apply -f srcs/phpmyadmin/phpmyadmin.yaml
kubectl apply -f srcs/nginx/nginx.yaml
kubectl apply -f srcs/wordpress/wordpress.yaml
kubectl apply -f srcs/grafana/grafana.yaml
kubectl apply -f srcs/influxdb/influxdb.yaml
kubectl apply -f srcs/ftps/ftps.yaml

minikube dashboard