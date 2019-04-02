<h1>Hi There!</h1>
This file is a simple way to check how ansible loads files from git.
<br />ENV<br />
<pre>
<?php var_dump($_ENV); ?>
</pre>
FILE_LNK<br />
<pre>
<?php var_dump(getenv('FILE_LNK')); ?>
</pre>
SERVER<br />
<pre style="font-size:8px; max-height:400px;">
<?php var_dump($_SERVER); ?>
</pre>
<?php phpinfo(); ?>
