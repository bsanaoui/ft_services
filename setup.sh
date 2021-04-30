minikube delete
minikube start --driver=virtualbox

minikube addons enable metallb

eval $(minikube docker-env)

# Build Images

docker build --no-cache -t mysql srcs/mysql/image
docker build --no-cache -t phpmyadmin srcs/phpmyadmini/image
docker build --no-cache -t wordpress srcs/wordpressi/image
docker build --no-cache -t influxdb srcs/influxdbi/image
docker build --no-cache -t grafana srcs/grafanai/image
docker build --no-cache -t ftps srcs/ftpsi/image
docker build --no-cache -t nginx srcs/nginxi/image


# Apply deployment ,Services and Configs
kubectl apply -f srcs/metallb.yaml
kubectl apply -f srcs/mysql/mysql.yaml
kubectl apply -f srcs/phpmyadmin/phpmyadmin.yaml
kubectl apply -f srcs/nginx/nginx.yaml
kubectl apply -f srcs/wordpress/wordpress.yaml
kubectl apply -f srcs/grafana/grafana.yaml
kubectl apply -f srcs/influxdb/influxdb.yaml
kubectl apply -f srcs/ftps/ftps.yaml

# kubectl get pods
minikube dashboard