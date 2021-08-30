# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: zakdim <zakdim@student.42.fr>              +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/02/08 16:44:54 by zakdim            #+#    #+#              #
#    Updated: 2020/02/08 16:44:55 by zakdim           ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM debian:buster
RUN apt update
RUN apt install -y nginx
RUN service nginx start
RUN apt install -y mariadb-server
RUN apt-get install -y php-mbstring php-zip php-gd php-xml php-pear php-gettext php-cli php-fpm php-cgi php-mysql && service php7.3-fpm start
RUN apt install -y wget
RUN wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-english.tar.gz
RUN tar -xzf phpMyAdmin-4.9.0.1-english.tar.gz
RUN rm phpMyAdmin-4.9.0.1-english.tar.gz
RUN mv phpMyAdmin-4.9.0.1-english/ phpmyadmin
RUN mv phpmyadmin/config.sample.inc.php phpmyadmin/config.inc.php
COPY /srcs/config.inc.php /phpmyadmin
RUN mv phpmyadmin /var/www/html
COPY ./srcs/query.sql /query.sql
COPY ./srcs/localhost.sql /localhost.sql
RUN service mysql start && mysql -u root < "/localhost.sql" && mysql -u root < "/query.sql"
RUN chmod 777 /var/www/html/phpmyadmin
RUN chown -R www-data:www-data /var/www/html/phpmyadmin
RUN wget http://wordpress.org/latest.tar.gz
RUN tar xzf latest.tar.gz
RUN mv wordpress /var/www/html/
COPY ./srcs/wp-config.php /var/www/html/wordpress
RUN rm latest.tar.gz
RUN chown -R www-data:www-data /var/www/html/wordpress
RUN chmod -R 755 /var/www/html/wordpress
COPY ./srcs/default /etc/nginx/sites-available
COPY ./srcs/self-signed.conf /etc/nginx/snippets
RUN openssl req -subj "/C=MA/ST=CASABLANCA/L=CS/O=JIJI/CN=localhost" -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt
COPY ./srcs/setup.sh /setup.sh
EXPOSE 80
EXPOSE 443
ENTRYPOINT bash setup.sh
