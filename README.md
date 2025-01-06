This project demonstrates the deployment of a PHP-MySQL application in Kubernetes. It includes:

MySQL Deployment: A single MySQL database pod with persistent storage and a ClusterIP service for internal communication​.
​PHP Application Deployment: A PHP application accessing the MySQL database, with three replicas and a LoadBalancer service for external access​.
Persistent Storage: A PersistentVolume and PersistentVolumeClaim for reliable MySQL data storage​.
Configuration files are included for easy deployment.
