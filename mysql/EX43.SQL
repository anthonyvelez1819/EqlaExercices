CREATE USER 'local_user'@'localhost' IDENTIFIED BY 'TKT ici c sûre';
       GRANT ALL PRIVILEGES ON *.* TO 'local_user' @ 'localhost'WITH GRANT OPTION;
        FLUSH PRIVILEGES;
              CREATE USER 'remote_user'@'%' IDENTIFIED BY 'Roger ouvre les codes!';
       GRANT ALL PRIVILEGES ON *.* TO 'remote_user'@'%'WITH GRANT OPTION;
        FLUSH PRIVILEGES;