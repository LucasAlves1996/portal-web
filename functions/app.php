<?php

function redirect($viewName)
{
	header("Location: ".DIR."/$viewName");
}

?>