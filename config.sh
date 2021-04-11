docker build --no-cache -t mysql .
docker build --no-cache -t phpmyadmin .

minikube addons enable metallb
kubectl apply -f k8s_conf/config-metallb.yaml