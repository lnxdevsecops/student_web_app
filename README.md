# student_web_app



1. This application is going to connect with mysql database wiht "mysql" hostname and port 3306. This application will create a  database automatically in background.


2. Make sure we create a custom bridge network while working on docker and deploy both app container and mysql container in same network

docker network create -d bridge student
 

3. Running application on student network
   
docker run -d -p 8080:80  --name student-web-app  --network student   lnxadm1991/student-web-app



5. Create mysql container in student network with following command. Make sure container name should be mysql
   
docker run -d \
  --name mysql \
  -e MYSQL_ROOT_PASSWORD=Linux.adm@1 \
  -p 3306:3306 \
  --network student \
  mysql:latest

