<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 07.08.2017
 * Time: 16:31
 */

$link = mysql_connect('localhost', 'root', '')
or die ('Not connected : ' . mysql_error());

// сделать foo текущей базой данных
mysql_select_db('testreg', $link) or die ('Can\'t use foo : ' . mysql_error());
