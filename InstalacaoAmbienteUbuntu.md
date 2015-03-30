# Instalação do ambiente de desenvolvimento #

<ol>
<li>Servidor Web:<br>
<pre><code><br>
sudo apt-get install apache2 php5 libapache2-mod-php5 #instala aplicativos<br>
sudo a2enmod rewrite expires headers php5 userdir #habilita módulos<br>
sudo nano /etc/apache2/mods-enabled/php5.conf #mudar “p3” para “p” no começo<br>
sudo nano /etc/apache2/mods-enabled/php5.conf #comentar de “&lt;IfModule mod_userdir.c&gt;” a “<br>
<br>
Unknown end tag for &lt;/IfModule&gt;<br>
<br>
”<br>
sudo nano /etc/apache2/sites-enabled/000-default #configurar “AllowOverride All” para /var/www<br>
sudo service apache2 restart #reinicia o serviço web após configurações</code></pre></li>
<li>Banco de dados:<br>
<pre><code><br>
#instala aplicativos:<br>
sudo apt-get install postgresql php5-pgsql pgadmin3<br>
#configura senha do usuário postgres:<br>
echo "ALTER USER postgres WITH PASSWORD 'cophp';" | sudo su postgres -c "psql"</code></pre></li>
<li>IDE para desenvolvimento:<br>
<pre><code><br>
sudo apt-get install eclipse</code></pre></li>
<li>Instalar o plugin <a href='http://code.google.com/p/cobalto-php/wiki/InstalandoPHPEclipse?tm=6'>PHPEclipse</a> no Eclipse</li>
</ol>