sudo apt-get install python-software-properties -y
sudo add-apt-repository ppa:ondrej/php -y
sudo apt-get update -y
sudo apt-get install php7.3 php-pear php7.3-curl php7.3-dev php7.3-gd php7.3-mbstring php7.3-zip php7.3-mysql php7.3-xml
sudo apt-get install libapache2-mod-php7.3 -y
 
sudo a2dismod php5
sudo a2enmod php7.3
sudo service apache2 restart