# Instalação do cobalto-php #

<ol>
<blockquote><li> download da ultima versão na página de <a href='http://code.google.com/p/cobalto-php/downloads'>Downloads</a></li>
<li> descompactar o arquivo na pasta “/var/www”</li>
<li> executar o dump do banco para PostgreSQL<br>
<pre><code><br>
#cria o banco de dados “cophp”:<br>
echo "DROP DATABASE cophp; CREATE DATABASE cophp;" | sudo su postgres -c "psql"<br>
#cria as tabelas no banco cophp:<br>
echo "\i /var/www/cobalto-php/_documentacao/dumps/postgre.sql" | sudo su postgres -c "psql cophp"</code></pre></li>
<li> para testar acesse a url <a href='http://localhost/cobalto-php'>http://localhost/cobalto-php</a> no seu navegador</li>
</ol>