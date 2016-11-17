FROM ubuntu:14.04
MAINTAINER mukki
#plugins
RUN apt-get -y update
RUN apt-get -y upgrade
RUN apt-get -y install apache2 openssl git
RUN git clone https://github.com/mukendra/wordpress.git /opt
RUN cp /opt/000-default.conf  /etc/apache2/sites-available
RUN a2enmod ssl
RUN mkdir /etc/apache2/ssl
RUN cp /opt/apache.key /etc/apache2/ssl
RUN cp /opt/apache.crt /etc/apache2/ssl
RUN a2ensite default-ssl
RUN a2ensite  default-ssl.conf
RUN apt-get -y install php5
RUN apt-get -y install php5-mysql wget nano
WORKDIR /opt
RUN wget https://wordpress.org/latest.tar.gz
RUN tar xvzf latest.tar.gz
#RUN cp /opt/wp-config.php /opt/wp-config.php
RUN cp -R /opt/* /var/www/html/
RUN chown -R www-data:www-data  /var/www/html
RUN chmod -R 755 /var/www/html/
EXPOSE 80 3306
ENTRYPOINT service apache2 restart && sleep 3600
