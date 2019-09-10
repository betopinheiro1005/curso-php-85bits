<?php
// Desligando todos os avisos de erros
error_reporting(0);
// Ligando apenas para warning
error_reporting(E_WARNING);
// com o uso do pipe | é possível criar uma lista
// fixa de avisos para erros
error_reporting(E_ERROR | E_WARNING | E_PARSE);
// E_ALL é o equivalente a todos os tipos
error_reporting(E_ALL);
// Com o uso do ^ (not) é possível remover
// um item da lista (todos menos notice)
error_reporting(E_ALL ^ E_NOTICE);