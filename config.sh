minikube start
minikube dashboard

minikube addons disable metallb
minikube addons enable metallb

kubectl apply -f k8s_conf/config-metallb.yaml
kubectl apply -f k8s_conf/ftps.yaml
kubectl apply -f k8s_conf/nginx.yaml
kubectl apply -f k8s_conf/wordpress.yaml
kubectl apply -f k8s_conf/phpmyadmin.yaml
kubectl apply -f k8s_conf/mysql.yaml
kubectl apply -f k8s_conf/influxdb.yaml
kubectl apply -f k8s_conf/grafana.yaml