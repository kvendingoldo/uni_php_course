For this tasks I had used the Docker container `mysql:latest`
Command for run container: 

    docker run --name mysql -d -e MYSQL_DATABASE=uni -e MYSQL_USER=asharov -e MYSQL_PASSWORD=passw0rd -e MYSQL_ROOT_PASSWORD=passw0rd -p 3306:3306 mysql:latest

After that you can connect to mysql:
  
    docker exec -it mysql bash
    mysql -h localhost -uroot -p uni
    
And create test data:
    
    CREATE TABLE test_table (
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
        data VARCHAR(100)
    );
    
    INSERT INTO test_table (data) VALUES ('some data 1');
    INSERT INTO test_table (data) VALUES ('some data 2');
    INSERT INTO test_table (data) VALUES ('some data 3');